<?php
/**
 * GATE Element Set Plugin
 *
 * Creates element set for GATE (General International Standard Archival Description) 
 * defines the elements that should be included in an archival finding aid.
 *
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 * @package PBCore-Element-Set
 **/

class ISADgElementSetPlugin extends Omeka_Plugin_AbstractPlugin
{
    private $_elementSetName = 'GATE';

    /**
     * @var array Hooks for the plugin.
     */
    protected $_hooks = array(
        'install',
        'uninstall',
        'admin_append_to_plugin_uninstall_message',
        'config_form',
        'config',
        'after_save_item',
        'public_theme_header',
        );

    /**
     * @var array Filters for the plugin.
     */
    protected $_filters = array(
        'response_contexts',
        'action_contexts',
    );

    /**
     * @var array This plugin's options.
     */
    protected $_options = array(
        'pbcore_element_set_add_url_as_identifier' => false,
    );

    /**
     * Install the plugin.
     */
    public function hookInstall()
    {
        $this->_installOptions();

        // Load elements to add.
        require_once('elements.php');

        // Don't install if an element set already exists.
        if ($this->_getElementSet($this->_elementSetName)) {
            throw new Omeka_Plugin_Installer_Exception('An element set by the name "' . $this->_elementSetName . '" already exists. You must delete that element set to install this plugin.');
        }

        insert_element_set($elementSetMetadata, $elements);
    }

    /**
     * Uninstall the plugin.
     */
    public function hookUninstall()
    {
        $this->_deleteElementSet($this->_elementSetName);

        $this->_uninstallOptions();
    }

    /**
     * Warns before the uninstallation of the plugin.
     */
    public function hookAdminAppendToPluginUninstallMessage()
    {
        echo '<p><strong>' . __('Warning') . '</strong>:'
            . __('This will remove all the "' . $this->_elementSetName . '" elements added by this plugin and permanently delete all element texts entered in those fields.')
            . '</p>';
    }

    /**
     * Displays configuration form.
     *
     * @return void
     */
    public function hookConfigForm()
    {
        include('config_form.php');
    }

    /**
     * Saves plugin configuration.
     *
     * @return void
     */
    public function hookConfig($args)
    {
        $post = $args['post'];

        set_option('pbcore_element_set_add_url_as_identifier', $post['PBCoreElementSetAddUrlAsIdentifier']);
    }

    /**
     * The recommended pbcore identifier is to use the omeka url with current
     * id, so we need to update the item once it is saved for the first time
     * (insert). An option is added to disable this feature.
     */
    public function hookAfterSaveItem($args)
    {
        $post = $args['post'];
        $item = $args['record'];

        // Add the default identifier if wished.
        if ($args['insert'] && (boolean) get_option('pbcore_element_set_add_url_as_identifier')) {
            $text = WEB_ROOT . '/items/show/' . $item->id;

            // Check if this url already exists as an identifier.
            $elementTexts = metadata($item, array('GATE', 'Identifier'), array('all' => true, 'no_escape', 'no_filter'));
            if (!in_array($text, $elementTexts)) {
                //// We use direct sql to avoid some problems with this update, in
                //// particular when there are attached files.
                // $elementTexts = array($this->_elementSetName => array('Identifier' => array(array(
                //     'text' => $text,
                //     'html' => false,
                // ))));
                // update_item($item, array(), $elementTexts);
                static $elementId;
                if (!$elementId) {
                    $elementId = $this->_db->getTable('Element')->findByElementSetNameAndElementName('GATE', 'Identifier')->id;
                }
                $sql = "
                    INSERT INTO {$this->_db->ElementText} (record_id, record_type, element_id, html, text)
                    VALUES ('{$item->id}', 'Item', '{$elementId}', '0', '$text')
                ";
                $this->_db->query($sql);
            }
        }
        // Update or remove (see status).
        else {
            // Nothing, because the user should be able to remove or update the
            // default identifier manually.
        }
    }

    // TODO To check.
    public function hookPublicThemeHeader()
    {
        $request = Zend_Controller_Front::getInstance()->getRequest();
        if ($request->getControllerName() == 'items' && $request->getActionName() == 'show') {
            echo '<link rel="alternate" type="application/rss+xml" href="' . record_url(get_current_record('item')) . '?output=pbcore" id="pbcore"/>' . PHP_EOL;
        }
        if ($request->getControllerName() == 'items' && $request->getActionName() == 'browse') {
            echo '<link rel="alternate" type="application/rss+xml" href="' . record_url(get_current_record('item')) . '?output=pbcore" id="pbcore"/>' . PHP_EOL;
        }
    }


    public function filterResponseContexts($contexts)
    {
        $contexts['pbcore'] = array(
            'suffix'  => 'pbcore',
            'headers' => array('Content-Type' => 'text/xml'),
        );

        return $contexts;
    }

    public function filterActionContexts($contexts, $controller)
    {
        if ($controller['controller'] instanceof ItemsController) {
            $contexts['show'][] = 'pbcore';
            $contexts['browse'][] = 'pbcore';
        }

        return $contexts;
    }

    private function _getElementSet($elementSetName)
    {
        return $this->_db
            ->getTable('ElementSet')
            ->findByName($elementSetName);
    }

    private function _deleteElementSet($elementSetName)
    {
        $elementSet = $this->_getElementSet($elementSetName);

        if ($elementSet) {
            $elements = $elementSet->getElements();
            foreach ($elements as $element) {
                $element->delete();
            }
            $elementSet->delete();
        }
    }

//Experimental Admin Form

    protected function _getForm($record)
    {

    $formOptions = array('type' => 'item', 'hasPublicPage'=>true);
        if($record && $record->exists()) {
	        $formOptions['record'] = $record;
		    }

    $form = new Omeka_Form_Admin($formOptions);

// build the form elements

$form->addElementToSaveGroup('checkbox', 'is_published',
			array('id' => 'my_plugin_is_published',
				'values' => array(1, 0),
				'checked' => metadata($record, 'is_published'),
				'label' => 'Publish this page?',
				'description' => 'Checking this box will make the page public.'
				  ));

$form->addElement('textarea', 'description', array(
    'label' => __('Description'),
        'description' => __('My record description'),
	    'rows' => 10
	    ));


//

    return $form;
    }

//


}

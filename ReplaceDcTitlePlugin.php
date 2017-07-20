<?php
    class ReplaceDcTitlePlugin	 extends Omeka_Plugin_AbstractPlugin
    {
        protected $_filters = array(
               'itemTitleSwitch' => array('Display', 'Item', 'Dublin Core', 'Title'),
               'admin_items_form_tabs'
              );
		protected $_hooks = array('after_save_item');
		public function hookAfterSaveItem($args) {
			$item = $args['record'];
			$searchText = get_db()->getTable('SearchText')->findByRecord('Item', $item->id);
			$pbCoreTitle = metadata($item, array('GATE', 'GATE Title')); 
			$searchText->title = $pbCoreTitle;
			$searchText->save();
			}
        public function filterAdminItemsFormTabs($tabs)
        {
    unset($tabs['Dublin Core']);
       unset($tabs['Item Type Metadata']);
       return $tabs;
        }
        public function itemTitleSwitch($title, $args)
        {
              /**
* Replace the title of all items in public/admin view with a different field.
* For use with element sets other than PBCore, change the new field to whatever field you want, and activate the plugin.
*/
       $request = Zend_Controller_Front::getInstance()->getRequest();
           // Replace title field here.
           $item = $args['record'];
           $title = metadata($item, array('GATE', 'GATE Title'));
       return $title;
        }
    }

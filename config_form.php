<div class="field">
    <div id="PBCoreElementSetAddUrlAsIdentifier_label" class="one columns alpha">
        <?php echo get_view()->formLabel('PBCoreElementSetAddUrlAsIdentifier', __('Explanation'));?>
    </div>
    <div class="inputs">
<?php echo "DO NOT USE - This was the configuration form for the PBCore element set plugin upon which this ISAD(G) plugin is based." ?>

    </div>
</div>

<div class="field">
    <div id="PBCoreElementSetAddUrlAsIdentifier_label" class="one columns alpha">
        <?php echo get_view()->formLabel('PBCoreElementSetAddUrlAsIdentifier', __('Add url as identifier'));?>
    </div>
    <div class="inputs">
        <?php echo get_view()->formCheckbox('PBCoreElementSetAddUrlAsIdentifier', true, array('checked' => (boolean) get_option('pbcore_element_set_add_url_as_identifier')));?>
        <p class="explanation"><?php echo __(
            'This option adds automatically the url of the item ("http://myomeka.com/items/show/#") to the metadata "PBCore > Identifier".'
        );?></p>
    </div>
</div>




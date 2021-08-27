<?php
$module_name = 'ABS1_identifications';
$subpanel_layout = 
array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'ABS1_identifications',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => 10,
      'default' => true,
    ),
    'identification_type_c' => 
    array (
      'readonly' => false,
      'type' => 'enum',
      'default' => true,
      'vname' => 'LBL_IDENTIFICATION_TYPE_C',
      'width' => 10,
    ),
    'issuing_country_c' => 
    array (
      'readonly' => false,
      'type' => 'varchar',
      'default' => true,
      'vname' => 'LBL_ISSUING_COUNTRY_C',
      'width' => 10,
    ),
    'valid_from_c' => 
    array (
      'readonly' => false,
      'type' => 'date',
      'vname' => 'LBL_VALID_FROM_C',
      'width' => 10,
      'default' => true,
    ),
    'valid_to_c' => 
    array (
      'readonly' => false,
      'type' => 'date',
      'vname' => 'LBL_VALID_TO_C',
      'width' => 10,
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'ABS1_identifications',
      'width' => '4%',
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'ABS1_identifications',
      'width' => '5%',
    ),
  ),
);

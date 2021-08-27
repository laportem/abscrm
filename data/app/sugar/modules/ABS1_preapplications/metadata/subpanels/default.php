<?php
$module_name = 'ABS1_preapplications';
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
      'popup_module' => 'ABS1_preapplications',
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
    'date_submitted' => 
    array (
      'readonly' => false,
      'type' => 'date',
      'vname' => 'LBL_DATE_SUBMITTED',
      'width' => 10,
      'default' => true,
    ),
    'status' => 
    array (
      'readonly' => false,
      'type' => 'enum',
      'default' => true,
      'vname' => 'LBL_STATUS',
      'width' => 10,
    ),
    'authority' => 
    array (
      'readonly' => false,
      'type' => 'varchar',
      'default' => true,
      'vname' => 'LBL_AUTHORITY',
      'width' => 10,
    ),
    'authority_refnum' => 
    array (
      'readonly' => false,
      'type' => 'varchar',
      'default' => true,
      'vname' => 'LBL_AUTHORITY_REFNUM',
      'width' => 10,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'ABS1_preapplications',
      'width' => '4%',
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'ABS1_preapplications',
      'width' => '5%',
    ),
  ),
);

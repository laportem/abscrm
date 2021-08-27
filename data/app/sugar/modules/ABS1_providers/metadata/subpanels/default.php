<?php
$module_name = 'ABS1_providers';
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
      'popup_module' => 'ABS1_providers',
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
    'provider_type' => 
    array (
      'readonly' => false,
      'type' => 'enum',
      'default' => true,
      'vname' => 'LBL_PROVIDER_TYPE',
      'width' => 10,
    ),
    'contact' => 
    array (
      'readonly' => false,
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_CONTACT',
      'id' => 'CONTACT_ID_C',
      'link' => true,
      'width' => 10,
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Contacts',
      'target_record_key' => 'contact_id_c',
    ),
    'account' => 
    array (
      'readonly' => false,
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_ACCOUNT',
      'id' => 'ACCOUNT_ID_C',
      'link' => true,
      'width' => 10,
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Accounts',
      'target_record_key' => 'account_id_c',
    ),
    'mat_c' => 
    array (
      'readonly' => false,
      'type' => 'enum',
      'default' => true,
      'vname' => 'LBL_MAT_C',
      'width' => 10,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'ABS1_providers',
      'width' => '4%',
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'ABS1_providers',
      'width' => '5%',
    ),
  ),
);

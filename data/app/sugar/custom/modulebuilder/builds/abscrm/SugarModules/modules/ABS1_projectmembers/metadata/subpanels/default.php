<?php
$module_name = 'ABS1_projectmembers';
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
      'popup_module' => 'ABS1_projectmembers',
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
    'project_role' => 
    array (
      'readonly' => false,
      'type' => 'enum',
      'default' => true,
      'vname' => 'LBL_PROJECT_ROLE',
      'width' => 10,
    ),
    'contact' => 
    array (
      'readonly' => false,
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_CONTACT',
      'id' => 'BUG_ID_C',
      'link' => true,
      'width' => 10,
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Contacts',
      'target_record_key' => 'contact_id_c',
    ),
    'local_c' => 
    array (
      'readonly' => false,
      'type' => 'enum',
      'default' => true,
      'vname' => 'LBL_LOCAL_C',
      'width' => 10,
    ),
    'date_modified' => 
    array (
      'vname' => 'LBL_DATE_MODIFIED',
      'width' => 10,
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'ABS1_projectmembers',
      'width' => '4%',
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'ABS1_projectmembers',
      'width' => '5%',
    ),
  ),
);

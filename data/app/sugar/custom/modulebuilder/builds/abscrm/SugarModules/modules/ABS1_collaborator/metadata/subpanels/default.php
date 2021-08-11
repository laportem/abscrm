<?php
$module_name = 'ABS1_collaborator';
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
      'popup_module' => 'ABS1_collaborator',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'type' => 'name',
      'readonly' => false,
      'default' => true,
      'width' => 10,
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
    ),
    'collaborator_type' => 
    array (
      'readonly' => false,
      'type' => 'enum',
      'default' => true,
      'vname' => 'LBL_COLLABORATOR_TYPE',
      'width' => 10,
    ),
    'organisation' => 
    array (
      'readonly' => false,
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_ORGANISATION',
      'id' => 'ACCOUNT_ID_C',
      'link' => true,
      'width' => 10,
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'Accounts',
      'target_record_key' => 'account_id_c',
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
    'date_modified' => 
    array (
      'vname' => 'LBL_DATE_MODIFIED',
      'width' => 10,
      'default' => true,
    ),
    'date_entered' => 
    array (
      'type' => 'datetime',
      'studio' => 
      array (
        'portaleditview' => false,
      ),
      'readonly' => true,
      'vname' => 'LBL_DATE_ENTERED',
      'width' => 10,
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'ABS1_collaborator',
      'width' => '4%',
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'ABS1_collaborator',
      'width' => '5%',
    ),
  ),
);

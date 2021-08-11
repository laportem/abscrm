<?php
// created: 2021-08-10 01:04:40
$viewdefs['ABS1_collaborators']['base']['view']['subpanel-list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'label' => 'LBL_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'collaborator_type',
          'label' => 'LBL_COLLABORATOR_TYPE',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'organisation',
          'label' => 'LBL_ORGANISATION',
          'enabled' => true,
          'readonly' => false,
          'id' => 'ACCOUNT_ID_C',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'contact',
          'label' => 'LBL_CONTACT',
          'enabled' => true,
          'readonly' => false,
          'id' => 'CONTACT_ID_C',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        4 => 
        array (
          'label' => 'LBL_DATE_MODIFIED',
          'enabled' => true,
          'default' => true,
          'name' => 'date_modified',
        ),
      ),
    ),
  ),
  'orderBy' => 
  array (
    'field' => 'date_modified',
    'direction' => 'desc',
  ),
);
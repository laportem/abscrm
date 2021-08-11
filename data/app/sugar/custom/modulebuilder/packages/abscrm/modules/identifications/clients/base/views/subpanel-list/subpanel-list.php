<?php
// created: 2021-08-11 12:14:22
$viewdefs['ABS1_identifications']['base']['view']['subpanel-list'] = array (
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
          'name' => 'identification_type_c',
          'label' => 'LBL_IDENTIFICATION_TYPE_C',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
        1 => 
        array (
          'label' => 'LBL_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        2 => 
        array (
          'name' => 'issuing_country_c',
          'label' => 'LBL_ISSUING_COUNTRY_C',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'valid_from_c',
          'label' => 'LBL_VALID_FROM_C',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'valid_to_c',
          'label' => 'LBL_VALID_TO_C',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
        5 => 
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
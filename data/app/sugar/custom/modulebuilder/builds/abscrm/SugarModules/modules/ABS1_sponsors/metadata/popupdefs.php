<?php
$popupMeta = array (
    'moduleMain' => 'ABS1_sponsors',
    'varName' => 'ABS1_sponsors',
    'orderBy' => 'abs1_sponsors.name',
    'whereClauses' => array (
  'name' => 'abs1_sponsors.name',
  'sponsors_type' => 'abs1_sponsors.sponsors_type',
  'contact' => 'abs1_sponsors.contact',
  'account' => 'abs1_sponsors.account',
  'local_c' => 'abs1_sponsors.local_c',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'sponsors_type',
  5 => 'contact',
  6 => 'account',
  7 => 'local_c',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'readonly' => false,
    'label' => 'LBL_NAME',
    'width' => '10',
    'name' => 'name',
  ),
  'sponsors_type' => 
  array (
    'readonly' => false,
    'type' => 'enum',
    'label' => 'LBL_SPONSORS_TYPE',
    'width' => '10',
    'name' => 'sponsors_type',
  ),
  'contact' => 
  array (
    'readonly' => false,
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CONTACT',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10',
    'name' => 'contact',
  ),
  'account' => 
  array (
    'readonly' => false,
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ACCOUNT',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => '10',
    'name' => 'account',
  ),
  'local_c' => 
  array (
    'readonly' => false,
    'type' => 'enum',
    'label' => 'LBL_LOCAL_C',
    'width' => '10',
    'name' => 'local_c',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'readonly' => false,
    'default' => true,
    'label' => 'LBL_NAME',
    'width' => '10',
    'name' => 'name',
  ),
  'SPONSORS_TYPE' => 
  array (
    'readonly' => false,
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_SPONSORS_TYPE',
    'width' => '10',
    'name' => 'sponsors_type',
  ),
  'CONTACT' => 
  array (
    'readonly' => false,
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CONTACT',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => 10,
    'default' => true,
    'name' => 'contact',
  ),
  'ACCOUNT' => 
  array (
    'readonly' => false,
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_ACCOUNT',
    'id' => 'ACCOUNT_ID_C',
    'link' => true,
    'width' => 10,
    'default' => true,
    'name' => 'account',
  ),
  'LOCAL_C' => 
  array (
    'readonly' => false,
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_LOCAL_C',
    'width' => 10,
    'name' => 'local_c',
  ),
),
);

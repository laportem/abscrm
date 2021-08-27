<?php
$popupMeta = array (
    'moduleMain' => 'ABS1_providers',
    'varName' => 'ABS1_providers',
    'orderBy' => 'abs1_providers.name',
    'whereClauses' => array (
  'name' => 'abs1_providers.name',
  'provider_type' => 'abs1_providers.provider_type',
  'contact' => 'abs1_providers.contact',
  'account' => 'abs1_providers.account',
  'mat_c' => 'abs1_providers.mat_c',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'provider_type',
  5 => 'contact',
  6 => 'account',
  7 => 'mat_c',
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
  'provider_type' => 
  array (
    'readonly' => false,
    'type' => 'enum',
    'label' => 'LBL_PROVIDER_TYPE',
    'width' => '10',
    'name' => 'provider_type',
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
  'mat_c' => 
  array (
    'readonly' => false,
    'type' => 'enum',
    'label' => 'LBL_MAT_C',
    'width' => '10',
    'name' => 'mat_c',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'readonly' => false,
    'default' => true,
    'label' => 'LBL_NAME',
    'width' => 10,
    'name' => 'name',
  ),
  'PROVIDER_TYPE' => 
  array (
    'readonly' => false,
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_PROVIDER_TYPE',
    'width' => 10,
    'name' => 'provider_type',
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
  'MAT_C' => 
  array (
    'readonly' => false,
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_MAT_C',
    'width' => 10,
    'name' => 'mat_c',
  ),
),
);

<?php
$popupMeta = array (
    'moduleMain' => 'ABS1_identifications',
    'varName' => 'ABS1_identifications',
    'orderBy' => 'abs1_identifications.name',
    'whereClauses' => array (
  'name' => 'abs1_identifications.name',
  'identification_type_c' => 'abs1_identifications.identification_type_c',
  'issuing_country_c' => 'abs1_identifications.issuing_country_c',
  'valid_from_c' => 'abs1_identifications.valid_from_c',
  'valid_to_c' => 'abs1_identifications.valid_to_c',
  'date_modified' => 'abs1_identifications.date_modified',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'identification_type_c',
  5 => 'issuing_country_c',
  6 => 'valid_from_c',
  7 => 'valid_to_c',
  8 => 'date_modified',
),
    'searchdefs' => array (
  'identification_type_c' => 
  array (
    'readonly' => false,
    'type' => 'enum',
    'label' => 'LBL_IDENTIFICATION_TYPE_C',
    'width' => '10',
    'name' => 'identification_type_c',
  ),
  'name' => 
  array (
    'type' => 'name',
    'readonly' => false,
    'label' => 'LBL_NAME',
    'width' => '10',
    'name' => 'name',
  ),
  'issuing_country_c' => 
  array (
    'readonly' => false,
    'type' => 'varchar',
    'label' => 'LBL_ISSUING_COUNTRY_C',
    'width' => '10',
    'name' => 'issuing_country_c',
  ),
  'valid_from_c' => 
  array (
    'readonly' => false,
    'type' => 'date',
    'label' => 'LBL_VALID_FROM_C',
    'width' => '10',
    'name' => 'valid_from_c',
  ),
  'valid_to_c' => 
  array (
    'readonly' => false,
    'type' => 'date',
    'label' => 'LBL_VALID_TO_C',
    'width' => '10',
    'name' => 'valid_to_c',
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10',
    'name' => 'date_modified',
  ),
),
    'listviewdefs' => array (
  'IDENTIFICATION_TYPE_C' => 
  array (
    'readonly' => false,
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_IDENTIFICATION_TYPE_C',
    'width' => '10',
    'name' => 'identification_type_c',
  ),
  'NAME' => 
  array (
    'type' => 'name',
    'readonly' => false,
    'default' => true,
    'label' => 'LBL_NAME',
    'width' => '10',
    'name' => 'name',
  ),
  'ISSUING_COUNTRY_C' => 
  array (
    'readonly' => false,
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ISSUING_COUNTRY_C',
    'width' => '10',
    'name' => 'issuing_country_c',
  ),
  'VALID_FROM_C' => 
  array (
    'readonly' => false,
    'type' => 'date',
    'label' => 'LBL_VALID_FROM_C',
    'width' => '10',
    'default' => true,
    'name' => 'valid_from_c',
  ),
  'VALID_TO_C' => 
  array (
    'readonly' => false,
    'type' => 'date',
    'label' => 'LBL_VALID_TO_C',
    'width' => '10',
    'default' => true,
    'name' => 'valid_to_c',
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10',
    'default' => true,
    'name' => 'date_modified',
  ),
),
);

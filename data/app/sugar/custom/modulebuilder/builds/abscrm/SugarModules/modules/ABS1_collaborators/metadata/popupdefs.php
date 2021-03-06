<?php
$popupMeta = array (
    'moduleMain' => 'ABS1_collaborators',
    'varName' => 'ABS1_collaborators',
    'orderBy' => 'abs1_collaborators.name',
    'whereClauses' => array (
  'collaborator_type' => 'abs1_collaborators.collaborator_type',
  'local_c' => 'abs1_collaborators.local_c',
  'abs1_collaborators_contacts_name' => 'abs1_collaborators.abs1_collaborators_contacts_name',
  'name' => 'abs1_collaborators.name',
  'account' => 'abs1_collaborators.account',
),
    'searchInputs' => array (
  4 => 'collaborator_type',
  5 => 'local_c',
  6 => 'abs1_collaborators_contacts_name',
  7 => 'name',
  8 => 'account',
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
  'collaborator_type' => 
  array (
    'readonly' => false,
    'type' => 'enum',
    'label' => 'LBL_COLLABORATOR_TYPE',
    'width' => '10',
    'name' => 'collaborator_type',
  ),
  'abs1_collaborators_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ABS1_COLLABORATORS_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'ABS1_COLLABORATORS_CONTACTSCONTACTS_IDA',
    'width' => '10',
    'name' => 'abs1_collaborators_contacts_name',
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
  'COLLABORATOR_TYPE' => 
  array (
    'readonly' => false,
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_COLLABORATOR_TYPE',
    'width' => '10',
    'name' => 'collaborator_type',
  ),
  'CONTACT' => 
  array (
    'readonly' => false,
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_CONTACT',
    'id' => 'CONTACT_ID_C',
    'link' => true,
    'width' => '10',
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
    'width' => '10',
    'default' => true,
    'name' => 'account',
  ),
  'LOCAL_C' => 
  array (
    'readonly' => false,
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_LOCAL_C',
    'width' => '10',
    'name' => 'local_c',
  ),
),
);

<?php
// created: 2021-08-27 00:08:17
$dictionary["ABS1_identifications"]["fields"]["abs1_identifications_contacts"] = array (
  'name' => 'abs1_identifications_contacts',
  'type' => 'link',
  'relationship' => 'abs1_identifications_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'side' => 'right',
  'required' => true,
  'vname' => 'LBL_ABS1_IDENTIFICATIONS_CONTACTS_FROM_ABS1_IDENTIFICATIONS_TITLE',
  'id_name' => 'abs1_identifications_contactscontacts_ida',
  'link-type' => 'one',
);
$dictionary["ABS1_identifications"]["fields"]["abs1_identifications_contacts_name"] = array (
  'name' => 'abs1_identifications_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABS1_IDENTIFICATIONS_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'required' => true,
  'id_name' => 'abs1_identifications_contactscontacts_ida',
  'link' => 'abs1_identifications_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["ABS1_identifications"]["fields"]["abs1_identifications_contactscontacts_ida"] = array (
  'name' => 'abs1_identifications_contactscontacts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABS1_IDENTIFICATIONS_CONTACTS_FROM_ABS1_IDENTIFICATIONS_TITLE_ID',
  'id_name' => 'abs1_identifications_contactscontacts_ida',
  'link' => 'abs1_identifications_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

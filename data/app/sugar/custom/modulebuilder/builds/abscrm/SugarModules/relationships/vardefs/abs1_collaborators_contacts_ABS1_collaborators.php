<?php
// created: 2021-08-24 01:36:17
$dictionary["ABS1_collaborators"]["fields"]["abs1_collaborators_contacts"] = array (
  'name' => 'abs1_collaborators_contacts',
  'type' => 'link',
  'relationship' => 'abs1_collaborators_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'side' => 'right',
  'vname' => 'LBL_ABS1_COLLABORATORS_CONTACTS_FROM_ABS1_COLLABORATORS_TITLE',
  'id_name' => 'abs1_collaborators_contactscontacts_ida',
  'link-type' => 'one',
);
$dictionary["ABS1_collaborators"]["fields"]["abs1_collaborators_contacts_name"] = array (
  'name' => 'abs1_collaborators_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABS1_COLLABORATORS_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'abs1_collaborators_contactscontacts_ida',
  'link' => 'abs1_collaborators_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["ABS1_collaborators"]["fields"]["abs1_collaborators_contactscontacts_ida"] = array (
  'name' => 'abs1_collaborators_contactscontacts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABS1_COLLABORATORS_CONTACTS_FROM_ABS1_COLLABORATORS_TITLE_ID',
  'id_name' => 'abs1_collaborators_contactscontacts_ida',
  'link' => 'abs1_collaborators_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

<?php
// created: 2021-08-24 09:11:14
$dictionary["ABS1_identifications"]["fields"]["abs1_identifications_accounts"] = array (
  'name' => 'abs1_identifications_accounts',
  'type' => 'link',
  'relationship' => 'abs1_identifications_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ABS1_IDENTIFICATIONS_ACCOUNTS_FROM_ABS1_IDENTIFICATIONS_TITLE',
  'id_name' => 'abs1_identifications_accountsaccounts_ida',
  'link-type' => 'one',
);
$dictionary["ABS1_identifications"]["fields"]["abs1_identifications_accounts_name"] = array (
  'name' => 'abs1_identifications_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABS1_IDENTIFICATIONS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'abs1_identifications_accountsaccounts_ida',
  'link' => 'abs1_identifications_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ABS1_identifications"]["fields"]["abs1_identifications_accountsaccounts_ida"] = array (
  'name' => 'abs1_identifications_accountsaccounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABS1_IDENTIFICATIONS_ACCOUNTS_FROM_ABS1_IDENTIFICATIONS_TITLE_ID',
  'id_name' => 'abs1_identifications_accountsaccounts_ida',
  'link' => 'abs1_identifications_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

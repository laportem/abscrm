<?php
// created: 2021-08-24 01:36:17
$dictionary["ABS1_collaborators"]["fields"]["abs1_collaborators_accounts"] = array (
  'name' => 'abs1_collaborators_accounts',
  'type' => 'link',
  'relationship' => 'abs1_collaborators_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_ABS1_COLLABORATORS_ACCOUNTS_FROM_ABS1_COLLABORATORS_TITLE',
  'id_name' => 'abs1_collaborators_accountsaccounts_ida',
  'link-type' => 'one',
);
$dictionary["ABS1_collaborators"]["fields"]["abs1_collaborators_accounts_name"] = array (
  'name' => 'abs1_collaborators_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABS1_COLLABORATORS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'abs1_collaborators_accountsaccounts_ida',
  'link' => 'abs1_collaborators_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["ABS1_collaborators"]["fields"]["abs1_collaborators_accountsaccounts_ida"] = array (
  'name' => 'abs1_collaborators_accountsaccounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABS1_COLLABORATORS_ACCOUNTS_FROM_ABS1_COLLABORATORS_TITLE_ID',
  'id_name' => 'abs1_collaborators_accountsaccounts_ida',
  'link' => 'abs1_collaborators_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

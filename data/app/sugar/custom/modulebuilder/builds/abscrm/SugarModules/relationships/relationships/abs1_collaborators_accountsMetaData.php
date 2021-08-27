<?php
// created: 2021-08-24 01:36:17
$dictionary["abs1_collaborators_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'abs1_collaborators_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'ABS1_collaborators',
      'rhs_table' => 'abs1_collaborators',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'abs1_collaborators_accounts_c',
      'join_key_lhs' => 'abs1_collaborators_accountsaccounts_ida',
      'join_key_rhs' => 'abs1_collaborators_accountsabs1_collaborators_idb',
    ),
  ),
  'table' => 'abs1_collaborators_accounts_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'abs1_collaborators_accountsaccounts_ida' => 
    array (
      'name' => 'abs1_collaborators_accountsaccounts_ida',
      'type' => 'id',
    ),
    'abs1_collaborators_accountsabs1_collaborators_idb' => 
    array (
      'name' => 'abs1_collaborators_accountsabs1_collaborators_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_abs1_collaborators_accounts_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_abs1_collaborators_accounts_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'abs1_collaborators_accountsaccounts_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_abs1_collaborators_accounts_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'abs1_collaborators_accountsabs1_collaborators_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'abs1_collaborators_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'abs1_collaborators_accountsabs1_collaborators_idb',
      ),
    ),
  ),
);
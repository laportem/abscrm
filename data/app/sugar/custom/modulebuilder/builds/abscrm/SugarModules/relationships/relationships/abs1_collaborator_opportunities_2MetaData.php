<?php
// created: 2021-08-09 23:41:57
$dictionary["abs1_collaborator_opportunities_2"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'abs1_collaborator_opportunities_2' => 
    array (
      'lhs_module' => 'ABS1_collaborator',
      'lhs_table' => 'abs1_collaborator',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'abs1_collaborator_opportunities_2_c',
      'join_key_lhs' => 'abs1_collaborator_opportunities_2abs1_collaborator_ida',
      'join_key_rhs' => 'abs1_collaborator_opportunities_2opportunities_idb',
    ),
  ),
  'table' => 'abs1_collaborator_opportunities_2_c',
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
    'abs1_collaborator_opportunities_2abs1_collaborator_ida' => 
    array (
      'name' => 'abs1_collaborator_opportunities_2abs1_collaborator_ida',
      'type' => 'id',
    ),
    'abs1_collaborator_opportunities_2opportunities_idb' => 
    array (
      'name' => 'abs1_collaborator_opportunities_2opportunities_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_abs1_collaborator_opportunities_2_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_abs1_collaborator_opportunities_2_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'abs1_collaborator_opportunities_2abs1_collaborator_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_abs1_collaborator_opportunities_2_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'abs1_collaborator_opportunities_2opportunities_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'abs1_collaborator_opportunities_2_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'abs1_collaborator_opportunities_2abs1_collaborator_ida',
        1 => 'abs1_collaborator_opportunities_2opportunities_idb',
      ),
    ),
  ),
);
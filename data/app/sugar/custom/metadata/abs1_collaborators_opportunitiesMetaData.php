<?php
// created: 2021-08-27 00:08:17
$dictionary["abs1_collaborators_opportunities"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'abs1_collaborators_opportunities' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'ABS1_collaborators',
      'rhs_table' => 'abs1_collaborators',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'abs1_collaborators_opportunities_c',
      'join_key_lhs' => 'abs1_collaborators_opportunitiesopportunities_ida',
      'join_key_rhs' => 'abs1_collaborators_opportunitiesabs1_collaborators_idb',
    ),
  ),
  'table' => 'abs1_collaborators_opportunities_c',
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
    'abs1_collaborators_opportunitiesopportunities_ida' => 
    array (
      'name' => 'abs1_collaborators_opportunitiesopportunities_ida',
      'type' => 'id',
    ),
    'abs1_collaborators_opportunitiesabs1_collaborators_idb' => 
    array (
      'name' => 'abs1_collaborators_opportunitiesabs1_collaborators_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_abs1_collaborators_opportunities_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_abs1_collaborators_opportunities_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'abs1_collaborators_opportunitiesopportunities_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_abs1_collaborators_opportunities_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'abs1_collaborators_opportunitiesabs1_collaborators_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'abs1_collaborators_opportunities_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'abs1_collaborators_opportunitiesabs1_collaborators_idb',
      ),
    ),
  ),
);
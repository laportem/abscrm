<?php
$module_name = 'ABS1_collaborators';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              1 => 
              array (
                'name' => 'abs1_collaborators_opportunities_name',
                'label' => 'LBL_APPLICATION',
                'enabled' => true,
                'id' => 'ABS1_COLLABORATORS_OPPORTUNITIESOPPORTUNITIES_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'collaborator_type',
                'label' => 'LBL_COLLABORATOR_TYPE',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'contact',
                'label' => 'LBL_CONTACT',
                'enabled' => true,
                'readonly' => false,
                'id' => 'CONTACT_ID_C',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'account',
                'label' => 'LBL_ACCOUNT',
                'enabled' => true,
                'readonly' => false,
                'id' => 'ACCOUNT_ID_C',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'local_c',
                'label' => 'LBL_LOCAL_C',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              6 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => false,
              ),
              7 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'readonly' => true,
                'default' => false,
              ),
              8 => 
              array (
                'name' => 'tag',
                'label' => 'LBL_TAGS',
                'enabled' => true,
                'default' => false,
              ),
              9 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => false,
                'enabled' => true,
                'link' => true,
              ),
              10 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'default' => false,
                'enabled' => true,
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);

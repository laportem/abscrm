<?php
$module_name = 'ABS1_resources';
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
                'width' => 'medium',
              ),
              1 => 
              array (
                'name' => 'abs1_resources_opportunities_name',
                'label' => 'LBL_APPLICATION',
                'enabled' => true,
                'id' => 'ABS1_RESOURCES_OPPORTUNITIESOPPORTUNITIES_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
                'width' => 'medium',
              ),
              2 => 
              array (
                'name' => 'resource_type',
                'label' => 'LBL_RESOURCE_TYPE',
                'enabled' => true,
                'readonly' => false,
                'sortable' => false,
                'default' => true,
                'width' => 'xxlarge',
              ),
              3 => 
              array (
                'name' => 'family',
                'label' => 'LBL_FAMILY',
                'enabled' => true,
                'readonly' => false,
                'sortable' => false,
                'default' => false,
              ),
              4 => 
              array (
                'name' => 'resource_parts',
                'label' => 'LBL_RESOURCE_PARTS',
                'enabled' => true,
                'readonly' => false,
                'sortable' => false,
                'default' => false,
              ),
              5 => 
              array (
                'name' => 'specimens',
                'label' => 'LBL_SPECIMENS',
                'enabled' => true,
                'readonly' => false,
                'sortable' => false,
                'default' => false,
              ),
              6 => 
              array (
                'name' => 'collection_area',
                'label' => 'LBL_COLLECTION_AREA',
                'enabled' => true,
                'readonly' => false,
                'sortable' => false,
                'default' => false,
              ),
              7 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => false,
              ),
              8 => 
              array (
                'name' => 'date_entered',
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

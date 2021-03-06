<?php
$module_name = 'ABS1_identifications';
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
                'name' => 'identification_type_c',
                'label' => 'LBL_IDENTIFICATION_TYPE_C',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'abs1_identifications_contacts_name',
                'label' => 'LBL_CONTACT',
                'enabled' => true,
                'id' => 'ABS1_IDENTIFICATIONS_CONTACTSCONTACTS_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'issuing_country_c',
                'label' => 'LBL_ISSUING_COUNTRY_C',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'valid_to_c',
                'label' => 'LBL_VALID_TO_C',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'valid_from_c',
                'label' => 'LBL_VALID_FROM_C',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              6 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => false,
                'enabled' => true,
                'link' => true,
              ),
              7 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'default' => false,
                'enabled' => true,
              ),
              8 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => false,
              ),
              9 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => false,
              ),
              10 => 
              array (
                'name' => 'tag',
                'label' => 'LBL_TAGS',
                'enabled' => true,
                'default' => false,
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

<?php
$viewdefs['Opportunities'] = 
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
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'label' => 'LBL_LIST_OPPORTUNITY_NAME',
                'enabled' => true,
                'default' => true,
                'related_fields' => 
                array (
                  0 => 'total_revenue_line_items',
                  1 => 'closed_revenue_line_items',
                  2 => 'included_revenue_line_items',
                ),
                'link' => true,
              ),
              1 => 
              array (
                'name' => 'purpose_c',
                'label' => 'LBL_PURPOSE',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'applicant_type_c',
                'label' => 'LBL_APPLICANT_TYPE_C',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'sales_stage',
                'label' => 'LBL_LIST_SALES_STAGE',
                'enabled' => true,
                'default' => true,
                'type' => 'enum-cascade',
                'disable_field' => 
                array (
                  0 => 'total_revenue_line_items',
                  1 => 'closed_revenue_line_items',
                ),
              ),
              4 => 
              array (
                'name' => 'natural_person_c',
                'label' => 'LBL_NATURAL_PERSON_C',
                'enabled' => true,
                'readonly' => false,
                'id' => 'CONTACT_ID_C',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'account_name',
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'enabled' => true,
                'default' => true,
                'related_fields' => 
                array (
                  0 => 'account_id',
                ),
                'id' => 'ACCOUNT_ID',
                'link' => true,
                'sortable' => true,
              ),
              6 => 
              array (
                'name' => 'priority_c',
                'label' => 'LBL_PRIORITY_C',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              7 => 
              array (
                'name' => 'started_date_c',
                'label' => 'LBL_STARTED_DATE_C',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              8 => 
              array (
                'name' => 'submitted_date_c',
                'label' => 'LBL_SUBMITTED_DATE',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              9 => 
              array (
                'name' => 'expected_completion_date_c',
                'label' => 'LBL_EXPECTED_COMPLETION_DATE',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              10 => 
              array (
                'name' => 'actual_completion_date_c',
                'label' => 'LBL_ACTUAL_COMPLETION_DATE',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              11 => 
              array (
                'name' => 'date_modified',
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'readonly' => true,
                'default' => false,
              ),
              12 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'default' => false,
                'readonly' => true,
              ),
              13 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'enabled' => true,
                'default' => false,
                'related_fields' => 
                array (
                  0 => 'assigned_user_id',
                ),
                'id' => 'ASSIGNED_USER_ID',
                'link' => true,
                'sortable' => true,
              ),
              14 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_LIST_TEAM',
                'enabled' => true,
                'default' => false,
                'type' => 'teamset',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);

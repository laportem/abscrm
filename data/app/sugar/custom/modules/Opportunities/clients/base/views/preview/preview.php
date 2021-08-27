<?php
$viewdefs['Opportunities'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'preview' => 
      array (
        'templateMeta' => 
        array (
          'maxColumns' => 1,
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'size' => 'large',
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 
              array (
                'name' => 'name',
                'related_fields' => 
                array (
                  0 => 'total_revenue_line_items',
                  1 => 'closed_revenue_line_items',
                  2 => 'included_revenue_line_items',
                ),
              ),
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'dismiss_label' => true,
              ),
              3 => 
              array (
                'name' => 'follow',
                'label' => 'LBL_FOLLOW',
                'type' => 'follow',
                'readonly' => true,
                'dismiss_label' => true,
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labels' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'account_name',
                'related_fields' => 
                array (
                  0 => 'account_id',
                ),
              ),
              1 => 
              array (
                'name' => 'natural_person_c',
                'label' => 'LBL_NATURAL_PERSON_C',
              ),
              2 => 
              array (
                'readonly' => false,
                'name' => 'applicant_type_c',
                'label' => 'LBL_APPLICANT_TYPE_C',
              ),
              3 => 
              array (
                'readonly' => false,
                'name' => 'purpose_c',
                'label' => 'LBL_PURPOSE',
              ),
              4 => 
              array (
                'name' => 'sales_stage',
                'type' => 'enum-cascade',
                'label' => 'LBL_SALES_STAGE',
                'disable_field' => 
                array (
                  0 => 'total_revenue_line_items',
                  1 => 'closed_revenue_line_items',
                ),
              ),
              5 => 
              array (
                'readonly' => false,
                'name' => 'priority_c',
                'label' => 'LBL_PRIORITY_C',
              ),
              6 => 
              array (
                'readonly' => false,
                'name' => 'started_date_c',
                'label' => 'LBL_STARTED_DATE_C',
              ),
              7 => 
              array (
                'readonly' => false,
                'name' => 'submitted_date_c',
                'label' => 'LBL_SUBMITTED_DATE',
              ),
              8 => 
              array (
                'readonly' => false,
                'name' => 'expected_completion_date_c',
                'label' => 'LBL_EXPECTED_COMPLETION_DATE',
              ),
              9 => 
              array (
                'readonly' => false,
                'name' => 'actual_completion_date_c',
                'label' => 'LBL_ACTUAL_COMPLETION_DATE',
              ),
              10 => 
              array (
                'readonly' => false,
                'name' => 'form_declaration_c',
                'label' => 'LBL_FORM_DECLARATION_C',
                'span' => 12,
              ),
              11 => 
              array (
                'name' => 'tag',
              ),
            ),
          ),
          2 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_RECORD_SHOWMORE',
            'hide' => true,
            'placeholders' => true,
            'columns' => 2,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              1 => 'assigned_user_name',
              2 => 'team_name',
              3 => 
              array (
                'name' => 'date_entered_by',
                'readonly' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_ENTERED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_entered',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'created_by_name',
                  ),
                ),
              ),
              4 => 
              array (
                'name' => 'date_modified_by',
                'readonly' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_MODIFIED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_modified',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'modified_by_name',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);

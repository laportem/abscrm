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
                'name' => 'date_closed',
                'type' => 'date-cascade',
                'label' => 'LBL_LIST_DATE_CLOSED',
                'disable_field' => 
                array (
                  0 => 'total_revenue_line_items',
                  1 => 'closed_revenue_line_items',
                ),
              ),
              2 => 
              array (
                'name' => 'amount',
                'type' => 'currency',
                'label' => 'LBL_LIKELY',
                'related_fields' => 
                array (
                  0 => 'amount',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'span' => 6,
              ),
              3 => 
              array (
                'name' => 'best_case',
                'type' => 'currency',
                'label' => 'LBL_BEST',
                'related_fields' => 
                array (
                  0 => 'best_case',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
              ),
              4 => 
              array (
                'name' => 'worst_case',
                'type' => 'currency',
                'label' => 'LBL_WORST',
                'related_fields' => 
                array (
                  0 => 'worst_case',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
              ),
              5 => 
              array (
                'name' => 'tag',
              ),
              6 => 
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
              7 => 'probability',
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
              0 => 'next_step',
              1 => 'opportunity_type',
              2 => 'lead_source',
              3 => 'campaign_name',
              4 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              5 => 'assigned_user_name',
              6 => 'team_name',
              7 => 
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
              8 => 
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

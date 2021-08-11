<?php
$viewdefs['Opportunities'] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'edit' => 
      array (
        'templateMeta' => 
        array (
          'maxColumns' => '1',
          'widths' => 
          array (
            0 => 
            array (
              'label' => '10',
              'field' => '30',
            ),
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'name' => 'LBL_PANEL_DEFAULT',
            'columns' => '1',
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'displayParams' => 
                array (
                  'required' => true,
                  'wireless_edit_only' => true,
                ),
              ),
              1 => 'amount',
              2 => 'account_name',
              3 => 
              array (
                'name' => 'date_closed',
                'readonly' => false,
              ),
              4 => 
              array (
                'name' => 'sales_stage',
                'readonly' => false,
              ),
              5 => 'tag',
              6 => 'assigned_user_name',
              7 => 'team_name',
              8 => 'probability',
            ),
          ),
        ),
      ),
    ),
  ),
);

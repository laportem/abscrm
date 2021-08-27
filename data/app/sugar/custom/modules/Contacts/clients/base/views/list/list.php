<?php
$viewdefs['Contacts'] = 
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
                'type' => 'fullname',
                'fields' => 
                array (
                  0 => 'salutation',
                  1 => 'first_name',
                  2 => 'last_name',
                ),
                'link' => true,
                'label' => 'LBL_LIST_NAME',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'phone_mobile',
                'enabled' => true,
                'default' => true,
                'selected' => false,
              ),
              2 => 
              array (
                'name' => 'phone_work',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'email',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'primary_address_city',
                'label' => 'LBL_PRIMARY_ADDRESS_CITY',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'account_name',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'phone_home',
                'label' => 'LBL_HOME_PHONE',
                'enabled' => true,
                'default' => false,
              ),
              7 => 
              array (
                'name' => 'phone_other',
                'enabled' => true,
                'default' => false,
                'selected' => false,
              ),
              8 => 
              array (
                'name' => 'phone_fax',
                'label' => 'LBL_FAX_PHONE',
                'enabled' => true,
                'default' => false,
              ),
              9 => 
              array (
                'name' => 'department',
                'label' => 'LBL_DEPARTMENT',
                'enabled' => true,
                'default' => false,
              ),
              10 => 
              array (
                'name' => 'do_not_call',
                'label' => 'LBL_DO_NOT_CALL',
                'enabled' => true,
                'default' => false,
              ),
              11 => 
              array (
                'name' => 'primary_address_country',
                'label' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
                'enabled' => true,
                'default' => false,
              ),
              12 => 
              array (
                'name' => 'assistant',
                'label' => 'LBL_ASSISTANT',
                'enabled' => true,
                'default' => false,
              ),
              13 => 
              array (
                'name' => 'assistant_phone',
                'enabled' => true,
                'default' => false,
                'selected' => false,
              ),
              14 => 
              array (
                'name' => 'facebook',
                'label' => 'LBL_FACEBOOK',
                'enabled' => true,
                'default' => false,
              ),
              15 => 
              array (
                'name' => 'twitter',
                'label' => 'LBL_TWITTER',
                'enabled' => true,
                'default' => false,
              ),
              16 => 
              array (
                'name' => 'linkedin_c',
                'label' => 'LBL_LINKEDIN',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              17 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id' => 'ASSIGNED_USER_ID',
                'enabled' => true,
                'default' => false,
              ),
              18 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => false,
              ),
              19 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => false,
                'readonly' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);

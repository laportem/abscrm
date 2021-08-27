<?php
$viewdefs['Accounts'] = 
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
                'link' => true,
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'industry',
                'label' => 'LBL_INDUSTRY',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'phone_office',
                'label' => 'LBL_LIST_PHONE',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'email',
                'label' => 'LBL_EMAIL_ADDRESS',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'billing_address_city',
                'label' => 'LBL_LIST_CITY',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'registration_number_c',
                'label' => 'LBL_REGISTRATION_NUMBER',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'phone_alternate',
                'label' => 'LBL_PHONE_ALT',
                'enabled' => true,
                'default' => false,
              ),
              7 => 
              array (
                'name' => 'phone_fax',
                'label' => 'LBL_FAX',
                'enabled' => true,
                'default' => false,
              ),
              8 => 
              array (
                'name' => 'phone_home_c',
                'label' => 'LBL_PHONE_HOME',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              9 => 
              array (
                'name' => 'facebook',
                'label' => 'LBL_FACEBOOK',
                'enabled' => true,
                'default' => false,
              ),
              10 => 
              array (
                'name' => 'twitter',
                'label' => 'LBL_TWITTER',
                'enabled' => true,
                'default' => false,
              ),
              11 => 
              array (
                'name' => 'billing_address_country',
                'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
                'enabled' => true,
                'default' => false,
              ),
              12 => 
              array (
                'name' => 'registration_country_c',
                'label' => 'LBL_REGISTRATION_COUNTRY',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              13 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id' => 'ASSIGNED_USER_ID',
                'enabled' => true,
                'default' => false,
              ),
              14 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => false,
              ),
              15 => 
              array (
                'name' => 'date_entered',
                'type' => 'datetime',
                'label' => 'LBL_DATE_ENTERED',
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

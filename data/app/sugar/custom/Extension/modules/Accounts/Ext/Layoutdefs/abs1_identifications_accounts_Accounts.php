<?php
 // created: 2021-08-11 12:16:42
$layout_defs["Accounts"]["subpanel_setup"]['abs1_identifications_accounts'] = array (
  'order' => 100,
  'module' => 'ABS1_identifications',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ABS1_IDENTIFICATIONS_ACCOUNTS_FROM_ABS1_IDENTIFICATIONS_TITLE',
  'get_subpanel_data' => 'abs1_identifications_accounts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

<?php
 // created: 2021-08-24 01:36:17
$layout_defs["Accounts"]["subpanel_setup"]['abs1_collaborators_accounts'] = array (
  'order' => 100,
  'module' => 'ABS1_collaborators',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ABS1_COLLABORATORS_ACCOUNTS_FROM_ABS1_COLLABORATORS_TITLE',
  'get_subpanel_data' => 'abs1_collaborators_accounts',
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

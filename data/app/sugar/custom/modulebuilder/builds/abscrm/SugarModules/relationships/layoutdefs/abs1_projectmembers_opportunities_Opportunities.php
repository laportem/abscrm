<?php
 // created: 2021-08-27 00:08:16
$layout_defs["Opportunities"]["subpanel_setup"]['abs1_projectmembers_opportunities'] = array (
  'order' => 100,
  'module' => 'ABS1_projectmembers',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ABS1_PROJECTMEMBERS_OPPORTUNITIES_FROM_ABS1_PROJECTMEMBERS_TITLE',
  'get_subpanel_data' => 'abs1_projectmembers_opportunities',
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

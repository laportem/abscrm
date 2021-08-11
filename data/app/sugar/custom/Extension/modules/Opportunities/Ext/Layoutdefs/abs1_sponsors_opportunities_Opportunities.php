<?php
 // created: 2021-08-11 12:16:42
$layout_defs["Opportunities"]["subpanel_setup"]['abs1_sponsors_opportunities'] = array (
  'order' => 100,
  'module' => 'ABS1_sponsors',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ABS1_SPONSORS_OPPORTUNITIES_FROM_ABS1_SPONSORS_TITLE',
  'get_subpanel_data' => 'abs1_sponsors_opportunities',
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

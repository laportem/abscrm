<?php
 // created: 2021-08-27 00:08:17
$layout_defs["Opportunities"]["subpanel_setup"]['abs1_preapplications_opportunities'] = array (
  'order' => 100,
  'module' => 'ABS1_preapplications',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ABS1_PREAPPLICATIONS_OPPORTUNITIES_FROM_ABS1_PREAPPLICATIONS_TITLE',
  'get_subpanel_data' => 'abs1_preapplications_opportunities',
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

<?php
 // created: 2021-08-09 23:41:57
$layout_defs["Opportunities"]["subpanel_setup"]['abs1_collaborator_opportunities_1'] = array (
  'order' => 100,
  'module' => 'ABS1_collaborator',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ABS1_COLLABORATOR_OPPORTUNITIES_1_FROM_ABS1_COLLABORATOR_TITLE',
  'get_subpanel_data' => 'abs1_collaborator_opportunities_1',
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

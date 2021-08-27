<?php
 // created: 2021-08-20 16:18:47
$dictionary['Opportunity']['fields']['actual_completion_date_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['actual_completion_date_c']['labelValue']='Actual Completion Date';
$dictionary['Opportunity']['fields']['actual_completion_date_c']['calculated']='1';
$dictionary['Opportunity']['fields']['actual_completion_date_c']['formula']='ifElse(
or(equal($sales_stage,"Closed Won"),equal($sales_stage,"Closed Lost")),
now(),
$dummy_empty_dt_c
)';
$dictionary['Opportunity']['fields']['actual_completion_date_c']['enforced']='1';
$dictionary['Opportunity']['fields']['actual_completion_date_c']['dependency']='';
$dictionary['Opportunity']['fields']['actual_completion_date_c']['required_formula']='';
$dictionary['Opportunity']['fields']['actual_completion_date_c']['readonly_formula']='';

 ?>
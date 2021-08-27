<?php
 // created: 2021-08-20 16:35:13
$dictionary['Opportunity']['fields']['name']['audited']=false;
$dictionary['Opportunity']['fields']['name']['massupdate']=false;
$dictionary['Opportunity']['fields']['name']['hidemassupdate']=false;
$dictionary['Opportunity']['fields']['name']['comments']='Name of the opportunity';
$dictionary['Opportunity']['fields']['name']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['name']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['name']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.65',
  'searchable' => true,
);
$dictionary['Opportunity']['fields']['name']['calculated']=false;
$dictionary['Opportunity']['fields']['name']['readonly']=true;
$dictionary['Opportunity']['fields']['name']['readonly_formula']='greaterThan(strlen($name),0)';

 ?>
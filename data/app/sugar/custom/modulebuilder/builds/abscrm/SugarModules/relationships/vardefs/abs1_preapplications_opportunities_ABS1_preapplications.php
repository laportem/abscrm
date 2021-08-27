<?php
// created: 2021-08-27 00:08:17
$dictionary["ABS1_preapplications"]["fields"]["abs1_preapplications_opportunities"] = array (
  'name' => 'abs1_preapplications_opportunities',
  'type' => 'link',
  'relationship' => 'abs1_preapplications_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'side' => 'right',
  'vname' => 'LBL_ABS1_PREAPPLICATIONS_OPPORTUNITIES_FROM_ABS1_PREAPPLICATIONS_TITLE',
  'id_name' => 'abs1_preapplications_opportunitiesopportunities_ida',
  'link-type' => 'one',
);
$dictionary["ABS1_preapplications"]["fields"]["abs1_preapplications_opportunities_name"] = array (
  'name' => 'abs1_preapplications_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABS1_PREAPPLICATIONS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'abs1_preapplications_opportunitiesopportunities_ida',
  'link' => 'abs1_preapplications_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["ABS1_preapplications"]["fields"]["abs1_preapplications_opportunitiesopportunities_ida"] = array (
  'name' => 'abs1_preapplications_opportunitiesopportunities_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABS1_PREAPPLICATIONS_OPPORTUNITIES_FROM_ABS1_PREAPPLICATIONS_TITLE_ID',
  'id_name' => 'abs1_preapplications_opportunitiesopportunities_ida',
  'link' => 'abs1_preapplications_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

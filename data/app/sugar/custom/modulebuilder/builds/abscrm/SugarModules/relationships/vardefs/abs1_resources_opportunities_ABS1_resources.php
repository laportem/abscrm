<?php
// created: 2021-08-27 00:08:16
$dictionary["ABS1_resources"]["fields"]["abs1_resources_opportunities"] = array (
  'name' => 'abs1_resources_opportunities',
  'type' => 'link',
  'relationship' => 'abs1_resources_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'side' => 'right',
  'vname' => 'LBL_ABS1_RESOURCES_OPPORTUNITIES_FROM_ABS1_RESOURCES_TITLE',
  'id_name' => 'abs1_resources_opportunitiesopportunities_ida',
  'link-type' => 'one',
);
$dictionary["ABS1_resources"]["fields"]["abs1_resources_opportunities_name"] = array (
  'name' => 'abs1_resources_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ABS1_RESOURCES_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'abs1_resources_opportunitiesopportunities_ida',
  'link' => 'abs1_resources_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["ABS1_resources"]["fields"]["abs1_resources_opportunitiesopportunities_ida"] = array (
  'name' => 'abs1_resources_opportunitiesopportunities_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ABS1_RESOURCES_OPPORTUNITIES_FROM_ABS1_RESOURCES_TITLE_ID',
  'id_name' => 'abs1_resources_opportunitiesopportunities_ida',
  'link' => 'abs1_resources_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

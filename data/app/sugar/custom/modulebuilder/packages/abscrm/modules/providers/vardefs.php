<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$vardefs = array (
  'fields' => 
  array (
    'provider_type' => 
    array (
      'required' => true,
      'readonly' => false,
      'name' => 'provider_type',
      'vname' => 'LBL_PROVIDER_TYPE',
      'type' => 'enum',
      'massupdate' => true,
      'hidemassupdate' => false,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => '1',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'pii' => false,
      'default' => 'Organisation',
      'calculated' => false,
      'len' => 100,
      'size' => '20',
      'options' => 'abs_org_indiv_list',
      'dependency' => false,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'dbType' => 'varchar',
      'len' => '255',
      'unified_search' => true,
      'full_text_search' => 
      array (
        'enabled' => true,
        'boost' => '1.55',
        'searchable' => true,
      ),
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'merge_filter' => 'selected',
      'duplicate_on_record_copy' => 'always',
      'readonly' => false,
      'massupdate' => false,
      'hidemassupdate' => false,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'duplicate_merge_dom_value' => '3',
      'audited' => false,
      'reportable' => true,
      'pii' => false,
      'default' => '',
      'calculated' => false,
      'size' => '20',
    ),
    'contact_id_c' => 
    array (
      'required' => false,
      'readonly' => false,
      'name' => 'contact_id_c',
      'vname' => 'LBL_CONTACT_CONTACT_ID',
      'type' => 'id',
      'massupdate' => false,
      'hidemassupdate' => false,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => 1,
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'pii' => false,
      'calculated' => false,
      'len' => 36,
      'size' => '20',
    ),
    'contact' => 
    array (
      'required' => true,
      'readonly' => false,
      'source' => 'non-db',
      'name' => 'contact',
      'vname' => 'LBL_CONTACT',
      'type' => 'relate',
      'massupdate' => true,
      'hidemassupdate' => false,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => '1',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'pii' => false,
      'calculated' => false,
      'dependency' => 'equal($provider_type,"Individual")',
      'required_formula' => 'equal($provider_type,"Individual")',
      'len' => 255,
      'size' => '20',
      'id_name' => 'contact_id_c',
      'ext2' => 'Contacts',
      'module' => 'Contacts',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'account_id_c' => 
    array (
      'required' => false,
      'readonly' => false,
      'name' => 'account_id_c',
      'vname' => 'LBL_ORGANISATION_ACCOUNT_ID',
      'type' => 'id',
      'massupdate' => false,
      'hidemassupdate' => false,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => 1,
      'audited' => false,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'pii' => false,
      'calculated' => false,
      'len' => 36,
      'size' => '20',
    ),
    'organisation' => 
    array (
      'required' => true,
      'readonly' => false,
      'source' => 'non-db',
      'name' => 'organisation',
      'vname' => 'LBL_ORGANISATION',
      'type' => 'relate',
      'massupdate' => true,
      'hidemassupdate' => false,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'enabled',
      'duplicate_merge_dom_value' => '1',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'pii' => false,
      'calculated' => false,
      'dependency' => 'equal($provider_type,"Organisation")',
      'required_formula' => 'equal($provider_type,"Organisation")',
      'len' => 255,
      'size' => '20',
      'id_name' => 'account_id_c',
      'ext2' => 'Accounts',
      'module' => 'Accounts',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
  ),
  'relationships' => 
  array (
  ),
);
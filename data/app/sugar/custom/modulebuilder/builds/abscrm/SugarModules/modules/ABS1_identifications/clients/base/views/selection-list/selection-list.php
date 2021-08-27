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

$module_name = 'ABS1_identifications';
$viewdefs[$module_name]['base']['view']['selection-list'] = array(
    'panels' => array(
        array(
            'label' => 'LBL_PANEL_1',
            'fields' => array(
                array(
                    'name' => 'name',
                    'label' => 'LBL_NAME',
                    'default' => true,
                    'enabled' => true,
                    'link' => true,
                ),
                array (
                    'name' => 'identification_type_c',
                    'label' => 'LBL_IDENTIFICATION_TYPE_C',
                    'enabled' => true,
                    'readonly' => false,
                    'default' => true,
                ),
                array (
                    'name' => 'abs1_identifications_contacts_name',
                    'label' => 'LBL_CONTACT',
                    'enabled' => true,
                    'id' => 'ABS1_IDENTIFICATIONS_CONTACTSCONTACTS_IDA',
                    'link' => true,
                    'sortable' => false,
                    'default' => true,
                ),
                array (
                    'name' => 'issuing_country_c',
                    'label' => 'LBL_ISSUING_COUNTRY_C',
                    'enabled' => true,
                    'readonly' => false,
                    'default' => true,
                ),
                array (
                    'name' => 'valid_to_c',
                    'label' => 'LBL_VALID_TO_C',
                    'enabled' => true,
                    'readonly' => false,
                    'default' => true,
                ),
                array(
                    'name' => 'team_name',
                    'label' => 'LBL_TEAM',
                    'default' => false,
                    'enabled' => true,
                ),
                array(
                    'name' => 'assigned_user_name',
                    'label' => 'LBL_ASSIGNED_TO_NAME',
                    'default' => false,
                    'enabled' => true,
                    'link' => true,
                ),
                array(
                    'label' => 'LBL_DATE_MODIFIED',
                    'enabled' => true,
                    'default' => false,
                    'name' => 'date_modified',
                    'readonly' => true,
                ),
            ),
        ),
    ),
    'orderBy' => array(
        'field' => 'date_modified',
        'direction' => 'desc',
    ),
);

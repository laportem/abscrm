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

$module_name = 'ABS1_providers';
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
                    'name' => 'provider_type',
                    'label' => 'LBL_PROVIDER_TYPE',
                    'enabled' => true,
                    'readonly' => false,
                    'default' => true,
                ),
                array (
                    'name' => 'contact',
                    'label' => 'LBL_CONTACT',
                    'enabled' => true,
                    'readonly' => false,
                    'id' => 'CONTACT_ID_C',
                    'link' => true,
                    'sortable' => false,
                    'default' => true,
                ),
                array (
                    'name' => 'account',
                    'label' => 'LBL_ACCOUNT',
                    'enabled' => true,
                    'readonly' => false,
                    'id' => 'ACCOUNT_ID_C',
                    'link' => true,
                    'sortable' => false,
                    'default' => true,
                ),
                array (
                    'name' => 'mat_c',
                    'label' => 'LBL_MAT_C',
                    'enabled' => true,
                    'readonly' => false,
                    'default' => false,
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

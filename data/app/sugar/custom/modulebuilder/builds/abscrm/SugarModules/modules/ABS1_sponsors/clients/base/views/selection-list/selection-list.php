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

$module_name = 'ABS1_sponsors';
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
                    'readonly' => false,
                    'name' => 'sponsors_type',
                    'label' => 'LBL_SPONSORS_TYPE',
                ),
                array (
                    'readonly' => false,
                    'name' => 'contact',
                    'studio' => 'visible',
                    'label' => 'LBL_CONTACT',
                ),
                array (
                    'readonly' => false,
                    'name' => 'account',
                    'studio' => 'visible',
                    'label' => 'LBL_ACCOUNT',
                ),
                array (
                    'readonly' => false,
                    'name' => 'local_c',
                    'label' => 'LBL_LOCAL_C',
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

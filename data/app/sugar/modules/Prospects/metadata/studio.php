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


$GLOBALS['studioDefs']['Prospects'] = array(
    'LBL_DETAILVIEW'=>array(
        'template'=>'xtpl',
        'template_file'=>'modules/Prospects/DetailView.html',
        'php_file'=>'modules/Prospects/DetailView.php',
        'type'=>'DetailView',
    ),
    'LBL_EDITVIEW'=>array(
        'template'=>'xtpl',
        'template_file'=>'modules/Prospects/EditView.html',
        'php_file'=>'modules/Prospects/EditView.php',
        'type'=>'EditView',
    ),
    'LBL_LISTVIEW'=>array(
        'template'=>'listview',
        'meta_file'=>'modules/Prospects/listviewdefs.php',
        'type'=>'ListView',
    ),
    'LBL_SEARCHFORM'=>array(
        'template'=>'xtpl',
        'template_file'=>'modules/Prospects/SearchForm.html',
        'php_file'=>'modules/Prospects/ListView.php',
        'type'=>'SearchForm',
    ),

);

<?php

//  ------------------------------------------------------------------------    //
//                XOOPS - PHP Content Management System                 //
//                    Copyright (c) 2004 XOOPS.org                          //
//                       <https://xoops.org>                              //
//                                                          //
//                  Authors :                                   //
//                      - solo (www.wolfpackclan.com)           //
//                  Moved v1.2                              //
//  ------------------------------------------------------------------------    //

// defined('XOOPS_ROOT_PATH') || die('XOOPS Root Path not defined');

$modversion['name'] = basename(__DIR__);

$modversion['version']             = 1.0;
$modversion['module_status']       = 'Beta 1';
$modversion['release_date']        = '2017/04/02';
$modversion['name']                = _MI_AJAX_SMARTY_NAME;
$modversion['description']         = _MI_AJAX_SMARTY_DESC;
$modversion['credits']             = 'based on article: http://kpumuk.info/ajax/smarty_ajax/';
$modversion['author']              = 'Dmytro Shteflyuk; Mamba';
$modversion['help']                = 'page=help';
$modversion['license']             = 'GNU GPL 2.0 or later';
$modversion['license_url']         = 'www.gnu.org/licenses/gpl-2.0.html';
$modversion['official']            = 0;
$modversion['dirname']             = basename(__DIR__);
$modversion['modicons16']          = 'assets/images/icons/16';
$modversion['modicons32']          = 'assets/images/icons/32';
$modversion['image']               = 'assets/images/logoModule.png';
$modversion['module_website_url']  = 'www.xoops.org';
$modversion['module_website_name'] = 'XOOPS';
$modversion['min_php']             = '7.2';
$modversion['min_xoops']           = '2.5.10';
$modversion['min_admin']           = '1.2';
$modversion['min_db']              = ['mysql' => '5.5'];
$modversion['system_menu']         = 1;
$modversion['adminindex']          = 'admin/index.php';
$modversion['adminmenu']           = 'admin/menu.php';

//sql tables
//$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
//$modversion['tables'][0] = "moved_ref";

//Admin
// Admin things
$modversion['hasAdmin'] = 1;
//Main
$modversion['hasMain'] = 1;
//if ($GLOBALS['xoopsUser']) {
//    $modversion['sub'][1]['name'] = _PROFILE_MI_EDITACCOUNT;
//    $modversion['sub'][1]['url']  = 'index.php';
//    $modversion['sub'][2]['name'] = _PROFILE_MI_PAGE_SEARCH;
//    $modversion['sub'][2]['url']  = 'calc.php';
//    $modversion['sub'][3]['name'] = _PROFILE_MI_CHANGEPASS;
//    $modversion['sub'][3]['url']  = 'chat.php';
//}


// ------------------- Help files ------------------- //
$modversion['helpsection'] = [
    ['name' => _MI_AJAX_SMARTY_OVERVIEW, 'link' => 'page=help'],
    ['name' => _MI_AJAX_SMARTY_DISCLAIMER, 'link' => 'page=disclaimer'],
    ['name' => _MI_AJAX_SMARTY_LICENSE, 'link' => 'page=license'],
    ['name' => _MI_AJAX_SMARTY_SUPPORT, 'link' => 'page=support'],
];

// ------------------- Templates ------------------- //

$modversion['templates'] = [
    ['file' => 'calc.tpl', 'description' => ''],
    ['file' => 'chat.tpl', 'description' => ''],
    ['file' => 'index.tpl', 'description' => ''],
    ['file' => 'page.tpl', 'description' => ''],
    ['file' => 'register.tpl', 'description' => ''],
    ['file' => 'introduction/about.tpl', 'description' => ''],
    ['file' => 'introduction/call.tpl', 'description' => ''],
    ['file' => 'introduction/form.tpl', 'description' => ''],
    ['file' => 'introduction/update.tpl', 'description' => ''],
    ['file' => 'parts/warnings.tpl', 'description' => ''],
];

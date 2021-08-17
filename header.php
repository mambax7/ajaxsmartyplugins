<?php

use \XoopsModules\Ajaxsmartyplugins\{
    Helper
};

$moduleDirName = basename(__DIR__);

require_once dirname(__DIR__, 2) . '/mainfile.php';
require XOOPS_ROOT_PATH . '/header.php';

//$xoopsLogger->activated = false;
require __DIR__ . '/include/smarty_ajax.php';

/** @var \XoopsModules\Ajaxsmartyplugins\Helper $helper */
$helper = Helper::getInstance();

//global $xoopsTpl;

$modulePath = XOOPS_ROOT_PATH . '/modules/' . $moduleDirName;
//require __DIR__ . '/include/config.php';

$myts = \MyTextSanitizer::getInstance();

if (!isset($GLOBALS['xoTheme']) || !is_object($GLOBALS['xoTheme'])) {
    require $GLOBALS['xoops']->path('class/theme.php');
    $GLOBALS['xoTheme'] = new \xos_opal_Theme();
}

//Handlers
//$XXXHandler = xoops_getModuleHandler('XXX', $moduleDirName);

// Load language files
$helper->loadLanguage('main');

if (!isset($GLOBALS['xoopsTpl']) || !($GLOBALS['xoopsTpl'] instanceof XoopsTpl)) {
    require $GLOBALS['xoops']->path('class/template.php');
    $xoopsTpl = new XoopsTpl();
}


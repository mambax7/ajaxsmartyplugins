<?php
/**
 * Project:     smarty_ajax: AJAX-enabled Smarty plugins
 * File:        register.php
 *
 * This software is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This software is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * @link      http://kpumuk.info/ajax/smarty_ajax/
 * @copyright 2006 Dmytro Shteflyuk
 * @author    Dmytro Shteflyuk <kpumuk@kpumuk.info>
 * @package   smarty_ajax
 * @version   0.1
 */

use XoopsModules\Ajaxsmartyplugins;

//$GLOBALS['xoopsOption']['template_main'] = 'register.tpl';
require __DIR__ . '/header.php';

//require_once __DIR__ . '/include/loader.php';

global $xoopsTpl;

$xoopsLogger->activated = false;

if (!empty($_POST)) {
    $errors = [];
    //  if (!isset($_POST['login']) || empty($_POST['login']))
    if (!\Xmf\Request::hasVar('login', 'POST')) {
        $errors[] = 'Please, enter your login';
    }
//    if (!isset($_POST['password']) || empty($_POST['password'])) {
    if (!\Xmf\Request::hasVar('password', 'POST')) {
        $errors[] = 'Please, enter your password';
    }
//    if (!isset($_POST['email']) || empty($_POST['email'])) {
    if (!\Xmf\Request::hasVar('email', 'POST')) {
        $errors[] = 'Please, enter your e-mail';
    }

    if (!empty($errors)) {
        echo 'false';
        foreach ($errors as $error) {
            echo ';' . $error;
        }
        exit;
    }
    echo 'true;You\'ve been successfully registered';
    exit;
}

$xoopsTpl->assign('title', 'Registration Form');
$xoopsTpl->assign('messages', ['Please, fill form data']);
$xoopsTpl->assign('messages_warning', true);
$xoopsTpl->assign('page_template', 'register');
$xoopsTpl->display('db:page.tpl');

include __DIR__ . '/footer.php';


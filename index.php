<?php
/**
 * Project:     smarty_ajax: AJAX-enabled Smarty plugins
 * File:        index.php
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

$moduleDirName = basename(__DIR__);

$GLOBALS['xoopsOption']['template_main'] = 'index.tpl';
require __DIR__ . '/header.php';
require XOOPS_ROOT_PATH . '/header.php';

global $xoopsTpl;

$xoopsLogger->activated = false;

//require_once __DIR__ . '/include/smarty_ajax.php';
//require_once __DIR__ . '/include/loader.php';

function update_intro()
{
    global $xoopsTpl;
    header('Content-Type: text/html; charset=utf8');
    if (\Xmf\Request::hasVar('page')) {
        $xoopsTpl->display('db:introduction/' . \Xmf\Request::getString('page') . '.tpl');
    }
}

ajax_register('update_intro');
ajax_process_call();


$xoopsTpl->assign('mod_url', XOOPS_URL . '/modules/' . $moduleDirName);
$xoopsTpl->assign('title', 'Introduction');
$xoopsTpl->assign('page_template', 'index');
$xoopsTpl->display('db:page.tpl');

require XOOPS_ROOT_PATH . '/footer.php';

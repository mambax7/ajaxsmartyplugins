<?php
/**
 * Project:     smarty_ajax: AJAX-enabled Smarty plugins
 * File:        calc.php
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

//$GLOBALS['xoopsOption']['template_main'] = 'calc.tpl';
require __DIR__ . '/header.php';

$xoopsLogger->activated = false;
// provide error logging for our sanity in debugging ajax use (won't see xoops logger)
//restore_error_handler();
////error_reporting(-1);

//require_once __DIR__ . '/include/loader.php';

function calculate()
{
    $a = \Xmf\Request::getInt('a', 0, 'GET');
    $b = \Xmf\Request::getInt('b', 0, 'GET');
    echo $a + $b;
}

ajax_register('calculate');
ajax_process_call();

$xoopsTpl->assign('title', 'Calculator');
$xoopsTpl->assign('page_template', 'calc');
$xoopsTpl->display('db:page.tpl');

include __DIR__ . '/footer.php';

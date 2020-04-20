<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Local language pack from http://web.parall.docker/moodle
 *
 * @package    core
 * @subpackage backup
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncbackupcomplete'] = '备份操作已完成';
$string['asyncbackupcompletebutton'] = '继续';
$string['asyncbackupcompletedetail'] = '备份操作已成功完成。<br/>
您可以通过<a href="{$a}">restore page.</a>访问备份。';
$string['asyncbackuperror'] = '备份操作失败';
$string['asyncbackuperrordetail'] = '备份操作失败。请联系您的系统管理员。';
$string['asyncbackuppending'] = '备份操作挂起';
$string['asyncbackupprocessing'] = '备份操作进行中';
$string['asyncbadexecution'] = '备份控制器执行错误。应该是2，得到的是{$a}。';
$string['asynccheckprogress'] = '您可以在任何时候检查执行进程：<a href="{$a}">restore page</a>。';
$string['asyncemailenable'] = '启用消息通知';
$string['asyncemailenabledetail'] = '如果设置，当一次异步备份或者恢复完成时，用户将会收到一条消息。';
$string['asyncgeneralsettings'] = '异步备份/恢复';
$string['asyncmessagebody'] = '消息内容';
$string['asyncmessagebodydetail'] = '当异步备份/恢复完成时发送的消息。';
$string['asyncmessagesubject'] = '标题';
$string['asyncmessagesubjectdefault'] = 'Moodle操作{operation}已成功完成';
$string['asyncmessagesubjectdetail'] = '消息标题';
$string['asyncnowait'] = '您不必在此等候，操作过程会在后台继续执行。';
$string['asyncprocesspending'] = '操作挂起';
$string['asyncrestorecomplete'] = '恢复操作已完成';
$string['asyncrestorecompletebutton'] = '继续';
$string['asyncrestorecompletedetail'] = '恢复操作已成功完成。点击查看：<a href="{$a}">恢复的课程</a>';
$string['asyncrestoreerror'] = '恢复操作失败';
$string['asyncrestoreerrordetail'] = '恢复操作失败。请联系您的系统管理员。';
$string['asyncrestoreinprogress'] = '恢复操作执行中';
$string['asyncrestoreinprogress_help'] = '进行中的异步恢复课程显示如下。';
$string['asyncrestorepending'] = '恢复操作挂起';
$string['asyncrestoreprocessing'] = '恢复操作进行中';
$string['asyncreturn'] = '回到课程';
$string['automateddeletedays'] = '删除早于下列时间的备份';
$string['automatedmaxkept'] = '备份保存的最大数目';
$string['automatedminkept'] = '备份保存的最小数目';
$string['automatedminkepthelp'] = '如果超过指定天数的备份被删除，有可能出现不活跃的课程的备份被删光了的情况。为了防止这种情况出现，应该指定一个备份保存的最小数目。';
$string['configgeneralfiles'] = '设置备份时“包括文件”的默认值。注意：如果没有勾选此选项，备份中将只包含文件索引。要确保备份将来只用在同一个站点来恢复，并且文件不会被清理掉（根据“清理文件池垃圾文件”(filescleanupperiod)设置），否则会出问题。';
$string['configgeneralfilters'] = '设置备份中是否包含过滤器。';
$string['configrestorefilters'] = '设置要恢复的筛选器的过滤器。';
$string['enableasyncbackup'] = '启用异步备份';
$string['enableasyncbackup_help'] = '如果启用，所有的备份和恢复操作都将会异步执行。不影响导入和导出操作。异步备份和恢复允许用户在备份或恢复操作执行过程中继续其他操作。';
$string['generalfiles'] = '包括文件';
$string['pendingasyncdeletedetail'] = '此课程正在执行异步备份当中。<br/>
在备份完成前无法删除该课程。';
$string['pendingasyncdetail'] = '异步备份只允许一个用户一次只能备份一种类型的资源。<br/>
对同一个资源的多次异步备份不会排队执行，所以很可能会造成对同一内容的多次备份。';
$string['pendingasyncedit'] = '此课程正在执行异步备份当中。<br/>
在备份完成前无法编辑该课程。';
$string['pendingasyncerror'] = '此资源的备份挂起';
$string['qcategory2coursefallback'] = '备份文件中的题目类别“{$a->name}”原来是在系统/课程级分类上下文中，恢复后该题目类别将建立在课程上下文中';
$string['question2coursefallback'] = '备份文件中的题目类别“{$a->name}”原来是在系统/课程级分类上下文中，恢复后该题目类别将建立在课程上下文中';
$string['rootsettingcustomfield'] = '包括自定义字段';
$string['rootsettingfiles'] = '包括文件';
$string['samesitenotification'] = '此备份创建时只包括文件索引，不包括文件本身。只能在此站点上恢复。';
$string['status'] = '状态';
$string['successful'] = '备份成功';
$string['successfulrestore'] = '恢复成功';

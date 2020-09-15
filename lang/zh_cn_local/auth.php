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
 * Local language pack from http://mdlsrv1.mydev.lan
 *
 * @package    core
 * @subpackage auth
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alternatelogin'] = '如果您在此输入一个URL，它将被用于本站的登录。这个页面上应当有一个表单，表单的 action 一项应设定为<strong>“{$a}”</strong>，并且返回的字段中应当有 <strong>username</strong> 和 <strong>password</strong>。<br />小心，不要输入错误的URL，否则您可能会被锁在站点之外。<br />要使用默认的登录页面请为此设置保留空白。';
$string['authinstructions'] = '此处留空，登录页面会显示默认的登录说明。如果想自定义登录说明，就在此输入。';

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
 * @subpackage portfolio
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activeportfolios'] = '可选的卷宗夹';
$string['enabled'] = '启用卷宗夹';
$string['enableddesc'] = '如果启用，用户可以将内容（例如论坛帖子和作业提交）导出到外部卷宗夹或HTML页面。';
$string['insanebody'] = '您好！因为您是{$a->sitename}的管理员，所以您会收到此信息。 因为配置错误，一些卷宗夹插件被自动禁用。这意味着用户现在不能向这些卷宗夹导出数据。 被禁用的卷宗夹插件有： {$a->textlist} 请即刻访问 {$a->fixurl} ，并修正此问题。';
$string['insanebodyhtml'] = '<p>您好！因为您是{$a->sitename}的管理员，所以您会收到此信息。</p> <p>因为配置错误，一些卷宗夹插件被自动禁用。这意味着用户现在不能向这些卷宗夹导出数据。</p> <p>被禁用的卷宗夹插件有：</p> {$a->htmllist} <p>请即刻访问<a href="{$a->fixurl}">卷宗夹配置页</a> ，并修正此问题。</p>';
$string['insanebodysmall'] = '您好！因为您是{$a->sitename}的管理员，所以您会收到此信息。因为配置错误，一些卷宗夹插件被自动禁用。这意味着用户现在不能向这些卷宗夹导出数据。请即刻访问 {$a->fixurl} ，并修正此问题。';
$string['manageportfolios'] = '管理卷宗夹';
$string['manageyourportfolios'] = '管理您地卷宗夹';
$string['noavailableplugins'] = '抱歉，没有您可用的卷宗夹，无法导出';
$string['portfolios'] = '卷宗夹';

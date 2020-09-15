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
 * @subpackage error
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['blockcannotconfig'] = '此板块不支持全局配置';
$string['blockcannotinistantiate'] = '实例化板块对象时发现问题';
$string['blockdoesnotexist'] = '此板块不存在';
$string['blockdoesnotexistonpage'] = '页面（{$a->url}）中没有这个板块（id={$a->instanceid}）';
$string['blocknameconflict'] = '名字冲突：板块{$a->name}与已存在的板块{$a->conflict}重名！';
$string['cannotaddthisblocktype'] = '您不能在此页添加板块 {$a}。';
$string['cannotcustomisefiltersblockuser'] = '您不能在用户或板块场景中自定义过滤器设置。';
$string['cannotsaveblock'] = '保存板块配置时发生错误';
$string['cannotsetupblock'] = '配置板块表失败！';
$string['courserequestdisabled'] = '抱歉，建课申请的功能已被管理员禁用';
$string['failtoloadblocks'] = '数据库中注册了一个或多个板块，但是无法加载它们！';
$string['invalidblockinstance'] = '无效的板块实例：{$a}';
$string['invalidurl'] = '无效的URL';
$string['noblocks'] = '没有找到板块！';
$string['privatefilesupload'] = '已经不再支持上传到用户个人文件区。请上传到草稿区，然后用core_user::add_user_private_files
来移动文件';
$string['unknownblockregion'] = '在此页上无法识别板块区\'{$a}\'。';
$string['unknowncourserequest'] = '未知的建课申请';
$string['urlnotdefinerss'] = 'RSS种子的URL未定义';

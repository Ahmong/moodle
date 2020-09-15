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
 * @package    workshopallocation
 * @subpackage random
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allocationdeallocategraded'] = '不能解除指派已评分的评价：评价人 <strong>{$a->reviewername}</strong>，提交作品作者：<strong>{$a->authorname}</strong>';
$string['assessmentdeleteddetail'] = '已解除指派: <strong>{$a->reviewername}</strong> 不再是 <strong>{$a->authorname} 的评审人';
$string['confignumofreviews'] = '用于随机指派的提交作品的默认数量';
$string['nogroupusers'] = '<p>警告：如果工作坊处在“可视小组”模式或者“独立小组”模式，那么用户必须至少属于一个组，才能用此工具向他们指派评价任务。不属于任何组的用户仍然可以做自我评价或者删除已有的评价。</p> <p>这些用户目前还未被加入任何组：{$a}</p>';
$string['privacy:metadata'] = '随机分派插件不存储任何个人数据。关于谁将评价谁的实际个人数据由工作坊模块自己存储，这些数据成为导出评价细节的基础。';
$string['resultnomorepeersingroup'] = '在此独立小组中没有足够的互评人员可用';
$string['resultnumperauthor'] = '尝试为每个作者指派 {$a} 个评审人';
$string['resultnumperreviewer'] = '尝试为每个评审人分配 {$a} 个评审任务';

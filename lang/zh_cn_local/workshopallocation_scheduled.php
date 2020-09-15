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
 * @subpackage scheduled
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enablescheduledinfo'] = '在提交阶段结束时自动指派提交作品';
$string['privacy:metadata'] = '计划分派插件不存储任何个人数据。关于谁将评价谁的实际个人数据由工作坊模块自己存储，这些数据成为导出评价细节的基础。';
$string['resultfailed'] = '无法自动指派提交作品';
$string['resultfaileddeadline'] = '工作坊没有定义提交截止日期';
$string['resultfailedphase'] = '工作坊未处于提交阶段';
$string['resultvoid'] = '没有提交作品被指派';
$string['scheduledallocationsettings_help'] = '如果启用，计划指派方式将会在提交阶段结束后自动指派提交作品以进行评价。此阶段的结束时间在工作坊设置的“提交截止日期”中定义。本质上，是使用此表单中预定义的参数来执行随机指派。这意味意着计划指派程序工作起来就像是教师在提交结束阶段使用下面的指派设置来亲自执行随机分派。注意，如果您在提交截止日期前手动转换工作坊到评价阶段，计划指派 *不会* 执行。这种情况下，您将不得不亲自指派提交作品。计划指派方式在和自动阶段转换功能一起使用时特别有用。';

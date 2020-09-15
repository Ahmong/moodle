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
 * @package    mod
 * @subpackage assign
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allocatedmarker'] = '指派的评分人';
$string['allocatedmarker_help'] = '指派给该作业的评分人';
$string['assign:manageallocations'] = '管理指派的评分人';
$string['assign:receivegradernotifications'] = '接收教师评价通知';
$string['assign:showhiddengrader'] = '查看隐藏教师的身份';
$string['assignmentmailsmall'] = '{$a->grader}已经就您提交的作业“{$a->assignment}”填写了反馈意见，您可以打开作业查看。';
$string['batchsetallocatedmarker'] = '为{$a}位选定的用户指派评分人';
$string['cutoffdatevalidation'] = '提交截止日期不能早于到期日。';
$string['duedate'] = '到期日';
$string['duedatecolon'] = '到期日：{$a}';
$string['duedateno'] = '没有到期日';
$string['duedatereached'] = '此作业的到期日已经过了';
$string['duedatevalidation'] = '到期日不能早于允许提交的开始日';
$string['eventbatchsetmarkerallocationviewed'] = '查看批量设置评分人指派';
$string['eventmarkerupdated'] = '指派的评分人已更新';
$string['extensionduedate'] = '延长到期日';
$string['extensionnotafterduedate'] = '延长的日期必须晚于到期日';
$string['gradingdueduedatevalidation'] = '提醒我评分的日期不能早于到期日。';
$string['hidegrader'] = '对学生隐藏教师身份';
$string['indicator:cognitivedepthdef_help'] = '参与人在时间分片期间的活动-作业中体现的认知参与度（级别 = 未看，已看，提交，已看反馈，对反馈置评，看反馈后再提交）';
$string['indicator:socialbreadth'] = '作业活动社交度';
$string['indicator:socialbreadth_help'] = '这个指标是基于学生在作业活动中所达到的社交广度。';
$string['indicator:socialbreadthdef'] = '作业活动社交度';
$string['indicator:socialbreadthdef_help'] = '参与人在时间分片期间的活动-作业中体现的社交参与度（级别 = 未参与，单独参与，结伴参与）';
$string['marker'] = '评分人';
$string['markerfilter'] = '评分人过滤器';
$string['markerfilternomarker'] = '没有评分人';
$string['markingallocation_help'] = '如果启用此功能，依工作流程，评分人可以被指派給特定学生(群)';
$string['markingworkflowstate_help'] = '工作流程可能包含（依您同意）：

* 未评分：评分还没开始 
* 评分中：评分已开始但未结束 
* 评分完成：评分人已经结束评分，但仍可能需要复查或修正 
* 复查中：成绩已在老师手中，正进行审核 
* 准备公布：负责评分的老师满意此评分，但仍在等待，之后才会发给学生查看成绩 
* 已公布：学生可以查看成绩和反馈';
$string['maxperpage_help'] = '在评分页面上最多可以显示多少个作业。当课程选课人数很多时，可以防止页面超时。';
$string['privacy:metadata:assignmarkerfilter'] = '按指派评分人筛选指派汇总。';
$string['sendlatenotifications'] = '迟交时通知教师';
$string['sendnotifications'] = '学生交作业时通知教师';
$string['setmarkerallocationforlog'] = '指派评分人： (编号={$a->id}，姓名={$a->fullname}，评分人={$a->marker})';
$string['setmarkingallocation'] = '指派评分人';

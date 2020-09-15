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
 * @subpackage enrol
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ajaxnext25'] = '后25个...';
$string['ajaxxmoreusersfound'] = '找到超过{$a}个用户';
$string['defaultenrol_desc'] = '可以把这些插件默认添加到所有新课程。';
$string['deleteinstanceconfirm'] = '您将要删除在"{$a->name}"中的选课方法。当前所有使用该方法报名的{$a->users}名用户会被退出，而且所有课程相关的信息例如用户的成绩，组成员关系以及论坛订阅等都将被删除。 你确定要继续吗？';
$string['deleteinstanceconfirmself'] = '你真的确定要删除能让您访问此课程的实例"{$a->name}"吗？继续此操作可能会导致您无法访问这个课程。';
$string['deleteinstancenousersconfirm'] = '您正要删除选课方法“{$a->name}”，您确定需要继续吗？';
$string['disableinstanceconfirmself'] = '你真的确定要禁用能让您访问此课程的实例"{$a->name}"么？继续此操作可能导致您无法访问这个课程。';
$string['enrolmentmethod'] = '选课方法';
$string['enrolmentnew'] = '新选课进入{$a}的用户';
$string['enrolmentnewuser'] = '{$a->user}已经选择了课程“{$a->course}”';
$string['enrolperiod'] = '选课期限';
$string['enrolxusers'] = '加入{$a}名用户';
$string['errajaxfailedenrol'] = '加入用户失败';
$string['erroreditenrolment'] = '尝试修改用户的选课信息时出错';
$string['eventenrolinstancecreated'] = '选课实例已创建';
$string['eventenrolinstancedeleted'] = '选课实例已删除';
$string['eventenrolinstanceupdated'] = '选课实例已更新';
$string['eventuserenrolmentcreated'] = '用户报名选课';
$string['eventuserenrolmentdeleted'] = '用户取消选课';
$string['eventuserenrolmentupdated'] = '已更新用户取消选课';
$string['expirynotify'] = '选课过期前发送通知';
$string['expirynotify_help'] = '此设置用于确定是否发送选课过期通知。';
$string['expirynotifyall'] = '教师和选课用户';
$string['expirynotifyenroller'] = '仅教师';
$string['expirythreshold'] = '通知阈值';
$string['expirythreshold_help'] = '在选课过期前多长时间用户应该被通知到？';
$string['extremovedunenrol'] = '注销选课';
$string['finishenrollingusers'] = '已完成选课用户';
$string['foundxcohorts'] = '找到 {$a}个群';
$string['instanceeditselfwarningtext'] = '您已使用这个选课方式报名此课程，如更改将会对您访问课程产生影响。';
$string['invalidenrolduration'] = '无效的选课期限';
$string['noexistingparticipants'] = '当前无参与者';
$string['notenrolledusers'] = '其他用户';
$string['participationnotcurrent'] = '非当前';
$string['proceedtocourse'] = '继续前往课程内容';
$string['sendfromcoursecontact'] = '发自课程联系人';
$string['sendfromkeyholder'] = '发自注册码保管人';
$string['sendfromnoreply'] = '发自勿回复地址';
$string['testsettingsheading'] = '测试注册设置方式 - {$a}';
$string['totalunenrolledusers'] = '{$a}名取消选课用户';
$string['youenrolledincourse'] = '您已报名进入课程。';
$string['youunenrolledfromcourse'] = '您已从课程"{$a}"注销选课。';

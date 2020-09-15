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
 * @subpackage workshop
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allocate'] = '指派提交作品';
$string['allocatedetails'] = '预计：{$a->expected}<br />已提交：{$a->submitted}<br />待指派：{$a->allocate}';
$string['assessmentdeleted'] = '解除指派的评价';
$string['clearassessmentsconfirm'] = '您确定要清除所有评价成绩？清除后，您将不能独立恢复这些信息，评价人必须重新评价指派的提交作品。';
$string['configexamplesmode'] = '工作坊中范例评价的默认模式';
$string['configgrade'] = '工作坊中作业的默认最高分';
$string['configgradinggrade'] = '工作坊中评价的默认最高分';
$string['configmaxbytes'] = '网站所有工作坊上传文件大小的默认最大值（受限于课程限制和其他本地设置）';
$string['configstrategy'] = '工作坊的默认评分策略';
$string['crontask'] = '工作坊模块的后台处理程序';
$string['gradesreport'] = '工作坊成绩表';
$string['groupnoallowed'] = '您未被允许访问该工作坊中的任何组';
$string['indicator:cognitivedepth'] = '工作坊的活动认知深度';
$string['indicator:cognitivedepth_help'] = '这个指标是基于学生在工作坊活动中所达到的认知深度。';
$string['indicator:cognitivedepthdef'] = '工作坊活动认知深度';
$string['indicator:cognitivedepthdef_help'] = '参与人在时间分片期间的活动-工作坊中体现的认知参与度（级别 = 未看，已看，提交，已看反馈，对反馈置评，看反馈后再提交）';
$string['indicator:socialbreadth'] = '工作坊活动社交度';
$string['indicator:socialbreadth_help'] = '这个指标是基于学生在工作坊中所达到的社交广度。';
$string['indicator:socialbreadthdef'] = '工作坊活动社交度';
$string['indicator:socialbreadthdef_help'] = '参与人在时间分片期间的活动-工作坊中体现的社交参与度（级别 = 未参与，单独参与，结伴参与）';
$string['legacyallocationplugincron'] = '遗留的工作坊分配cron';
$string['modulename'] = '工作坊';
$string['modulename_help'] = '工作坊活动模块可以收集、复审和互评学生的作品。

学生可以提交任何数字内容(文件)，如文字处理文档或电子表格，还可以使用文本编辑器直接在字段中输入文本。

提交的作品将使用教师定义的多标准评价表进行评价。同学间互评和理解评价表的过程，可由教师提供范例，连同参考评价一起预先练习。学生们有机会评价他们的一个或多个同学提交的作品。如果需要，提交和评价人可以是匿名的。

学生在工作坊活动中将获得两个成绩——提交的成绩和对同学作品评价的成绩。两个成绩都记录在成绩单上。';
$string['modulenameplural'] = '工作坊';
$string['noexamples'] = '此工作坊还没有范例';
$string['nosubmissions'] = '此工作坊还没有被提交的作品';
$string['noworkshops'] = '此课程中没有工作坊';
$string['page-mod-workshop-x'] = '任意工作坊页面';
$string['pluginadministration'] = '工作坊管理';
$string['pluginname'] = '工作坊';
$string['privacy:metadata:aggregatedgradinggrade'] = '给定工作坊中用户给出的所有评价的汇总成绩';
$string['privacy:metadata:published'] = '工作坊关闭后，是否向所有参加者发布所提交的作品';
$string['privacy:metadata:subsystem:corefiles'] = '工作坊模块存储嵌入/附加到提交文本中的文件';
$string['privacy:metadata:subsystem:coreplagiarism'] = '工作坊模块内置了防抄袭系统';
$string['privacy:metadata:workshopassessments'] = '保存关于工作坊模块的被提交作品的被指派的评价的信息';
$string['privacy:metadata:workshopid'] = '工作坊活动的ID';
$string['privacy:metadata:workshopsubmissions'] = '保存关于工作坊模块的被提交作品的信息';
$string['publishsubmission_help'] = '当工作坊关闭后，其他人仍可以看到已发布的被提交作品。';
$string['recentassessments'] = '工作坊评价：';
$string['recentsubmissions'] = '工作坊被提交作品：';
$string['resetassessments_help'] = '您可以选择只删除指派的评价而不影响提交作品。如果要删除提交作品，它们的评价将被隐式删除，并且这个选项将被忽略。注意，这还包括对范例提交的评价。';
$string['resetphase_help'] = '如果启用，所有工作坊将进入初始设置阶段。';
$string['search:activity'] = '工作坊 - 活动信息';
$string['strategyhaschanged'] = '自表单打开以进行编辑以来，工作坊评分策略已经发生了变化。';
$string['submissionendswitch_help'] = '如果指定了提交截止日期并且勾选了此框，工作坊将在提交截止日期之后自动切换到评价阶段。如果启用此功能，还建议设置计划指派方法。如果提交作品没有被指派，则即使工作坊处于评价阶段也不能进行评价。';
$string['submissionsreport'] = '工作坊提交作品报告';
$string['submissiontypedisabled'] = '此工作坊禁用此提交类型';
$string['switchphase10info'] = '您将切换此工作坊到<strong>设置阶段</strong>。在此阶段，用户不能修改他们的提交作品或评价。教师可以利用这一阶段来更改工作坊设置、修改评分策略或调整评价表。';
$string['switchphase20info'] = '您将切换此工作坊到<strong>提交阶段</strong>。在此阶段学生可以提交他们的作品（在提交访问控制日期内，如果设置了的话）。教师可以指派提交作品给同学进行互评。';
$string['switchphase30auto'] = '在 {$a->daydatetime} ({$a->distanceday}) 之后，工作坊会自动切换到评价阶段';
$string['switchphase30info'] = '您将切换该工作坊到<strong>评价阶段</strong>。在这个阶段，评价人可以评价已指派给他们的提交作品（在评价访问控制日期内，如果已经设置）。';
$string['switchphase40info'] = '您将切换该工作坊到<strong>成绩核定阶段</strong>。 在这个阶段，用户无法修改他们的提交作品和评价。教师可以使用成绩核定工具计算最终成绩，并给评价人反馈。';
$string['switchphase50'] = '关闭工作坊';
$string['switchphase50info'] = '您将要关闭此工作坊。已计算的成绩将会显示在成绩单上。学生们可以查看他们的提交作品和评价。';
$string['taskintro'] = '设置此工作坊的描述';
$string['toolbox'] = '工作坊工具箱';
$string['undersetup'] = '工作坊目前正在建立中。请等待，直到工作坊切换到下一阶段。';
$string['usepeerassessment_help'] = '如果启用，会指派其他用户的提交作品给用户来进行评价。并且，用户除了获得一个自己提交作品的成绩，还会获得一个所做评价的成绩。';
$string['userplan'] = '工作坊计划表';
$string['userplan_help'] = '工作坊计划表显示活动的所有阶段，并列出每个阶段的任务。当前阶段被突出显示，任务进度被标记出来。';
$string['userplanaccessibilitytitle'] = '工作坊在阶段{$a}的时间线';
$string['useselfassessment_help'] = '如果启用，用户自己的提交作品可能会被指派给自己进行评价。并且，用户除了获得的提交作品的成绩，还会获得一个所做评价的成绩。';
$string['viewworkshopsummary'] = '查看工作坊汇总';
$string['workshop:addinstance'] = '添加新工作坊';
$string['workshop:allocate'] = '指派提交作品用于评审';
$string['workshop:view'] = '查看工作坊';
$string['workshopname'] = '工作坊名称';

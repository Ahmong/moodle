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
 * @subpackage lesson
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actionaftercorrectanswer_help'] = '正确回答问题之后，有三个选项决定下一页跳转到哪里：

* 正常 - 跟随学案路径继续
* 显示一个没看过的页面 - 按随机顺序显示页面。每个页面只会显示一次
* 显示一个未回答的页面 - 按随机顺序显示页面。有未回答的问题的页面会被重新显示';
$string['activitylink_help'] = '想在学案结束时显示一个到课程中其它活动的链接，请在下拉列表中选择该活动。';
$string['activityoverview'] = '您有到期的学案';
$string['additionalattemptsremaining'] = '已完成，您可以重新学习本学案';
$string['allowofflineattempts'] = '允许移动应用离线使用该学案';
$string['allowofflineattempts_help'] = '如果启用，移动应用程序用户可以下载该学案并离线使用。所有可能的答案和正确的回答也将被下载。注意：如果学案学习有时间限制，就不能离线使用。';
$string['cannotfindnextpage'] = '学案备份：找不到下一页！';
$string['cannotfindpages'] = '找不到学案页面';
$string['cannotfindrecords'] = '错误：找不到学案记录';
$string['cannotfindtimer'] = '错误：找不到学案定时记录';
$string['closebeforeopen'] = '不能更新这个学案。你指定的关闭时间早于开放时间。';
$string['completederror'] = '完成此学案';
$string['completethefollowingconditions'] = '在继续前您必须完成下面的学案<b>{$a}</b>';
$string['completionendreached_desc'] = '学生需要到达该学案的最后一页才能完成这个活动';
$string['configintro'] = '这里设置的值定义了在创建新学案时设置表单中使用的默认值。指定为高级的设置只在点击“显示更多……”链接时显示。';
$string['configmaxanswers'] = '默认每页最多答题数';
$string['configpassword_desc'] = '进入这个学案时是否需要密码。';
$string['configtimelimit_desc'] = '如果设置了一个时间限制，那么在该学案的开放时间处会显示一个警告，并且显示一个倒计时计时器。如果设置为0，则没有时间限制。';
$string['congratulations'] = '祝贺——到达学案终点了';
$string['deleteallattempts'] = '删除学案的所有学习尝试';
$string['deletedefaults'] = '已删除的 {$a} x 学案默认值';
$string['dependencyon_help'] = '此设置基于学生在同一课程中其他学案的表现，限制他们对此学案的访问权。可以使用学习时间、是否完成或“成绩高于”的各种组合。';
$string['displayleftif_help'] = '此设置决定在看到学案菜单之前是否必须先获得一定的分数。这将强制学生在第一次访问时必须学习完成整个学案。在达到要求的分数后，他们就可以使用菜单进行复习了。';
$string['displayreview_help'] = '如果启用，当学生未能正确回答问题时，可以选择再答一次但不计分，或者继续学习学案。如果学生点击继续前进到其他问题，则会带着已选的（错误的）答案。默认时，回答错误时将跳转到“此页”并给予0分。所以建议您将错误答案的设置为跳转到另一页，以免使学生困惑。';
$string['editlessonsettings'] = '编辑学案设置';
$string['endoflesson'] = '学案结束';
$string['eolstudentoutoftime'] = '注意：您已经超过了本学案限定的学习时间。您最后回答的题目如果是在时限之后作答，那么可能不会被算分。';
$string['eolstudentoutoftimenoanswers'] = '您没有作答任何题目。您在本学案中得到了 0 分。';
$string['essayemailmessage2'] = '<p>问答题：<blockquote>{$a->question}</blockquote></p><p>您的回答：<blockquote><em>{$a->response}</em></blockquote></p><p>教师评论：<blockquote><em>{$a->comment}</em></blockquote></p><p>此问答题您得到了{$a->earned}分（满分{$a->outof}）。</p><p>您在此学案中的成绩已经变为{$a->newgrade}%。</p>';
$string['essayemailmessagesmall'] = '<p>您在此问答题中的得分是 {$a->earned}（满分 {$a->outof} 分）。</p>
<p>您在学案 {$a->lesson} 中的成绩已更改为 {$a->newgrade}%。</p>';
$string['essayemailsubject'] = '学案题目 {$a} 的成绩';
$string['eventlessonended'] = '学案已结束';
$string['eventlessonrestarted'] = '重新开始学习学案';
$string['eventlessonresumed'] = '恢复学习学案';
$string['eventlessonstarted'] = '开始学习学案';
$string['eventoverridecreated'] = '学案覆盖已创建';
$string['eventoverridedeleted'] = '学案覆盖已删除';
$string['eventoverrideupdated'] = '学案覆盖已更新';
$string['gotoendoflesson'] = '到学案末尾';
$string['handlingofretakes_help'] = '如果允许学生重新学习，此设置设定此学案的得分是所有学习尝试的平均分还是最高分。';
$string['inactiveoverridehelp'] = '* 学生未在合适的组里或者拥有合适的角色查看/尝试此学案';
$string['indicator:cognitivedepth'] = '学案活动的认知深度';
$string['indicator:cognitivedepth_help'] = '这个指标是基于学生在学案活动中所达到的认知深度。';
$string['indicator:cognitivedepthdef'] = '学案活动认知深度';
$string['indicator:cognitivedepthdef_help'] = '参与人在时间分片期间的活动-学案中体现的认知参与度（级别 = 未看，已看，提交，已看反馈，对反馈置评，看反馈后再提交）';
$string['indicator:socialbreadth'] = '学案活动社交度';
$string['indicator:socialbreadth_help'] = '这个指标是基于学生在学案活动中所达到的社交广度。';
$string['indicator:socialbreadthdef'] = '学案活动社交度';
$string['indicator:socialbreadthdef_help'] = '参与人在时间分片期间的活动-学案中体现的社交参与度（级别 = 未参与，单独参与，结伴参与）';
$string['invalidid'] = '没有传入课程模块ID或学案ID';
$string['invalidlessonid'] = '学案ID不正确';
$string['jumps_help'] = '每个题目页的答案或内容页的描述都有一个对应的跳转。跳转可以是相对的，比如当前页或下一页，也可以绝对指向学案中的任意一页。';
$string['leftduringtimed'] = '您在计时学习学案的中间离开了。<br/>请点击“继续”来重新开始。';
$string['leftduringtimednoretake'] = '您在计时学习学案的中间离开了。<br/>此学案不允许重学或继续。';
$string['leftduringtimedsession'] = '您已离开计时学习学案。';
$string['lesson:addinstance'] = '添加新学案';
$string['lesson:edit'] = '编辑学案活动';
$string['lesson:grade'] = '给学案问答题评分';
$string['lesson:manage'] = '管理学案活动';
$string['lesson:manageoverrides'] = '管理学案覆盖';
$string['lesson:view'] = '查看学案活动';
$string['lesson:viewreports'] = '查看学案报告';
$string['lessonclosed'] = '此学案已于 {$a} 关闭。';
$string['lessoncloses'] = '关闭学案';
$string['lessoncloseson'] = '学案于 {$a} 关闭';
$string['lessonformating'] = '学案显示格式';
$string['lessonmenu'] = '学案菜单';
$string['lessonname'] = '学案：{$a}';
$string['lessonnotready'] = '此学案还未开放。请与{$a}联系。';
$string['lessonnotready2'] = '此学案还未开放。';
$string['lessonopen'] = '本学案将于 {$a} 开放。';
$string['lessonopens'] = '开放学案';
$string['lessonpagelinkingbroken'] = '找不到第一个页面，学案的页面链接一定是损坏了。请与管理员联系。';
$string['lessonstats'] = '学案活动统计';
$string['maxgrade_help'] = '此设置设定此学案活动的最高分。如果设为0，此学案将不会出现在成绩页上。';
$string['maximumnumberofanswersbranches_help'] = '此设置设定在此学案活动中可以使用的选项的最大个数。如果只使用判断题，那么可以设为2。此设置随时可以改变，因为它只影响教师看到的界面，不影响数据。';
$string['maximumnumberofattempts_help'] = '此设置决定每个问题最多可以回答的次数。如果持续回答错误，当达到此最大值时，会显示学案的下一页。';
$string['mediafile_help'] = '可以在课文中上传一个多媒体文件，这样的话在学案的每一页都会显示一个有“点击显示”链接的显示板块。';
$string['messageprovider:graded_essay'] = '学案问答题评分通知';
$string['modattempts_help'] = '如果启用，学生可以再次从头学习此学案。';
$string['modulename'] = '学案';
$string['modulename_help'] = '学案模块让教师可以已有趣和灵活的方式发布内容和/或练习。教师可以用学案创建线性进度的内容页，也可以创建为学习者提供一系列的路径和选项的复杂教学方案。无论是那种情况，教师都可以选择提高参与度，通过引入各种类型的题目来确保学生的理解，可用的题目类型有多项选择、匹配和简答。根据学生的答题和教师对学案的设计，学生可能会进到下一页、回退到上一页或者进入另一条完全不同的学习路径。学案可以被评分，成绩将会进入到学生的成绩册。学案可以应用于：

* 对新课题的自学
* 用于模拟/辅助决策性的练习
* 根据对初始题目的答题来确定不同的分支，每个分支都有各自不同的题目集合';
$string['modulenameplural'] = '学案';
$string['noessayquestionsfound'] = '此学案中没有问答题。';
$string['nolessonattempts'] = '还没有人学习过此学案。';
$string['nolessonattemptsgroup'] = '{$a}组成员没有尝试学习过此学案。';
$string['nooverridedata'] = '您至少需要覆盖其中一项学案设置。';
$string['noretake'] = '您不可以重新学习此学案。';
$string['normal'] = '常规 - 安装学案路径';
$string['notenoughtimespent'] = '您在{$a->timespent}时间内完成了此学案，少于要求的时间{$a->timerequired}。您需要重新学习此学案。';
$string['notyetcompleted'] = '学案已经开始，还未完成。';
$string['numberofpagestoshow_help'] = '此设置设定一个学案中显示多少个页面。仅用于以随机顺序显示页面的学案（当“答题正确后动作”设置为“显示一个未看过的页面”或“显示一个未解答的页面”时）。如设为0，则所有页面都会被显示。';
$string['overrideusereventname'] = '{$a->lesson} - 覆盖';
$string['overview'] = '总览';
$string['overview_help'] = '一个学案由一系列的页面和可选的内容页构成。一个页面包含一些内容，且通常以一个问题结束。问题的每个答案都有一个对应的跳转。这个跳转可以是相对的，比如本页或下一页，也可以是绝对的，指向本学案中的任意一页。内容页面包含跳转到学案中其他页面的链接，例如一个目录页。';
$string['page-mod-lesson-edit'] = '编辑学案页';
$string['page-mod-lesson-view'] = '查看或预览学案页';
$string['page-mod-lesson-x'] = '任意学案页';
$string['passwordprotectedlesson'] = '学案{$a}受密码保护。';
$string['pluginadministration'] = '学案管理';
$string['pluginname'] = '学案';
$string['practice'] = '练习性学案';
$string['practice_help'] = '练习性学案不会出现在成绩册中。';
$string['prerequisiteisobsolete'] = '先修课程选项将要移除。请用访问限制来替代。';
$string['prerequisitelesson'] = '先修课程';
$string['privacy:metadata:grades'] = '每个学案的成绩记录';
$string['privacy:metadata:overrides'] = '每个学案的覆盖记录';
$string['privacy:metadata:overrides:available'] = '学案学习的时间';
$string['privacy:metadata:overrides:deadline'] = '学案完成截止时间。';
$string['privacy:metadata:overrides:password'] = '访问学案的密码';
$string['privacy:metadata:overrides:timelimit'] = '完成学案的时间限制，以秒为单位。';
$string['privacy:metadata:timer'] = '学案学习尝试的记录';
$string['privacy:metadata:userpref:lessonview'] = '编辑学案时的首选显示方式';
$string['progressbar_help'] = '如果启用，在学案页面底部会显示一个进度条，以说明完成的百分比。';
$string['progressbarteacherwarning2'] = '因为您可以编辑此学案，所以您看不到进度条';
$string['progresscompleted'] = '您已完成此学案的 {$a}%';
$string['retakesallowed_help'] = '如果启用，学生可以多次尝试此学案。';
$string['reverttodefaults'] = '回退到学案默认值';
$string['reviewlesson'] = '复查学案';
$string['savechangesandeol'] = '保存所有修改并跳转到学案的末尾。';
$string['search:activity'] = '学案-活动信息';
$string['slideshow_help'] = '如果启用，此学案将以固定宽和高的幻灯片的形式显示。';
$string['startlesson'] = '开始学案学习';
$string['studentoneminwarning'] = '警告：您还有不到1分钟来完成此学案。';
$string['studentoutoftimeforreview'] = '警告：您复查学案用时已超时。';
$string['teacherjumpwarning'] = '此学案使用了{$a->cluster}跳转或{$a->unseen}跳转。将使用“下一页”跳转模式替代。请以学生身份登录来测试这些跳转。';
$string['timelimit_help'] = '如果启用了，就会在学案学习开始时显示一个关于时间限制的警告，并显示一个倒计时计时器。超时后作出的答案都不会计分。';
$string['timelimitwarning'] = '您还有 {$a} 来完成学案';
$string['timespenterror'] = '在本学案中至少花费了{$a}分钟';
$string['usepassword'] = '有密码保护的学案';
$string['usepassword_help'] = '如果启用，需要密码来访问学案。';
$string['usersnone'] = '还没有学生进入该学案';
$string['youhaveseen'] = '您已经阅读了本学案的多个页面。<br />想从上次结束的页面开始吗？';

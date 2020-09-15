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
 * @subpackage forum
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actionsforpost'] = '发帖操作';
$string['activityoverview'] = '有新帖子';
$string['addanewdiscussion'] = '添加新话题';
$string['addanewquestion'] = '新提问';
$string['addanewtopic'] = '添加新话题';
$string['alldiscussions'] = '所有话题';
$string['allusers'] = '所有用户';
$string['attachmentname'] = '附件{$a}';
$string['authorreplyingprivatelytoauthor'] = '{$a->respondant} 私下回复 {$a->author}';
$string['authorreplyingtoauthor'] = '{$a->respondant} 回复 {$a->author}';
$string['blockafter'] = '被阻塞前帖数阈值';
$string['blockafter_help'] = '此项设置决定用户在指定的时间内最多允许发几个帖子。有mod/forum:postwithoutthrottling权限的用户不受此限。';
$string['blockperiod'] = '阻塞统计的时间段';
$string['blockperiod_help'] = '学生如果在指定的时间内发了达到指定数量的帖子，会被阻止继续发帖。有mod/forum:postwithoutthrottling权限的用户不受此限。';
$string['cachedef_forum_is_tracked'] = '用户的论坛跟踪状态';
$string['calendardue'] = '{$a}已到期';
$string['cancelreply'] = '取消回复';
$string['cannotadddiscussionall'] = '您没有权限面向所有参与者添加新话题。';
$string['cannotadddiscussiongroup'] = '因为您不是任何一个组的成员，所以您无法创建话题。';
$string['cannotaddteacherforumto'] = '不能在课程的第0节添加已转换的教师讨论区';
$string['cannotcreatediscussion'] = '不能建立新话题';
$string['cannotcreateinstanceforteacher'] = '无法为教师讨论区创建新的课程实例';
$string['cannotdeletediscussioninsinglediscussion'] = '您无法在单一话题讨论中删除第一个帖子';
$string['cannotexportforum'] = '您不能导出此讨论区';
$string['cannotfavourite'] = '抱歉，您没有权限标星讨论话题。';
$string['cannotfindorcreateforum'] = '无法找到或创建该网站的主新闻通告讨论区';
$string['cannotmovefromsingleforum'] = '不能从单一话题讨论区移动话题';
$string['cannotmovetosingleforum'] = '不能将话题移动到单一话题讨论区';
$string['cannotpindiscussions'] = '抱歉，您没有权限置顶话题。';
$string['cannotpurgecachedrss'] = '无法清理目标或源讨论区的RSS种子缓存 - 检查你的文件权限permissionsforums';
$string['cannotsplit'] = '此讨论区的话题不能被分立';
$string['cannotsubscribe'] = '抱歉，您必须是组成员才能订阅。';
$string['cannottrack'] = '无法停止对该讨论区的追踪';
$string['cannotviewpostyet'] = '在这个讨论中您不能阅读别的同学的提问因为您没有权限';
$string['cannotviewusersposts'] = '没有您能查看的该用户发表的帖子。';
$string['cleanreadtime'] = '将旧帖子标记为阅读时间';
$string['clicktofavourite'] = '您还没有标星此话题。点击标星。';
$string['clicktolockdiscussion'] = '点击锁定此话题';
$string['clicktosubscribe'] = '您没有订阅这一话题。点击订阅。';
$string['clicktounfavourite'] = '您已标星此话题。点击取消标星。';
$string['clicktounlockdiscussion'] = '点击解锁此话题';
$string['clicktounsubscribe'] = '你已订阅该话题，点击退订。';
$string['close'] = '关闭';
$string['configcleanreadtime'] = '在一天的几点钟清理“read”表中的旧帖子。';
$string['configdigestmailtime'] = '系统每天会给那些希望接收文摘邮件的人发送文摘。这个选项控制着每日发送文摘邮件的时间（下一个在此时间后运行的cron程序将会发出这些邮件）。';
$string['configdisplaymode'] = '讨论的默认显示模式（如未设置）。';
$string['configenabletimedposts'] = '如果您想在讨论区发帖时允许设置显示时段，将此设置为“是”';
$string['configlongpost'] = '超过该长度（字符个数，不含 HTML标记）的帖子被认为是长帖子。在网站首页、社交格式的课程页或用户资料显示的帖子会被精简到一个自然的中断位置，其长度在 forum_shortpost 和 forum_longpost 之间。';
$string['configmanydiscussions'] = '每页显示的讨论话题数';
$string['configmaxattachments'] = '每个帖子默认允许的最大附件数。';
$string['configmaxbytes'] = '所有讨论区的附件的最大尺寸的默认大小（受课程设置和本地配置的限制）';
$string['configrssarticlesdefault'] = '若启用RSS，请设置默认的文章篇数(不分话题和帖子)';
$string['configsubscriptiontype'] = '订阅模式的默认设置。';
$string['configtrackingtype'] = '阅读跟踪信息的默认设置。';
$string['configtrackreadposts'] = '如果希望跟踪每一名用户的已读/未读信息则设定为“是”。';
$string['confirmsubscribediscussion'] = '你确定要订阅\'{$a->forum}讨论区的\'{$a->discussion}\' 话题吗？';
$string['confirmunsubscribe'] = '您确定要退订讨论区“{$a}”吗？';
$string['confirmunsubscribediscussion'] = '你确定要退订讨论区\'{$a->forum}的话题\'{$a->discussion}\'吗？';
$string['created'] = '已创建';
$string['cutoffdate'] = '提交截止日期';
$string['cutoffdate_help'] = '如果设置，讨论区在此日期后不再接受发帖。';
$string['cutoffdatevalidation'] = '提交截止日期不能早于到期日。';
$string['deleteduser'] = '已删除用户';
$string['digestmailheader'] = '这是来自 {$a->sitename} 网站讨论区的每日新帖摘要。如要修改您的讨论区邮件默认偏好设置，请访问 {$a->userprefs}。';
$string['digestmailprefs'] = '您的个人资料';
$string['discussionlistsortbydiscussionasc'] = '按话题升序排序';
$string['discussionlistsortbydiscussiondesc'] = '按话题降序排序';
$string['discussionlistsortbygroupasc'] = '按组升序排序';
$string['discussionlistsortbygroupdesc'] = '按组降序排序';
$string['discussionlistsortbyrepliesasc'] = '按回帖数升序排序';
$string['discussionlistsortbyrepliesdesc'] = '按回帖数降序排序';
$string['discussionlistsortbystarterasc'] = '按话题发起人姓名升序排序';
$string['discussionlistsortbystarterdesc'] = '按话题发起人姓名降序排序';
$string['discussionpinned'] = '置顶';
$string['discussionsplit'] = '话题已分立';
$string['discussionstartedby'] = '由{$a}发起的话题';
$string['discussionsubscribed'] = '您现在订阅了该话题。';
$string['discussionsubscribestart'] = '该话题有新帖子时，请通知我。';
$string['discussionsubscribestop'] = '该话题有新帖子时，不要通知我。';
$string['discussionsubscription'] = '订阅话题';
$string['discussionsubscription_help'] = '订阅一个话题，即表示在这个话题上有新帖子时，你将会收到email通知。';
$string['discussionunsubscribed'] = '您现在已退订该话题。';
$string['discussthistopic'] = '讨论话题';
$string['discusstopicname'] = '讨论话题：{$a}';
$string['displayend'] = '显示结束时间';
$string['displayend_help'] = '此设置确定讨论区的帖子在一个特定时间后是否会被隐藏。注意，管理员总能查看帖子。';
$string['displayenddate'] = '显示截止时间：{$a}。';
$string['displaystart'] = '显示开始时间';
$string['displaystart_help'] = '此设置确定讨论区的帖子在一个特定时间后是否会被隐藏。注意，管理员总能查看帖子。';
$string['displaystartdate'] = '可视开始于：{$a}。';
$string['duedate'] = '到期日';
$string['duedate_help'] = '这是论坛的到期日。虽然在日历上会显示此论坛的到期日，但此日期后仍然可以在论坛上发帖。可以设置论坛截止日来阻止特定日期后在论坛上发帖。';
$string['duedatetodisplayincalendar'] = '在日历上显示的到期日';
$string['errorcannotlock'] = '您没有权限锁定话题。';
$string['eventassessableuploaded'] = '有些内容已经发到讨论区';
$string['eventuserreportviewed'] = '查看个人成绩单';
$string['existingsubscribers'] = '当前订阅者';
$string['export'] = '导出';
$string['exportattachmentname'] = '导出附件到文件夹';
$string['exportdiscussion'] = '导出整个讨论区话题到文件夹';
$string['exporthumandates'] = '可读格式日期';
$string['exporthumandates_help'] = '是否将日期导出为人可读的格式或者使用时间戳格式（一个数字序列）。';
$string['exportoptions'] = '导出参数';
$string['exportstriphtml'] = '删除HTML标签';
$string['exportstriphtml_help'] = '是否删除HTML标签，例如将p和br标签从帖子正文中删除。';
$string['favourites'] = '已标星';
$string['firstpost'] = '首个帖子';
$string['forcesubscribed_help'] = '该讨论区已被设置为无法退订。';
$string['forum:canoverridecutoff'] = '在论坛的截止日期后发帖';
$string['forum:canoverridediscussionlock'] = '回复已锁住的话题';
$string['forum:canposttomygroups'] = '在您所属的所有组中发帖';
$string['forum:cantogglefavourite'] = '标星话题';
$string['forum:exportforum'] = '到时讨论区';
$string['forum:grade'] = '给讨论区评分';
$string['forum:postprivatereply'] = '私下回复帖子';
$string['forum:readprivatereplies'] = '查看私下回帖';
$string['forum:splitdiscussions'] = '分立话题';
$string['forumbodydeleted'] = '此帖子的内容已删除，不再可见。';
$string['forumgrader'] = '讨论区评分人';
$string['forumsubjectdeleted'] = '此帖子已被移除';
$string['forumtype_help'] = '有5种讨论区类型： 

* 单一简单话题 - 一个简单的话题，每个人都可以回复（无法与独立小组一起使用）
* 每人发布一个话题 - 每名学生都可以发布一个（也只能一个）新话题，所有人都可以回复。
* 提问与回答讨论区 - 学生必须先发表他的见解，才能看到别人的帖子。 
* 博客形式的标准讨论区 - 一个开放的讨论区，任何人在任何时间都可以发起一个新话题。所有话题都显示在一个页面中。每个话题都有一个“讨论此话题”的链接 
* 一般用途的标准讨论区 - 一个开放的讨论区，任何人在任何时间都可以发起一个新话题。';
$string['grade_forum_header'] = '给整个讨论区评价';
$string['grade_forum_name'] = '整个讨论区';
$string['grade_forum_title'] = '评价';
$string['grade_rating_name'] = '打分';
$string['graded'] = '已评分';
$string['gradeforrating'] = '评价得分{$a->str_long_grade}';
$string['gradeforwholeforum'] = '讨论区得分{$a->str_long_grade}';
$string['gradeforwholeforumhidden'] = '隐藏讨论区得分';
$string['gradeitem:forum'] = '讨论区';
$string['gradeitemnameforrating'] = '{$a->name}的考评得分';
$string['gradeitemnameforwholeforum'] = '{$a->name}的全讨论区得分';
$string['grades:gradesavedfor'] = '{$a->fullname}的得分已保存';
$string['grades:gradesavefailed'] = '无法保存{$a->fullname}的得分：{$a->error}';
$string['hidegraderpanel'] = '隐藏评分板';
$string['hideusersearch'] = '隐藏用户搜索';
$string['indicator:cognitivedepth'] = '讨论区认知度';
$string['indicator:cognitivedepthdef'] = '讨论区认知度';
$string['indicator:cognitivedepthdef_help'] = '参与人在时间分片期间的活动-讨论区中体现的认知参与度（级别 = 未看，已看，提交，已看反馈，对反馈置评，看反馈后再提交）';
$string['indicator:socialbreadth'] = '讨论区社交度';
$string['indicator:socialbreadth_help'] = '这个指标是基于学生在讨论区活动中所达到的社交广度。';
$string['indicator:socialbreadthdef'] = '讨论区社交度';
$string['indicator:socialbreadthdef_help'] = '参与人在此分析时间分片期间的活动-讨论区中体现的社交参与度（级别 = 未参与，单独参与，结伴参与）';
$string['inreplyto'] = '回复给{$a}';
$string['introblog'] = '本讨论区的帖子从课程用户的博客自动拷贝过来，因为那些博客文章已无法访问。';
$string['invaliddiscussionid'] = '话题ID不正确或不存在';
$string['lastpost'] = '最新发帖';
$string['lockdiscussionafter_help'] = '自最后一次回帖过后的设定时间点自动锁定话题。 拥有回复已锁定话题权限的用户可以通过回帖来解锁话题。';
$string['locked'] = '已锁定';
$string['mailnow'] = '立刻发送新帖通知邮件';
$string['markasread'] = '标记为已读';
$string['markasreadonnotification'] = '何时发送新帖通知';
$string['maxattachmentsize'] = '附件最大大小';
$string['maxattachmentsize_help'] = '此参数设置讨论区帖子附件文件的最大大小。';
$string['maxtimehaspassed'] = '很抱歉，编辑该帖的最长时限({$a})已过！';
$string['messageinboundattachmentdisallowed'] = '无法提交您的回复，因为它包含了附件，而讨论区不允许有附件。';
$string['messageinboundfilecountexceeded'] = '无法提交您的回复，因为它包含的附件数量多于该讨论区允许的最大数量({$a->forum->maxattachments})';
$string['messageinboundfilesizeexceeded'] = '无法提交您的回复，因为全部附件的大小({$a->filesize})超过了讨论区允许的最大字节数({$a->maxbytes})。';
$string['messageinboundforumhidden'] = '无法提交您的回复，因为该讨论区目前无法使用。';
$string['messageinboundnopostforum'] = '无法提交您的回复，因为您在这个{$a->forum->name}讨论区上没有权限提交帖子。';
$string['messageinboundthresholdhit'] = '无法提交您的回复，因为您的帖子数量已经超过讨论区设定的最大限制。';
$string['modenestedv2'] = '已实验性的嵌套方式显示回帖';
$string['modethreaded'] = '按线索显示回帖';
$string['modulename_help'] = '在讨论区模块用户可以进行异步的讨论，也就是说讨论是发生在一段很长的时间中。 

有多种类型的讨论区可选，例如任何人在任何时间都可以发帖的标准讨论区；每人只能发布一个话题的讨论区；要先回答然后才能看到他人帖子的答题讨论区。教师可以允许帖子带附件，图像附件会显示在帖子上。

参与人可以订阅讨论区以接收新帖通知。教师可以设置订阅为可选，强制或自动，或者完全禁止订阅。如果需要，可以限制学生在一个时间段内最多只能发表给定数量的帖子；这可以防止个体控制讨论话题。

教师和学生（互评）可以对讨论区的帖子打分。评分的结果可以汇总成个人在讨论区的最终分数，然后记录到成绩册中。

讨论区有许多用途，比如：

* 作为社交空间，让学生互相认识。 
* 作为课程公告栏（使用新闻讨论区并强制订阅）。
* 用来讨论课程内容和阅读材料。
* 用来继续课堂上提出的议题。
* 用作只有教师之间的讨论(使用隐藏的讨论区)。
* 教授为学生提供建议的帮助中心。
* 作为一对一的个别辅导区，便于师生进行单独的沟通 （在讨论区中使用独立小组，且设置为每人一组）。
* 扩展的活动，例如"脑筋急转弯"，让学生提出难题和各种解决方案。';
$string['movethisdiscussionlabel'] = '将当前话题移动到指定讨论区';
$string['movethisdiscussionto'] = '将此话题移至...';
$string['namenews_help'] = '课程新闻通告讨论区是一个特殊的公告讨论区，在创建课程时自动创建。一门课程只能有一个通告讨论区。只有教师和管理员才能发布通告。 “最新通告”栏将显示最近的通告。';
$string['namesocial'] = '社交讨论区';
$string['nextuser'] = '下一个用户';
$string['noguestpost'] = '抱歉，访客不允许发帖';
$string['nomorepostscontaining'] = '未找到包含“{$a}”的帖子';
$string['nopostforum'] = '抱歉，您不能在此讨论区发帖';
$string['nopostsmadebyyou'] = '您还没发过帖子';
$string['notgraded'] = '未评价';
$string['nothingnew'] = '{$a} 中没有新内容';
$string['notingroup'] = '抱歉, 只有组成员才能浏览这个讨论区。';
$string['notinstalled'] = '讨论区模块未安装';
$string['notlocked'] = '锁定';
$string['nousersmatch'] = '按所给条件未找到用户';
$string['nowallunsubscribed'] = '已退订 {$a} 中的所有讨论区。';
$string['nownotsubscribed'] = '{$a->name}将不再收到“{$a->forum}”的新帖通知';
$string['nownottracking'] = '{$a->name} 已不再跟踪“{$a->forum}”。';
$string['nowsubscribed'] = '“{$a->forum}”有新帖时会通知{$a->name}';
$string['numberofreplies'] = '回帖数量：{$a}';
$string['page-mod-forum-discuss'] = '讨论区模块讨论线索页';
$string['permanentlinktoparentpost'] = '指向该帖的父帖的永久链接';
$string['permanentlinktopost'] = '指向此贴的永久链接';
$string['pindiscussion'] = '置顶此话题';
$string['postaddedsuccess'] = '您的帖子已成功发表';
$string['postaddedtimeleft'] = '如果您想修改的话，{$a}时间内您可以继续编辑它。';
$string['postbymailsuccess'] = '您的回帖"{$a->subject}"已成功发表："{$a->discussionurl}"';
$string['postbymailsuccess_html'] = '您的回帖<a href="{$a->discussionurl}">{$a->subject}</a>已成功发表。';
$string['postsfrom'] = '讨论区';
$string['poststo'] = '发到';
$string['posttomygroups'] = '发布副本到所有组';
$string['previoususer'] = '前面的用户';
$string['privacy:digesttypenone'] = '我们不保存此讨论区的讨论区摘要偏好相关的任何数据。';
$string['privacy:digesttypepreference'] = '您选择了接收下列讨论区摘要类型："{$a->type}"。';
$string['privacy:discussionsubscriptionpreference'] = '您选择了下列话题订阅偏好："{$a->preference}"';
$string['privacy:metadata:core_rating'] = '讨论区使用了打分子系统来实现给帖子打分。';
$string['privacy:metadata:core_tag'] = '讨论区使用了标签子系统来实现给帖子打标签。';
$string['privacy:metadata:forum_digests'] = '每一个讨论区的摘要偏好的信息';
$string['privacy:metadata:forum_digests:forum'] = '订阅的讨论区。';
$string['privacy:metadata:forum_digests:maildigest'] = '摘要偏好。';
$string['privacy:metadata:forum_digests:userid'] = '摘要偏好的用户ID。';
$string['privacy:metadata:forum_discussion_subs'] = '单个讨论区的订阅信息';
$string['privacy:metadata:forum_discussion_subs:discussionid'] = '已订阅的话题的ID。';
$string['privacy:metadata:forum_discussion_subs:preference'] = '订阅开始时间。';
$string['privacy:metadata:forum_discussion_subs:userid'] = '订阅话题的用户的ID。';
$string['privacy:metadata:forum_discussions'] = '用户创建的具体讨论区话题的信息。';
$string['privacy:metadata:forum_discussions:assessed'] = 'TODOD - 此字段存储了什么';
$string['privacy:metadata:forum_discussions:name'] = '话题名称，由作者选择。';
$string['privacy:metadata:forum_discussions:timemodified'] = '话题最近更改时间。';
$string['privacy:metadata:forum_discussions:userid'] = '创建话题的用户的ID';
$string['privacy:metadata:forum_discussions:usermodified'] = '最近一次用某种方式更改话题的用户的ID';
$string['privacy:metadata:forum_grades'] = '讨论区评分数据';
$string['privacy:metadata:forum_grades:forum'] = '被评价的讨论区';
$string['privacy:metadata:forum_grades:grade'] = '得分';
$string['privacy:metadata:forum_grades:userid'] = '被评价的用户';
$string['privacy:metadata:forum_posts'] = '每一个讨论区的摘要偏好的信息。';
$string['privacy:metadata:forum_posts:created'] = '帖子创建的时间。';
$string['privacy:metadata:forum_posts:discussion'] = '此贴所在的话题。';
$string['privacy:metadata:forum_posts:message'] = '帖子的正文。';
$string['privacy:metadata:forum_posts:modified'] = '帖子最近修改时间。';
$string['privacy:metadata:forum_posts:parent'] = '回帖对应的父帖。';
$string['privacy:metadata:forum_posts:privatereplyto'] = '此回帖送达的用户的ID。';
$string['privacy:metadata:forum_posts:subject'] = '帖子的标题。';
$string['privacy:metadata:forum_posts:totalscore'] = '帖子的正文。';
$string['privacy:metadata:forum_posts:userid'] = '帖子的作者的用户ID';
$string['privacy:metadata:forum_queue'] = '以摘要形式发邮件的帖子的短期日志';
$string['privacy:metadata:forum_queue:discussionid'] = '讨论区话题ID';
$string['privacy:metadata:forum_queue:postid'] = '讨论区帖子ID';
$string['privacy:metadata:forum_queue:timemodified'] = '原帖的修改时间';
$string['privacy:metadata:forum_queue:userid'] = '此贴需要通知的用户';
$string['privacy:metadata:forum_read'] = '此用户已经阅读的帖子的信息。';
$string['privacy:metadata:forum_read:discussionid'] = '此贴所在的话题。';
$string['privacy:metadata:forum_read:firstread'] = '此贴的首次阅读时间。';
$string['privacy:metadata:forum_read:lastread'] = '此贴的最近阅读时间。';
$string['privacy:metadata:forum_read:postid'] = '已读的帖子。';
$string['privacy:metadata:forum_read:userid'] = '此记录相关的用户的用户ID。';
$string['privacy:metadata:forum_subscriptions'] = '用户已经订阅的讨论区的信息。';
$string['privacy:metadata:forum_subscriptions:forum'] = '已订阅的讨论区。';
$string['privacy:metadata:forum_subscriptions:userid'] = '此讨论区订阅相关的用户的ID。';
$string['privacy:metadata:forum_track_prefs'] = '用户选择进行阅读跟踪的讨论区的信息。';
$string['privacy:metadata:forum_track_prefs:forumid'] = '已启用阅读跟踪的讨论区。';
$string['privacy:metadata:forum_track_prefs:userid'] = '此讨论区跟踪偏好相关的用户的ID。';
$string['privacy:metadata:preference:autosubscribe'] = '是否订阅在其中回帖的话题。';
$string['privacy:metadata:preference:forum_discussionlistsortorder'] = '话题的排序偏好';
$string['privacy:metadata:preference:maildigest'] = '全站范围的摘要邮件偏好';
$string['privacy:metadata:preference:markasreadonnotification'] = '当接收帖子正文时是否标记讨论区中的帖子为已读。';
$string['privacy:metadata:preference:trackforums'] = '是否启用阅读跟踪。';
$string['privacy:postwasread'] = '此贴在{$a->firstread}时被首次阅读，最近在{$a->lastread}时被阅读';
$string['privacy:readtrackingdisabled'] = '您选择在此讨论区看帖子时不进行阅读跟踪。';
$string['privacy:request:delete:discussion:name'] = '由作者请求删除';
$string['privacy:request:delete:post:message'] = '此贴的内容已被作者删除。';
$string['privacy:request:delete:post:subject'] = '因作者请求而删除';
$string['privacy:subscribedtoforum'] = '您已订阅此讨论区';
$string['privatereply_help'] = '私下回复只能被原帖的作者看到，和被其他有权限查看私帖的用户看到。';
$string['prune'] = '分立';
$string['prunedpost'] = '从该帖子创建了新的话题';
$string['pruneheading'] = '分立此话题并将此帖移到一个新话题中';
$string['qandaforum'] = '问题和解答讨论区';
$string['qandanotify'] = '这是一个提问和解答讨论区。为了能看到其他人的回复，您首先需要发表您的回答';
$string['replyauthorself'] = '{$a} （您）';
$string['replyingtoauthor'] = '回复到 {$a}...';
$string['replytopostbyemail'] = '您可以通过email回复这个帖子';
$string['resetdigests'] = '删除单一用户的帖子摘要';
$string['resetforums'] = '删除讨论区';
$string['resettrackprefs'] = '删除讨论区中的所有跟踪偏好';
$string['rssarticles_help'] = '这个选项允许您设置在RSS种子中包含的文章数目（包括话题和帖子）。通常可接受的数字是5至20。';
$string['rsstype_help'] = '这个选项允许您开启这个讨论区的RSS种子，您可以选择在种子中包括话题或帖子。';
$string['rsstypedefault'] = 'RSS种子类型';
$string['searchtags'] = '被标记为';
$string['searchusers'] = '搜索用户';
$string['searchwords'] = '这些词可以在帖子的任何位置出现';
$string['sendstudentnotificationsdefault'] = '“通知学生”的默认设置';
$string['sendstudentnotificationsdefault_help'] = '在评分表中“通知学生”勾选项的默认值。';
$string['sendstudentnotificationsno'] = '不';
$string['sendstudentnotificationsyes'] = '是的，发送通知给学生';
$string['settings'] = '设置';
$string['showgraderpanel'] = '显示评分板';
$string['showingcountoftotaldiscussions'] = '话题清单，显示{$a->total}中的{$a->count} 条话题';
$string['showmoreusers'] = '显示更多用户';
$string['showpreviousrepliescount'] = '显示先前回帖（{$a}）';
$string['showusersearch'] = '显示用户搜索';
$string['singleforum'] = '单一话题';
$string['starredonly'] = '只搜索标星的话题';
$string['subscribeenrolledonly'] = '抱歉，只有已选课用户才能订阅讨论区新帖通知。';
$string['subscription_help'] = '如果您订阅了一个讨论区，那意味着您将通过email收到讨论区里每个帖子的副本。通常您可以自己选择是否订阅。但是，有时订阅是强制性的，使每个人都必须收到帖子的email副本。';
$string['subscriptionmode_help'] = '当用户订阅了讨论区时，他们会通过email收到帖子的副本。 有四种订阅模式选项：

* 可选订阅 - 用户可以选择是否订阅
* 强制订阅 - 每个人都被设置订阅，而且不能退订
* 自动订阅 - 每个人最初都被设置订阅，但是随时可以选择是否退订
* 禁止订阅 - 不允许订阅';
$string['thisforumhasduedate'] = '此讨论区发帖的到期日为{$a}。';
$string['thisforumisdue'] = '此讨论区发帖的到期日为{$a}。';
$string['thisforumisthrottled'] = '这个讨论区有规定时间内发帖数的限制，它被设置为在{$a->blockperiod} 内最多发 {$a->blockafter} 个帖子。';
$string['timed'] = '定时的';
$string['timeddiscussion'] = '定时的话题';
$string['togglediscussionmenu'] = '触发话题菜单';
$string['togglefullscreen'] = '触发全屏';
$string['togglesettingsdrawer'] = '触发设置抽屉';
$string['trackingtype_help'] = '阅读跟踪让参与者易于检查哪些帖子他们已经看过，新帖子将高亮显示。如果设为可选，参与者可以通过操作菜单里的链接或者在管理板块里打开或关闭跟踪。（用户必须同时打开他们的讨论区跟踪偏好。）如果网站的系统管理的“允许强制阅读跟踪”选项已启用，则会再多一个选项——强制，这个选项意味着无论用户的讨论区跟踪偏好如何设置，跟踪总是打开的。';
$string['unpindiscussion'] = '取消置顶此话题';
$string['unreadpost'] = '未读帖子';
$string['unreadpostsnumber'] = '{$a} 条未读帖子';
$string['unsubscribe'] = '退订此讨论区';
$string['unsubscribeall'] = '退订所有讨论区';
$string['unsubscribeallconfirm'] = '您当前订阅了讨论区{$a}，和话题{$a->discussions}。您确认要退订所有讨论区和话题，并关闭话题的自动订阅吗？';
$string['unsubscribeallconfirmdiscussions'] = '你当前订阅了话题{$a->discussions}。你确认退订所有话题，并关闭话题的自动订阅吗？';
$string['unsubscribeallconfirmforums'] = '你当前已经订阅论坛{$a->forums}。你确认退订所有论坛，并关闭话题的自动订阅吗？';
$string['unsubscribediscussion'] = '退订此话题';
$string['unsubscribediscussionlink'] = '退订话题：{$a}';
$string['unsubscribelink'] = '退订讨论区：{$a}';
$string['useexperimentalui'] = '使用实验性的嵌套话题视图';
$string['usernavigation'] = '用户导航';
$string['viewconversation'] = '查看话题';
$string['viewgrades'] = '查看评价';
$string['viewparentpost'] = '查看父帖';
$string['warnafter'] = '发帖的警告阈值';
$string['warnafter_help'] = '当学生在一段时间内达到允许的最大发帖数时，会被警告。此项设置设定了发多少个帖子后会被警告。有mod/forum:postwithoutthrottling权限的用户不受此限。';
$string['yournewquestion'] = '您的新提问';
$string['yournewtopic'] = '您的新话题';

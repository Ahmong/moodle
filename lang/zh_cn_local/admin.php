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
 * @subpackage admin
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configallowcategorythemes'] = '如果启用该功能，将可以在分类中使用主题。同时这将影响到所有的子分类和课程，除非子分类和课程中都设置了自己的主题。警告：启用分类主题可能影响系统性能！';
$string['configenableanalytics'] = '分析模型，如“学生有掉课风险”或者“临近活动期限”，可以生成预测、发送洞察通知和提供更多的操作（如发消息给用户）。';
$string['configlockrequestcategory'] = '如果勾选，有权限在系统级别申请课程的用户将不能在申请新课程表格中选择课程分类。如果只想限制用户选择某一课程分类的课程，可在该课程分类的上下文中设置限制。';
$string['confignotifyloginthreshold'] = '如果启用登录失败时发送通知，一个用户或一个IP地址发生多少次登录错误时发送通知？';
$string['configsectionmisc'] = '其他';
$string['configsitemaxcategorydepthhelp'] = '这个功能指定了当显示分类或组合列表的时候，子分类扩展的最大深度。更深层级别的分类会显示为链接，用户可以通过AJAX请求来展开它们。';
$string['configstripalltitletags'] = '取消本设置将允许在活动和资源名称中使用HTML标签。';
$string['configvisiblecourses'] = '是否显示在隐藏的课程分类中的课程';
$string['contextlocking_desc'] = '此设置为指定的分类、课程、活动或版块设置只读访问权限。';
$string['devlibdirpresent'] = '含有开发库的目录，尤其是<em>/vendor</em>和<em>/node_modules</em>，不应出现在公共站点上。有关详细信息，请参阅<a href="{$a-> moreinfourl}“>安全总览报告</a>。';
$string['enableanalytics'] = '分析';
$string['enablecourserequests'] = '可以申请课程';
$string['filters'] = '过滤器';
$string['filtersettings'] = '管理过滤器';
$string['frontpagefilters'] = '首页过滤器';
$string['linkadmincategories'] = '链接管理分类';
$string['lockrequestcategory'] = '禁止选择分类';
$string['misc'] = '其他';
$string['modchooserdefault'] = '默认的活动选择器';
$string['myprofile'] = '默认个人资料页';
$string['navshowmycoursecategories'] = '显示我的课程分类';
$string['navsortmycourseshiddenlast'] = '将我的隐藏课程排到最后';
$string['navsortmycourseshiddenlast_help'] = '如果启用，所有隐藏课程将会列在可见课程的后面（只对能看到隐藏课程的用户有效）。否则，所有课程都会被忽略其可见性，只根据“排序我的课程”参数而统一排序列出。';
$string['notifyloginfailures'] = '发送登录失败的Email给';
$string['notifyloginthreshold'] = '发送邮件消息的阀值';
$string['profilecreatenewcategory'] = '创建一个新的分类';
$string['profiledefaultcategory'] = '其他字段';
$string['searchenablecategories'] = '在不同的分类中显示搜索结果';
$string['searchenablecategories_desc'] = '如已启用，搜索结果将显示在不同的分类中。';
$string['settingdependenton'] = '根据参数‘<strong>{$a}</strong>’的值，此参数可能会被隐藏。';
$string['sitepolicyhandler_desc'] = '这里决定了如何管理策略和用户协议。默认（核心）处理器可设置网站策略URL和针对访客的网站策略URL。策略处理器可以设置站点、隐私和其他策略。它可启用需要被阅读的用户协议，并在必要时给出适用于未成年人的协议。';
$string['stripalltitletags'] = '删除所有活动名称中的HTML标签';
$string['task_logmode'] = '何时写日志';
$string['taskanalyticscleanup'] = '清理分析';
$string['taskplagiarismcron'] = '反抄袭插件的后台处理';
$string['testoutgoingmailconf'] = '测试邮件发送配置';
$string['testoutgoingmailconf_toemail'] = '收信邮箱地址';
$string['testoutgoingmaildetail'] = '提示：测试前请先保存配置。<br/>{$a}';
$string['toolsmanage'] = '设置管理工具';
$string['userfiltersdefault'] = '默认用户过滤器';
$string['userfiltersdefault_desc'] = '选择过滤器，这些过滤器会显示在“浏览用户”页面和“批量处理”页面。选择时按下‘Ctrl’键（在MacOS上请使用‘cmd’键）可选择多项。在那两个页面上，点击“显示更多…”能够显示在此没有选择的其他过滤器。';
$string['usermanagement'] = '用户管理';

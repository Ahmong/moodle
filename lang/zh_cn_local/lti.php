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
 * @subpackage lti
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['baseurl'] = '基础 URL/工具 注册名称';
$string['clientidadmin_help'] = '客户端ID是用于标识工具的唯一值。它是为每个使用LTI 1.3中引入的JWT安全凭证的工具自动创建的，并且应该是传递给工具提供者的详细信息的一部分，以便他们能够在他们的末端配置连接。';
$string['embed_no_blocks'] = '嵌入，不使用板块';
$string['indicator:cognitivedepthdef_help'] = '参与人在时间分片期间的活动-外部工具中体现的认知参与度（级别 = 未看，已看，提交，已看反馈）';
$string['indicator:socialbreadth'] = 'LTI活动社交度';
$string['indicator:socialbreadth_help'] = '这个指标是基于学生在LTI活动中所达到的社交广度。';
$string['indicator:socialbreadthdef'] = 'LTI活动社交度';
$string['indicator:socialbreadthdef_help'] = '参与人在时间分片期间的活动-外部工具中体现的社交参与度（级别 = 未参与，单独参与，结伴参与）';
$string['launchinpopup_help'] = '启动容器将影响从课程启动时工具的显示。一些启动容器为工具提供了更多的屏幕空间，而另一些则提供了与Moodle环境更集成的感觉。

** *默认** -使用工具配置指定的启动容器。
** *嵌入** -该工具显示在现有的Moodle窗口中，其方式与大多数其他活动类型类似。
** *嵌入，没有版块** -该工具显示在现有的Moodle窗口，只有导航控件在页面的顶部。
** *新窗口** -该工具将在一个新窗口中打开，占据所有可用空间。根据浏览器的不同，它将在一个新标签页或弹出窗口中打开。浏览器可能会阻止新窗口打开。';
$string['ltiversion_help'] = '用于对消息和服务请求进行签名的LTI版本:LTI 1.0/1.1和LTI 2.0使用OAuth 1.0A安全凭证；LTI 1.3.0使用JWTs。';
$string['noprofileservice'] = '没有找到安全凭证服务';

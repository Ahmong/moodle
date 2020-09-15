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
 * @package    tool
 * @subpackage dataprivacy
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['category_help'] = '数据注册表中的类别描述了数据的类型。可以添加新类别，或者如果选择继承，则应用来自上级场景的数据类别。场景是(从低到高)：板块>活动模块>课程>课程类别>网站。';
$string['categorydefault_help'] = '默认类别是应用于任何新实例的数据类别。如果选择继承，则应用来自上级场景的数据类别。场景是(从低到高):板块>活动模块>课程>课程类别>用户>网站。';
$string['contactdataprotectionofficer_desc'] = '如果启用，用户将能够联系私隐官，并通过其个人资料页面上的链接提出数据请求。';
$string['contextlevelname80'] = '板块';
$string['dataregistryinfo'] = '数据注册表允许为站点上的所有内容设置类别（数据类型）和用途（处理数据的原因）——从用户和课程到活动和版块。对于每个用途，可以设定一个保留期限。当保留期限已过，数据将被标记和列出删除，等待管理员确认。';
$string['externalexplanation'] = '已在此网站上安装了一个额外的隐私插件。';
$string['purposedefault_help'] = '默认用途是应用于任何新实例的用途。如果选择了继承，则应用来自上级场景的用途。场景是（从低到高）：版块>活动模块>课程>课程类别>用户>网站。';
$string['requireallenddatesforuserdeletion'] = '没有结束日期的课程按活跃课程对待';
$string['requireallenddatesforuserdeletion_desc'] = '在计算用户有效期时，要考虑以下几个因素：

* 将用户的最后登录时间与用户的保留期限进行比较；
* 用户是否积极参与了某些课程。

在检查某一课程的活跃注册情况时，如果该课程没有截止日期，则使用此设置来确定该课程是否被视为活跃。如果课程没有结束日期，并且启用了此设置，则无法删除用户。';
$string['showdataretentionsummary_desc'] = '如果启用，则页面页脚和用户个人资料页中将显示指向数据保留摘要的链接。‎';

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
 * @subpackage url
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['displayselect_help'] = '此设置，URL文件类型，及浏览器是否允许嵌入，一起决定如何显示文件。选项包括：

* 自动 - 对类型可以自动选择的文件，这是最好的选项
* 嵌入 - 在导航栏下的页面中显示文件，并带有URL描述和其他板块
* 强制下载 - 用户会被提示下载此文件
* 打开 - 在浏览器窗口中只显示此文件
* 在弹出窗口中 - 在一个无菜单和地址栏的新窗口中显示文件
* 在框架中 - 在导航栏和URL描述下方的框架里显示文件
* 新窗口 - 在有菜单和地址栏的新窗口中显示文件';
$string['indicator:cognitivedepth'] = 'URL资源认知深度';
$string['indicator:cognitivedepth_help'] = '这个指标是基于学生在URL资源中所达到的认知深度。';
$string['indicator:cognitivedepthdef'] = 'URL资源认知深度';
$string['indicator:cognitivedepthdef_help'] = '参与人在时间分片期间的资源-URL中体现的认知参与度（级别 = 未看，已看）';
$string['indicator:socialbreadth'] = 'URL资源社交度';
$string['indicator:socialbreadth_help'] = '这个指标是基于学生在URL资源中所达到的社交广度。';
$string['indicator:socialbreadthdef'] = 'URL资源社交度';
$string['indicator:socialbreadthdef_help'] = '参与人在时间分片期间的资源-URL中体现的社交参与度（级别 = 未参与，单独参与）';
$string['modulename'] = 'URL';
$string['modulename_help'] = '该 URL 模块可以让老师提供一个 web 链接作为课程资源。任何线上的可自由使用的东西，如文件或图片，可以作为链接；该 URL 不必是某个网站的主页。某个网页的 URL 可以被复制和粘贴，或者老师可以使用文件选择器，从文件仓库中选择一个链接，如 Flickr，YouTube 或者 Wikimedia（视本站点可使用的文件仓库而定）。 该 URL 有一些显示选项，如嵌入显示或者在新的窗口打开该 URL 的选项，以及向该 URL 传递诸如学生姓名信息等所需的高级选项。注意，URL也可以用文件编辑器添加到其他类型的资源和活动中。';
$string['modulenameplural'] = 'URLs';
$string['pluginname'] = 'URL';
$string['privacy:metadata'] = 'URL资源插件不存储任何个人数据。';
$string['search:activity'] = 'URL';

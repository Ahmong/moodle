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
 * @subpackage grades
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enableajax_help'] = '添加AJAX功能至教师成绩表中，将简化和加速常用操作。这取决于在用户浏览器端Javascript功能是否启用。';
$string['gradealreadyupdated'] = '{$a}成绩未被导入，因为导入文件中的成绩比教师成绩表中的数据更旧。如仍要继续进行成绩导入，请使用强制导入选项。';
$string['gradedisplaytype_help'] = '此设置确定在教师成绩表和个人成绩单中显示成绩的方式。

* 字母-多个字母或词语用来表示一个成绩范围，这些显示值在成绩册设置中定义为“字母”
* 百分比-相对于最高和最低成绩
* 实际-实际成绩或量表值';
$string['gradeexportcustomprofilefields'] = '成绩导出包含的自定义个人资料字段';
$string['gradeexportcustomprofilefields_desc'] = '在成绩导出中包含这些自定义个人资料字段，用逗号分隔。';
$string['gradeexportuserprofilefields'] = '成绩导出包含的用户个人资料字段';
$string['gradeexportuserprofilefields_desc'] = '在成绩导出中包含这些用户个人资料字段，用逗号分隔。';
$string['graderreport'] = '教师成绩表';
$string['hidetotalifhiddenitems_help'] = '此设置设定包含隐藏成绩项的总分是显示给学生，还是被替换为连字符（-）。如果显示，总分的计算可以包含或不包含隐藏的成绩。 如果隐藏的成绩没被包含，总分可能会和教师在教师成绩表中看到的不同，因为教师总是能看到包含所有成绩的总分，无论隐藏的还是不隐藏的。如果隐藏的成绩被包含，学生可能能计算出隐藏的成绩是多少。';
$string['includescalesinaggregation'] = '在汇总中包含量表';
$string['overridden_help'] = '勾选后，此成绩项将不能被相关的活动更改。 在教师成绩表中编辑了一个成绩后，覆盖复选框会被自动勾选。但是，可以取消它使得相关的活动能更改成绩。';
$string['overridesitedefaultgradedisplaytype_help'] = '勾选后，课程的分数段和分数范围可以被自由更改，而不是使用网站的默认设置。';
$string['profilereport'] = '用户个人资料报表';
$string['profilereport_help'] = '在用户个人资料页显示成绩报表。';
$string['quickgrading_help'] = '如果激活，当编辑模式被打开时，每个成绩都显示为一个文本输入框，可以同时编辑多个成绩。点击更新按钮后，修改会被保存且高亮显示。 注意，当在教师成绩表中修改一个成绩之后，一个覆盖标记就会被勾选，这意味着相关的活动不能再改变这个成绩。';
$string['reportdefault'] = '默认（{$a}）';
$string['showanalysisicon_desc'] = '是否默认显示成绩分析图标。如果活动的模块支持的话，成绩分析图标链接到的页面会提供关于分数的解析和分数是如何取得的。';
$string['showaverages_help'] = '如启用，则在教师成绩表中会增加一列，用于显示每一个类型和成绩项的平均分。';
$string['showhiddenitems_help'] = '隐藏的成绩项是完全隐藏，还是名字对学生可见。

* 显示隐藏 - 显示隐藏成绩项的名字，但学生成绩被隐藏
* 限期隐藏 - 有“隐藏到”日期的成绩项在到期前会被完全隐藏。到期后会完全显示
* 不显示 - 隐藏的成绩项被完全隐藏';
$string['showhiddenuntilonly'] = '限期隐藏';
$string['showquickfeedback_help'] = '如果激活，当编辑模式被打开时，每个成绩都会显示一个虚线边框的输入框，使您可以同时编辑多个成绩的反馈信息。点击更新按钮后，更改会被保存且高亮显示。 注意，当在教师成绩表中修改一个反馈之后，一个覆盖标记就会被勾选，这意味着相关的活动不能再改变这个反馈。';
$string['showranges_help'] = '如果激活，在教师成绩表的附加行中会显示每个类型和成绩项的范围。';
$string['showuserimage_help'] = '是否在教师成绩表中的用户名后显示用户头像。';
$string['studentsperpage_help'] = '在教师成绩表中每页显示的学生数。';
$string['unlimitedgrades_help'] = '默认时，评分时所给的分数不能超过上下限。打开这个选项后，这个限制就不存在了，并且允许在成绩单中直接输入超过100%的分数。建议只在非高峰期打开这个选项，因为它会重新计算所有成绩，可能会导致较高的服务器负荷。';
$string['userfields_show_help'] = '在教师成绩表中显示额外的用户字段，如电子邮件地址。显示的特定字段由网站设置“显示用户身份”控制';

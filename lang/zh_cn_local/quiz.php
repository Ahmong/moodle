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
 * @subpackage quiz
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configintro'] = '这里设置的值是您创建新测验时设置选项表单中的默认值。您还可以配置哪些测验设置是选项高级设置。';
$string['configmaximumgrade'] = '测验成绩最高分的默认值。';
$string['configshowblocks'] = '测验时显示板块。';
$string['configtimelimit'] = '测验的默认时限，单位分钟。0 表示无限制。';
$string['configtimelimitsec'] = '测验的默认时间限制，单位秒。0 表示无时间限制。';
$string['eachattemptbuildsonthelast_help'] = '如果允许多次参加测验并启用此选项，则每次参加测验时，都会用上一次答题的答案作为默认答案。这样就可以通过多次参加测验来彻底完成测验。';
$string['graceperiod'] = '提交宽限期';
$string['graceperiod_desc'] = '把“时间超过时要怎么做？“设置为”允许在宽限期内提交，但不可以更改任何答案“时，所允许的默认额外时间(以秒为单位)。';
$string['graceperiod_help'] = '把“时间超过时要怎么做？“设置为”允许在宽限期内提交，但不可以更改任何答案“时所允许的默认额外时间。';
$string['graceperiodmin'] = '最后提交宽限期';
$string['graceperiodtoosmall'] = '宽限期必须大于{$a}。';
$string['howquestionsbehave_desc'] = '测验中题目行为的默认设置。';
$string['indicator:cognitivedepthdef_help'] = '参与人在时间分片期间的活动-测验中体现的认知参与度（级别 = 未看，已看，提交，已看反馈，对反馈置评，看反馈后再提交）';
$string['indicator:socialbreadth'] = '测验活动社交度';
$string['indicator:socialbreadth_help'] = '这个指标是基于学生在测验活动中所达到的社交广度。';
$string['indicator:socialbreadthdef'] = '测验活动社交度';
$string['indicator:socialbreadthdef_help'] = '参与人在时间分片期间的活动-测验中体现的社交参与度（级别 = 未参与，单独参与，结伴参与）';
$string['modulename_help'] = '教师可以在测验模块中设计选择、填空、匹配、数字、判断、讨论等多种类型的题目。

教师可以允许同一测验作答多次，并使用从题库随机抽题，试题顺序随机排列、选择题或匹配题选项随机排列等方式，以减少作弊的可能性。

教师也可以设置测验开放日期，或每次作答的时间限制(会有倒计时)。
 
除了讨论题外，每次作答都会自动评分，而分数会保存到成绩册上。
 
教师可以提供三种反馈，答题时的提示（依选项而不同），做完该题后的一般反馈（都相同），以及做完测验之后的整体反馈（分成几个等级）。
 
此测验用于： 

* 课程的正式考试 
* 每一单元的单元测验 
* 使用以往的旧题目做练习性测验 * 提供学生表现立即反馈 
* 让学生自我评价';
$string['reportoverview'] = '总览';
$string['showblocks'] = '在做测验时显示板块';
$string['showblocks_help'] = '如果设为是，那么在做测验时会显示常见的板块';
$string['url'] = 'URL';

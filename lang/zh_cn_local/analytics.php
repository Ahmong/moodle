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
 * @subpackage analytics
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analyticsdisabled'] = '分析功能已禁用。您可以在“网站管理 > 高级特性“启用此功能。';
$string['defaulttimesplittingmethods'] = '执行模型评估的默认间隔';
$string['defaulttimesplittingmethods_help'] = '此分析间隔定义了系统什么时候开始计算预言和与那些预言相关的活动日志分段。模型评估过程会在这些分析间隔中迭代直到一个指定的分析间隔。';
$string['errorimportmissingclasses'] = '此站点没有下列分析组件：{$a->missingclasses}。';
$string['errorinvalidtimesplitting'] = '无效的分析间隔；请确保您使用了全路径的类名。';
$string['levelinstitution'] = '教育水平';
$string['levelinstitutionisced0'] = '幼儿教育（低于小学）';
$string['levelinstitutionisced1'] = '小学';
$string['levelinstitutionisced2'] = '初中';
$string['levelinstitutionisced3'] = '高中';
$string['levelinstitutionisced4'] = '中等以上非高等教育（包括合作培训或社区/NGO培训）';
$string['levelinstitutionisced5'] = '短期高等教育（包括合作培训或社区/NGO培训）';
$string['levelinstitutionisced6'] = '学士或同等学历';
$string['levelinstitutionisced7'] = '硕士或同等学历';
$string['levelinstitutionisced8'] = '博士或同等学历';
$string['onlycliinfo'] = '分析过程，如评估模型、训练机器学习算法或获得预测可能需要一段时间，它们将作为cron任务运行，也可以通过命令行来强制执行。如果禁用，您可以通过web界面手动运行分析过程。';

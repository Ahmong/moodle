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
 * @subpackage analytics
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alltimesplittingmethods'] = '所有分析时间分片法';
$string['clienablemodel'] = '您可以通过它的ID选择一个分析时间分片来启用这个模型。请注意，您以后还可以使用web接口启用它（为‘空’将退出）。';
$string['currenttimesplitting'] = '当前分析时间分片';
$string['edittrainedwarning'] = '这个模型已经被训练过了。注意，改变其指标或分析时间分片将会删除之前的预测，并开始产生新的预测。';
$string['errorcantenablenotimesplitting'] = '在启用模型之前，您需要选择一个分析时间分片';
$string['invalidcurrenttimesplitting'] = '当前的分析时间分片对于该模型的目标是无效的。请选择其他时间分片。';
$string['invalidtimesplitting'] = '选定的分析时间分片对于选定的目标无效。';
$string['invalidtimesplittinginmodels'] = '某些模型使用的分析时间分片法是无效的。请为以下模型选择其他时间分片法：{$a}';
$string['modeltimesplitting'] = '分析时间分片';
$string['scheduledanalysisresults'] = '结果使用{$a->name}分析时间分片法';
$string['scheduledanalysisresultscli'] = '结果使用{$a->name} (id: {$a->id})分析时间分片';
$string['selecttimesplittingforevaluation'] = '选择要用于评估模型配置的分析时间分片法。';
$string['timesplittingnotdefined'] = '未定义分析时间分片法。';
$string['timesplittingnotdefined_help'] = '在启用模型之前，您需要选择分析时间分片法。';

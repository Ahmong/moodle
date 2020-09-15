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
 * @subpackage analytics
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['analysablenotused'] = '分析{$a->analysableid}未使用：{$a->errors}';
$string['analysablenotvalidfortarget'] = '分析{$a->analysableid}对目标{$a->result}无效';
$string['analyticsdisabled'] = '分析功能已禁用，您可以在“网站管理>高级特性“中启用。';
$string['defaulttimesplittingmethods'] = '模型评估的默认分析时间分片法';
$string['defaulttimesplittingmethods_help'] = '分析时间分片法定义了什么时间系统会计算预言以及活动日志中哪些部分与这些预言相关。除非指定一个特定的分析时间分片，否则模型评估进程会遍历这些分析时间分片。';
$string['errorcannotusetimesplitting'] = '提供的分析时间分片法无法用于此模型。';
$string['errorcannotwritedataset'] = '无法写入数据集文件{$a}。';
$string['errorexportmodelresult'] = '机器学习模型无法导出。';
$string['errorimport'] = '导入提供的JSON文件时出错。';
$string['errorimportmissingclasses'] = '下列分析组件在此网站上不可用：{$a->missingclasses}。';
$string['errorimportmissingcomponents'] = '提供的模型需要安装下列插件： {$a}。注意：版本号无需与在您的网站上已安装的版本一致。大多数时候安装相同或者更新的版本都是可以的。';
$string['errorimportversionmismatches'] = '下列组件的版本与此网站上的已安装版本不一致：{$a}。您可以设置参数“忽略版本不匹配”来忽略这些不一致。';
$string['errorinvalidcontexts'] = '在此目标上无法使用所选的上下文。';
$string['errorinvalidindicator'] = '无效的{$a} 标识';
$string['errorinvalidtarget'] = '无效的{$a}目标';
$string['errorinvalidtimesplitting'] = '无效的分析时间分片法，请确保您添加了类名完全合格的类。';
$string['errornocontextrestrictions'] = '所选的目标不支持上下文限制';
$string['errornoexportconfig'] = '导出模型配置时出错。';
$string['errornoexportconfigrequirements'] = '只能导出带有分析时间分片的非静态模型。';
$string['errornopredictresults'] = '预测处理器没有返回结果。检查输出目录内容以获得更多信息。';
$string['errornoroles'] = '学生或教师的角色还没有被定义。在分析设置页面中定义他们。';
$string['errornotimesplittings'] = '这个模型没有任何分析时间分片。';
$string['errorpredictioncontextnotavailable'] = '此预测上下文不再可用。';
$string['errorunexistingtimesplitting'] = '选择的分析分析时间分片法不可用。';
$string['incorrectlyflagged'] = '标记错误';
$string['insightinfomessagehtml'] = '系统为您生成了一项洞察';
$string['insightinfomessageplain'] = '系统为您提供了一项洞察：{$a}';
$string['insightmessagesubject'] = '对 "{$a}"的新洞察';
$string['invalidanalysablefortimesplitting'] = '无法用分析分析时间分片法{$a}来分析。';
$string['invalidtimesplitting'] = 'ID 为{$a} 的模型在进行训练之前需要一个分析时间分片法。';
$string['levelinstitution'] = '教育层级';
$string['levelinstitutionisced0'] = '学前教育（“小学之前”教育程度）';
$string['levelinstitutionisced1'] = '小学教育';
$string['levelinstitutionisced2'] = '初中教育';
$string['levelinstitutionisced3'] = '高中教育';
$string['levelinstitutionisced4'] = '专上非高等教育（包括企业或社区/NGO培训）';
$string['levelinstitutionisced5'] = '短周期高等教育（包括企业或社区/NGO培训）';
$string['levelinstitutionisced6'] = '学士或同等水平';
$string['levelinstitutionisced7'] = '硕士或同等水平';
$string['levelinstitutionisced8'] = '博士或同等水平';
$string['neutral'] = '中立的';
$string['noinsights'] = '没有洞察报表';
$string['noinsightsmodel'] = '这个模型没有产生洞察';
$string['nonewdata'] = '无新数据可用。模型将在下个分析时间分片后开始分析。';
$string['nonewranges'] = '无新的预言。模型将在下个分析时间分片后开始分析。';
$string['novalidsamples'] = '无有效的样例可用';
$string['onlycli'] = '分析过程仅通过命令行执行';
$string['onlycliinfo'] = '分析过程，例如执行模型评估、训练机器学习算法或者获取预测都需要一段时间来运行。这些过程作为cron任务来运行，或者通过命令行来强制执行。如果禁用，分析过程可以通过web接口来手工执行。';
$string['percentonline_help'] = '如果你所在的组织提供混合课程，那么在Moodle中在线完成的学生任务的比例是多少？输入一个介于0和100之间的数字。';
$string['predictionsprocessor_help'] = '一个预测处理器是机器学习后端，它处理由计算模型的指标和目标生成的数据集。每个模型使用一个不同的处理器。这里指定默认的处理器。';
$string['privacy:metadata:analytics:indicatorcalc:contextid'] = '上下文';
$string['privacy:metadata:analytics:predictions:rangeindex'] = '分析时间分片的索引';
$string['timesplittingmethod'] = '分析时间分片法';
$string['timesplittingmethod_help'] = '分析时间分片法定义了什么时间系统会计算预言以及活动日志中哪些部分与这些预言相关。例如，课程持续时间会被划分成许多时间片段，在每个片段的结束点生成一个预测。';
$string['viewinsight'] = '查看洞察';
$string['viewinsightdetails'] = '查看洞察的细节';
$string['washelpful'] = '这是否有帮助？';

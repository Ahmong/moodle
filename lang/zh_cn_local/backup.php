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
 * @subpackage backup
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['automatedminkepthelp'] = '如果超过指定天数的备份被删除，有可能出现不活跃的课程的备份被删光的情况。为了防止这种情况，应该指定一个备份保存的最小数目。';
$string['choosefilefromcoursebackup_help'] = '使用默认设置备份的课程的备份文件会被保存到这里';
$string['configgeneralactivities'] = '备份是否包含活动。';
$string['configgeneralbadges'] = '备份是否包含勋章。';
$string['configgeneralblocks'] = '备份是否包含板块。';
$string['configgeneralcomments'] = '备份是否包含评论。';
$string['configgeneralfilters'] = '备份是否包含过滤器。';
$string['configgeneralhistories'] = '备份是否包含用户历史记录。';
$string['configgeneralusers'] = '默认时，备份是否包含用户。';
$string['configrestoreblocks'] = '设置恢复板块的默认值。';
$string['error_block_for_module_not_found'] = '在课程模块（ID：{$a->mid}）发现无主板块实例（ID：{$a->bid}）。不会备份此板块。';
$string['filealiasesrestorefailures_help'] = '别名是链接到其他文件的符号链接，包括存储在外部文件仓库中的文件。在某些情况下，Moodle 不能恢复它们——例如，在另一个站点恢复此备份文件或引用的文件不存在在时。 在恢复日志文件里能找到更多的细节和失败的确切原因。';
$string['generalactivities'] = '包含活动和资源';
$string['generalblocks'] = '包含板块';
$string['generalcalendarevents'] = '包含日历事件';
$string['generalcomments'] = '包含评论';
$string['generalcompetencies'] = '包含能力';
$string['generalenrolments'] = '包含选课方法';
$string['generalfiles'] = '包含文件';
$string['generalfilters'] = '包含过滤器';
$string['generalgradehistories'] = '包含历史';
$string['generalgroups'] = '包含组和分组';
$string['generalhistories'] = '包含历史';
$string['generallogs'] = '包含日志';
$string['generalroleassignments'] = '包含角色分配';
$string['generalusers'] = '包含用户';
$string['generaluserscompletion'] = '包含用户的课程完成信息';
$string['includeactivities'] = '包含：';
$string['includeditems'] = '包含项目：';
$string['rootsettingactivities'] = '包含活动和资源';
$string['rootsettingblocks'] = '包含板块';
$string['rootsettingcalendarevents'] = '包含日历事件';
$string['rootsettingcomments'] = '包含评论';
$string['rootsettingcompetencies'] = '包含能力';
$string['rootsettingcustomfield'] = '包含自定义字段';
$string['rootsettingenrolments'] = '包含选课方法';
$string['rootsettingenrolments_withusers'] = '是的，仅当包含了用户';
$string['rootsettingfiles'] = '包含文件';
$string['rootsettingfilters'] = '包含过滤器';
$string['rootsettinggradehistories'] = '包含成绩历史';
$string['rootsettinggroups'] = '包含组和分组';
$string['rootsettinglogs'] = '包含课程日志';
$string['rootsettingroleassignments'] = '包含角色分配';
$string['rootsettingusers'] = '包含已选课用户';
$string['rootsettinguserscompletion'] = '包含用户完成情况细节';

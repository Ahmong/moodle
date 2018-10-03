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
 * Strings for component 'antivirus_clamav', language 'zh_cn', branch 'MOODLE_31_STABLE'
 *
 * @package   antivirus_clamav
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clamfailed'] = 'Clam AV运行失败。返回的错误信息是{$a}。下面是Clam的输出:';
$string['clamfailureonupload'] = 'ClamAV上传失败';
$string['configclamactlikevirus'] = '文件疑似病毒';
$string['configclamdonothing'] = '文件正常';
$string['configclamfailureonupload'] = '如果您已经配置了使用ClamAV扫描上传的文件，但它的配置不正确或未能运行等出现一些未知原因时，它应该如何表现？如果您选择“文件疑似病毒”，那么文件将被转移到隔离区或删除。如果您选择“文件正常”，文件将被移动到目标目录。无论哪种方式，管理员会警告文件上传失败。如果你选择把“文件疑似病毒”和某些原因ClamAV无法运行（通常是因为你输入了一个无效的ClamAV文件夹），所有上传文件将被移动到隔离区或被删除。小心这个设置。';
$string['configpathtoclam'] = '执行ClamAV的目录。可能是 /usr/bin/clamscan 或是 /usr/bin/clamdscan。你需要填入，才能让防病毒软件ClamAV执行。';
$string['configquarantinedir'] = '若你要ClamAV把受病毒感染的文件移到一个隔离文件夹，把该文件夹地址写在这里。它必须对Web服务是可写的。若你若你留空，或你输入一个不存在的或无法写入的文件夹，被感染的文件将会被删除。不要包含尾端斜线。';
$string['invalidpathtoclam'] = 'Moodle已经被配置为运行clam对上传的文件进行检查，但提供给Clam AV的路径 {$a} 是非法的。';
$string['pathtoclam'] = 'ClamAV 文件夹';
$string['pluginname'] = 'ClamAV 防病毒软件';
$string['quarantinedir'] = '隔离用文件夹';
$string['unknownerror'] = 'clam发生了未知错误。';

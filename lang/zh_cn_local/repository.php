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
 * @subpackage repository
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activaterep'] = '已激活的文件仓库';
$string['activerepository'] = '可用的文件仓库插件';
$string['addplugin'] = '添加文件仓库插件';
$string['areauserpersonal'] = '个人文件';
$string['cannotaccessparentwin'] = '当使用HTTPS时，文件仓库不会自动刷新。因此，您需要回到文件选择器并重新选择仓库。';
$string['commonrepositorysettings'] = '通用文件仓库设置';
$string['configcacheexpire'] = '浏览外部文件仓库时，文件列表的本地缓存时间（单位：秒）。';
$string['configsyncimagetimeout'] = '同步时从外部仓库下载图片文件的超时时间，以秒为单位。';
$string['confirmdelete'] = '你确定要删除文件仓库 - {$a}吗？如果您选择“继续并下载“，那么从此文件仓库引用外部内容的文件将被下载到 Moodle，这可能要花费很长时间。';
$string['confirmdeletefilewithhref'] = '您确定您要删除这个文件吗？有 {$a} 个别名/捷径以这个文件为源。如果您继续，那么这些别名将被转换为真实副本。';
$string['confirmremove'] = '您确信要删除这个文件仓库（{$a}）插件、它的配置选项和<strong>所有实例</strong>吗？如果选择“继续并下载”，对外部内容的文件引用将下载到Moodle。 这可能需要很长时间来处理。';
$string['confirmrenamefile'] = '您确定您要删除这个文件吗？有 {$a} 个别名/捷径以这个文件为源。如果您继续，那么这些别名将被转换为真实副本。';
$string['confirmrenamefolder'] = '您确定您要移动或重命名这个文件夹吗？任何引用这个文件夹的别名/捷径将被转换成真实副本。';
$string['createinstance'] = '创建一个文件仓库实例';
$string['createrepository'] = '创建一个文件仓库实例';
$string['deleted'] = '文件仓库已删除';
$string['deleterepository'] = '删除此文件仓库';
$string['displayasdetails'] = '显示为文件详情';
$string['editrepositoryinstance'] = '编辑文件仓库实例';
$string['emptytype'] = '无法创建文件仓库类型：类型名为空';
$string['enablecourseinstances'] = '允许用户向课程中添加一个文件仓库实例';
$string['enableuserinstances'] = '允许用户向用户场景添加文件仓库实例';
$string['errordoublereference'] = '该文件的捷径已经存在，无法以捷径/别名形式覆盖文件';
$string['errornotyourfile'] = '您只能选择自己添加的文件。';
$string['errorpostmaxsize'] = '您尝试上传的文件太大，服务器无法处理。';
$string['erroruniquename'] = '文件仓库实例名应该唯一';
$string['errorwhilecommunicatingwith'] = '错误！在访问文件仓库"{$a}"时发生错误';
$string['existingrepository'] = '文件仓库已经存在';
$string['instances'] = '文件仓库实例';
$string['invalidplugin'] = '文件仓库插件 {$a} 无效';
$string['invalidrepositoryid'] = '无效的文件仓库ID';
$string['license'] = '版权';
$string['logintoaccount'] = '登录到您的{$a}账号';
$string['makefilecontrolledlink'] = '创建此文件的受控链接';
$string['makefilereference'] = '为文件创建一个别名/捷径';
$string['manage'] = '管理文件仓库';
$string['manageuserrepository'] = '管理个人文件仓库';
$string['missingsourcekey'] = '源键值缺失，取回该文件需要此键值。';
$string['noenter'] = '无输入';
$string['nomorefiles'] = '不允许更多附件';
$string['nopermissiontoaccess'] = '没有访问此文件仓库的权限';
$string['norepositoriesavailable'] = '抱歉，您使用的文件仓库没有一个能返回所需格式的文件。';
$string['norepositoriesexternalavailable'] = '抱歉，您使用的文件仓库没有一个能返回外部文件。';
$string['notyourinstances'] = '您不能查看/编辑他人的文件仓库实例';
$string['plugin'] = '文件仓库插件';
$string['pluginerror'] = '文件仓库有错误';
$string['pluginname'] = '文件仓库插件名';
$string['pluginnamehelp'] = '如果此处留空，将使用默认名称。';
$string['popupblockeddownload'] = '下载窗口被屏蔽。请允许弹出窗口，然后再试一次。';
$string['privacy:metadata:repository'] = '文件仓库组件在核心子系统中存储了仓库类型。';
$string['privacy:metadata:repository_instances'] = '文件仓库插件在核心子系统中存储了用户文件仓库实例的数据。';
$string['privacy:metadata:repository_instances:name'] = '文件仓库实例的自定义名称。';
$string['privacy:metadata:repository_instances:password'] = '为此文件仓库实例设置的可选密码。';
$string['privacy:metadata:repository_instances:timecreated'] = '文件仓库实例的创建日期/事件。';
$string['privacy:metadata:repository_instances:timemodified'] = '文件仓库实例的更改日期/时间。';
$string['privacy:metadata:repository_instances:typeid'] = '文件仓库实例的ID类型。';
$string['privacy:metadata:repository_instances:userid'] = '拥有此文件仓库实例的用户的ID。';
$string['privacy:metadata:repository_instances:username'] = '为此文件仓库实例设置的可选用户名';
$string['privatefilesof'] = '{$a}个人文件';
$string['referencesexist'] = '有 {$a} 个别名/捷径引用此文件';
$string['referenceslist'] = '别名/捷径';
$string['removed'] = '文件仓库已删除';
$string['repositories'] = '文件仓库';
$string['repository'] = '文件仓库';
$string['repositorycourse'] = '课程文件文件仓库';
$string['repositoryerror'] = '外部文件仓库返回错误：{$a}';
$string['repositoryicon'] = '文件仓库图标';
$string['searchrepo'] = '搜索文件仓库';
$string['setupdefaultplugins'] = '设置默认的文件仓库插件';
$string['siteinstances'] = '本站的文件仓库实例';
$string['sourcekeymismatch'] = '源URL与源键值不匹配。';
$string['unknownsource'] = '未知来源';
$string['usercontextrepositorydisabled'] = '您不能在用户场景中编辑此文件仓库';

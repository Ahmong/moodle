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
 * @subpackage h5p
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedandupdatedpp'] = '添加{$a->%new} 个新的H5P库，并且更新了{$a->%old} 个旧的库。';
$string['addedandupdatedps'] = '添加{$a->%new} 个新的H5P库，并且更新了{$a->%old} 个旧的库。';
$string['addedandupdatedsp'] = '添加{$a->%new} 个新的H5P库，并且更新了{$a->%old} 个旧的库。';
$string['addedandupdatedss'] = '添加{$a->%new} 个新的H5P库，并且更新了{$a->%old} 个旧的库。';
$string['addednewlibraries'] = '添加{$a->%new} 个新的H5P库。';
$string['addednewlibrary'] = '添加{$a->%new} 个新的H5P库。';
$string['ccattribution'] = '归属（CC BY）';
$string['couldNotParseJSONFromZip'] = '无法处理压缩包中的JSON文件：{$a->%fileName}';
$string['couldNotReadFileFromZip'] = '无法从压缩包中读取文件：{$a->%fileName}';
$string['eventh5pdeleted'] = 'H5P已删除';
$string['eventh5pviewed'] = 'H5P内容已显示';
$string['fetchtypesfailure'] = '无法获取H5P内容类型的信息。H5P库连接失败';
$string['fileExceedsMaxSize'] = '压缩包中的一个文件的大小超过了文件大小限制。({$a->%file} {$a->%used} > {$a->%max})';
$string['gpl'] = '通用公共许可证v3（GPLv3）';
$string['h5pfilenotfound'] = '没有找到H5P文件';
$string['h5pinvalidurl'] = '无效的H5P内容URL。';
$string['h5pmanage'] = '管理H5P内容类型';
$string['h5ppackage'] = 'H5P内容类型';
$string['h5ppackage_help'] = '一个H5P内容类型是一个带H5P或者ZIP扩展名的文件，其中包含了显示这类内容所有的代码库。';
$string['h5pprivatefile'] = '此H5P内容无法显示，因为您无权访问.h5p文件。';
$string['installedcontentlibraries'] = '无效的H5P代码库';
$string['installedcontenttypes'] = '已安装的H5P内容类型';
$string['installedh5p'] = '已安装的H5P';
$string['invalidcontextid'] = '没有H5P文件（无效contextid）';
$string['invalidfile'] = '无效的文件 "{$a->%filename}" 。只允许以下扩展名：{$a->%files-allowed}。';
$string['invalidlanguagefile'] = '代码库{$a->%library}中的语言文件 {$a->%file}无效';
$string['invalidlanguagefile2'] = '代码库 {$a->%name}中包含了无效的语言文件{$a->%languageFile}';
$string['invalidlibrarydata'] = '{$a->%library}提供的{$a->%property} 数据无效';
$string['invalidlibrarydataboolean'] = '{$a->%library}提供的{$a->%property} 数据无效。应该是布尔值。';
$string['invalidlibraryname'] = '无效代码库名称：{$a->%name}';
$string['invalidlibrarynamed'] = '内容中使用的H5P代码库{$a->%library}无效';
$string['invalidlibraryoption'] = '{$a->%library}中的{$a->%option} 选项无效';
$string['invalidlibraryproperty'] = '无法读取{$a->%library}中的属性{$a->%property}';
$string['invalidmainjson'] = '缺失有效的h5p.json主文件。';
$string['invalidmultiselectoption'] = '在多项选择中有无效选项。';
$string['invalidpackage'] = '无效的H5P内容类型';
$string['invalidselectoption'] = '选择了无效的选项。';
$string['invalidsemanticsjson'] = '在代码库{$a->%name}中包含了无效的semantics.json文件';
$string['invalidsemanticstype'] = 'H5P内部错误：在semantics中有未知的内容类型“{$a->@type}“。将删除该内容。';
$string['invalidstring'] = '提供了与semantics里正则表达式不匹配的字符串。（value: "{$a->%value}", regexp: "{$a->%regexp}"）';
$string['librariesmanagerdescription'] = '<p>H5P通过提供一组内容类型让用户创建交互式的内容。</p>
<p>为确保在您的网站上只使用可信的H5P内容类型，您<i>要么</i></p>
<ul><li>从h5p.org上传内容类型 <i>或者</i></li>
<li>启用定时任务\'从h5p.org下载可用的H5P内容类型 \'</li></ul>
<p>注意，用户只能使用已经安装在您的网站上的H5P内容类型。</p>';
$string['librarydirectoryerror'] = '代码库目录名必须匹配machineName或者machineName-majorVersion.minorVersion(from library.json)。(目录: {$a->%directoryName} , machineName: {$a->%machineName}, majorVersion: {$a->%majorVersion}, minorVersion: {$a->%minorVersion})';
$string['licenseGPL'] = '通用公共许可证（GPL）';
$string['missingcontentfolder'] = '缺失有效的内容文件夹';
$string['missingcoreversion'] = '系统无法安装{$a->%component}组件，因为它需要新版本的H5P插件。本网站当前 运行的版本是{$a->%current}，需要的版本是{$a->%required}或更高。请升级后再试。';
$string['missingdependency'] = '{$a->@lib}需要的依赖库{$a->@dep} 缺失。';
$string['missinglibrary'] = '缺失需要的库{$a->@library}';
$string['missinglibraryfile'] = '库"{$a->%name}"里缺失文件"{$a->%file}"';
$string['missinglibraryjson'] = '库{$a->%name}中没有找到有效json格式的library.json文件';
$string['missinglibraryproperty'] = '库{$a->%library}中缺失所需属性{$a->%property}';
$string['missingmbstring'] = 'PHP扩展mbstring没有加载，H5P正常运行需要它。';
$string['missinguploadpermissions'] = '注意，您上传的文件中有代码库，但您不被允许上传新代码库。请联系网站管理员。';
$string['noextension'] = '上传的文件不是有效的HTML5文件包。（没有.h5p扩展名。）';
$string['nojson'] = '无效的h5p.json主文件';
$string['nopermissiontodeploy'] = '上传此文件的用户没有发布H5P内容的权限，因此此文件无法显示。';
$string['notrustablefile'] = '上传此文件的用户没有发布H5P内容的权限，因此此文件无法显示。请联系网站管理员安装所需的内容类型。';
$string['nounzip'] = '上传的文件不是有效的HTML5文件包。（无法unzip此文件。）';
$string['offlineDialogRetryMessage'] = '重试中，:num....';
$string['pluginname'] = 'H5P文件包';
$string['privacy:metadata'] = 'H5P子系统不存储任何个人数据。';
$string['unpackedFilesExceedsMaxSize'] = '解压文件的总大小超过了最大限制。（{$a->%used} > {$a->%max}）';
$string['updatedlibraries'] = '更新了H5P代码库{$a->%old}。';
$string['updatedlibrary'] = '更新了H5P代码库{$a->%old}。';
$string['uploadlibraries'] = '上传H5P内容类型';
$string['uploadsuccess'] = '成功上传H5P内容类型';
$string['wrongversion'] = '此内容中使用的H5P代码库{$a->%machineName}版本无效。内容包含了{$a->%contentLibrary}，但应该是{$a->%semanticsLibrary}。';

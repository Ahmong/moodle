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
 * @subpackage admin
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ageofdigitalconsentmap'] = '上网年龄承诺';
$string['allowbeforeblockdesc'] = '默认时，禁止访问IP列表会先被匹配。如果启用此选项，则允许访问IP列表的处理会先于禁止访问列表。';
$string['allowblockstodock'] = '允许板块停靠于此';
$string['allowuserblockhiding'] = '允许用户隐藏版块';
$string['badwordsdefault'] = '如果自定义列表为空，则使用语言包提供的默认列表。';
$string['blockprotect_help'] = '如果您锁定了特定类型的板块，那么别人就不能再添加或删除实例。（当然您还是可以的，只要在编辑前先解锁。） 此功能用来保护导航和设置这样的板块，它们如果被不小心删除，将会很难再加回来。';
$string['blocksettings'] = '管理板块';
$string['clitypevaluedefault'] = '输入值，按回车使用默认值（{$a}）';
$string['condifmodeditdefaults'] = '默认值将在创建新的活动或资源时使用。';
$string['configallcountrycodes'] = '在很多地方都要使用这个国家/地区列表，例如用户个人资料。如果留空（默认），那么会使用标准英文语言包中的countries.php（它来自ISO 3166-1）。否则，您可以输入用半角逗号分隔的代码列表，例如“GB,FT,ES”。如果要添加新的非标准代码，您必须先在en和您的语言包中添加它们。';
$string['configallowblockstodock'] = '如果启用，且当前主题风格支持，那么用户可以将板块移动到一个特别的停靠栏中。';
$string['configallowobjectembed'] = '作为默认的安全考量，普通用户是不能在网页文本中通过显式的EMBED或OBJECT标记嵌入多媒体（如Falsh）的（可使用比较安全的mediaplugins过滤器添加）。如果您希望允许用户使用上述标记，请启用此选项。';
$string['configallowuserblockhiding'] = '是否允许用户隐藏/显示此网站中的侧边版块？这个功能使用JavaScript和Cookie来记住每一个可折叠版块的状态，它只影响用户自己的页面。';
$string['configautolang'] = '通过浏览器设置检测默认语言。如未设置，则使用网站的默认语言。';
$string['configcountry'] = '如果在此处设定一个国家或地区，则其将被用于用户注册时的默认选择。要强制用户自己选择一个国家或地区，将此处设置为空。';
$string['configcourseoverviewfileslimit'] = '可以在课程页列表中显示的课程摘要旁边显示的最大文件数。添加的第一个图像文件用作个人主页上“课程综述”中的课程图像；任何其他文件仅显示在“课程列表”页面上。';
$string['configcourserequestnotify'] = '设置有建课申请时应当被通知的用户。';
$string['configcourserequestnotify2'] = '有建课申请时将被通知的用户。只有拥有“核准建课申请”权限的用户才会被列出。';
$string['configcronclionly'] = '通过浏览器访问计划任务页可能会向匿名用户暴露特权信息。因此推荐只在命令行下运行计划任务，或者为计划任务设置一个远程访问的密码。';
$string['configdefaulthomepage'] = '这里确定已登陆用户的导航中的第一个链接。';
$string['configdefaultrequestcategory'] = '用户申请的新建课程将自动放入此类别中。';
$string['configenabledevicedetection'] = '为主题风格的选择和其它特性启用移动电话、智能电话、平板电脑或默认设备（桌面PC、笔记本等）检测功能。';
$string['configextendedusernamechars'] = '启用此选项后，学生在用户名中便可以使用任何字符（这并不会影响他们的实际名字）。默认的情况是“否”，它限制用户名只能使用小写字母、数字、下划线（_）、横线（-）、小数点（.）或（@）。';
$string['configfiltermatchonepertext'] = '自动链接过滤器在过滤内容时，仅在一篇文字中的首次匹配位置生成链接，而忽略掉其余的匹配。如果每页只过滤一次的选项为<i>是</i>，则此选项会被忽略。';
$string['configlang'] = '选择全站的默认语言。用户可以通过语言菜单或个人资料设定自己的语言，从而覆盖这个设置。';
$string['configlockrequestcategory'] = '启用时，在系统中申请创建新课程的用户将无法在新课程的表单中选取课程类别。这是一种限制用户只能在一个课程类别下申请创建新课程的替代性方法。';
$string['configmaxbytes'] = '限制整个站点内上传文件的最大尺寸。这个设置会受到PHP设定中post_max_size和upload_max_filesize，以及Apache设定中LimitRequestBody的影响。这个设置也会影响课程和模块中选择文件尺寸的范围。如果选择“网站上传限制”，将使用服务器允许的最大值。';
$string['configmypagelocked'] = '此设置阻止任何非管理员用户对默认页面的编辑企图';
$string['confignavshowcategories'] = '在导航条和导航板块中显示课程分类。学生已经选课的课程不受此设置影响，它们仍会被直接列在“我的课程”之下，与分类无关。';
$string['configprotectusernames'] = '如开启，忘记密码页面不会显示任何对猜测用户名和email地址有帮助的信息。';
$string['configsectionrequestedcourse'] = '建课申请';
$string['configsessioncookiepath'] = '如果您希望修改浏览器发送 Moodle cookie 时使用的地址信息，您可以修改这个选项将其指定为您网站的某个目录。否则使用默认值“/”。';
$string['configsitedefaultlicense'] = '默认的网站许可证';
$string['configsitedefaultlicensehelp'] = '在本站发布的资源的默认许可证';
$string['configtimezone'] = '这是只是用于显示日期的默认时区——每个用户都可以设置自己的时区。计划任务和其他服务器设置都基于这个时区。如果此处显示“无效时区”，则您需要修改这个设置';
$string['configuserquota'] = '用户个人文件区的最大配额（单位：字节）。 {$a->bytes} 字节 == {$a->displaysize}';
$string['contextlocking_desc'] = '此设置为指定的类别，课程，活动或板块设置只读访问权限。';
$string['coursegraceperiodafter'] = '过往课程的宽限期';
$string['coursegraceperiodbefore'] = '未来课程的宽限期';
$string['courseoverview'] = '课程综述';
$string['courserequestnotify'] = '建课申请通知';
$string['courserequests'] = '建课申请';
$string['courserequestspending'] = '待处理的建课申请';
$string['curlrequired'] = 'Moodle现在需要PHP的cURL扩展来和Moodle文件仓库通信。';
$string['defaultcity_help'] = '在此输入的城市将成为新建用户的默认城市。';
$string['defaulthomepage'] = '用户主页';
$string['defaultrequestcategory'] = '建课申请的默认类别';
$string['devicedetectregex_desc'] = '<p>默认时，Moodle可以检测的设备类型包括：默认（桌面PC、笔记本等），移动（电话和小型手持设备），平板（iPad、Android平板电脑）和传统（Internet Explorer 6用户）。主题选择器可以给它们分配不同的主题。通过此设置，可以用正则表达式检测其它类型的设备（这些设备的优先级高于默认类型）。</p>
<p>例如，您可以输入正则表达式“/(MIDP-1.0|Maemo|Windows CE)/”和返回值“featurephone”来检测一些常见的特殊手机。主题选择器里就会增加一个“featurephone”类型，您就可以设定给这些设备使用的主题。其它手机仍会使用为移动类型的设备选择的主题。</p>';
$string['devlibdirpresent'] = '含有开发库的目录，尤其是<em>/vendor</em>和<em>/node_modules</em>，不应出现在公共站点上。有关详细信息，请参阅<a href="{$a-> moreinfourl}“>安全综述报告</a>。';
$string['emoticons_desc'] = '此表单定义您的网站使用的表情（或笑脸）。如果将某行所有字段都清空，然后保存此表单，可以删除该行。在最后的空行里填写字段，可以注册一个新表情。重置所有字段到缺省值，请点击上面的链接。

* 文字（必须） - 文字会被表情图片替换。它至少要两个字符长。
* 图片名（必须） - 相对于组件pix文件夹的表情图片文件名，不带扩展名。
* 图片组件（必须） - 提供图标的组件。
* 替代文字（可选） - 表情替代文字的字符串ID和组件。';
$string['emoticonsreset'] = '重置表情设置为默认值';
$string['enablecourserequests'] = '允许申请创建课程';
$string['enrolinstancedefaults'] = '选课实例的默认值';
$string['enrolinstancedefaults_desc'] = '新建课程的默认选课设置。';
$string['helpupcominglookahead'] = '默认情况下，日历系统查找未来几天内的事件？';
$string['helpupcomingmaxevents'] = '默认情况下，为用户显示最多几个即将发生事件？';
$string['incompatibleblocks'] = '不兼容的板块';
$string['lang'] = '默认语音';
$string['legacyfilesinnewcourses_help'] = '默认情况下，旧版本课程文件区域只在升级过来的课程中存在。请注意，某些特性，比如单个活动的备份/恢复，和此设置不兼容。';
$string['lockrequestcategory'] = '禁止选择课程类别';
$string['modchooserdefault'] = '默认的活动选择器';
$string['modeditdefaults'] = '活动设置的默认值';
$string['mydashboard'] = '系统默认个人主页';
$string['mypagelocked'] = '锁定默认页面';
$string['myprofile'] = '默认个人资料页';
$string['navigationupgrade'] = '此次升级引入了两个新的导航板块来替换管理、课程、活动和参与者板块。如果你已经为这些板块设置了某些特殊的权限，那么你应该检查一下是否一切都还在按照你想要的方式工作。';
$string['navshowfrontpagemods_help'] = '如果启用，导航板块的“网站页面”下会显示首页活动。';
$string['navsortmycourseshiddenlast'] = '我的隐藏课程排在后面';
$string['navsortmycourseshiddenlast_help'] = '如果启用，所有隐藏课程都将排列在可见课程之后（适用于可以查看隐藏课程的用户）。否则，所有课程都会被忽略可见性，只按照“排序我的课程”参数的设置进行排列。';
$string['notifications'] = '通知';
$string['notifyloginthreshold'] = '邮件通知的下限';
$string['notloggedinroleid'] = '未登录用户的角色';
$string['pluginsoverview'] = '插件总览';
$string['pluginsoverviewsee'] = '点击 <a href="{$a->url}">插件总览</a>了解更多详细信息';
$string['registerwithmoodleorg'] = '注册您的网站';
$string['reverseproxyignore'] = '忽略的反向代理';
$string['showuseridentity_desc'] = '在选择或搜索用户，以及显示用户列表的时候，这些字段可以和全名一起显示。它们只会显示给有moodle/site:viewuseridentity权限的用户，默认情况下是教师和管理员。（通常可以选择一到两个您的机构强制使用的字段，比如学号。）';
$string['slasharguments'] = '使用斜杠参数';
$string['stickyblocks'] = '粘性板块';
$string['stickyblocksduplicatenotice'] = '如果您添加到这里的板块已经存在于某个特定的页面中，它将会被复制。<br /> 只有被固定的板块不可编辑，复制的版块是可以被编辑的。';
$string['task_logmode'] = '何时记日志';
$string['unicoderequired'] = '您必须使用Unicode（UTF-8）存储全部数据。全新安装时必须安装在缺省字符集为Unicode的数据库中。如果正在升级，您应该执行UTF-8移植处理（请参考管理员页面）。';
$string['updatenotificationfooter'] = '您的 Moodle 网站 {$a->siteurl} 配置为自动检查可用的更新。您作为网站的管理员，会收到此消息。您可以在 网站管理/服务器/更新通知 里禁用自动检查可用更新，也可以在您的偏好页面中调整此消息的发送方式。';
$string['updatenotificationsubject'] = 'Moodle 有更新 ({$a->siteurl})';
$string['updatenotifybuilds'] = '新构造的通知';
$string['updatenotifybuilds_desc'] = '如果启用，则当前版本有新的构造时，会报告 Moodle 代码有更新。构造是某个 Moodle 版本的持续改进。它们通常是每周发布一次。如果禁用，只有当更高版本的 Moodle 发布时才会报告有可用的更新。插件更新的检查不受此设置影响。';
$string['upgradesettingsintro'] = '您刚升级的Moodle增加了下面所显示的新设置。请对默认设置做必要的修改后，点击页面底部的“保存更改”按钮。';
$string['userfiltersdefault_desc'] = '选择显示在“浏览用户”页和“批量处理”页上的过滤器。按住Ctrl键可以选择多项。其他未选中的条目可以通过点击“更多”按钮列出。';

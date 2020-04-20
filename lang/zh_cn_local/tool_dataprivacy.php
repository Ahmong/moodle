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
 * @package    tool
 * @subpackage dataprivacy
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcategory'] = '添加类别';
$string['addnewdefaults'] = '添加新的模块级默认值';
$string['addpurpose'] = '添加意图';
$string['addroleoverride'] = '添加角色的覆盖值';
$string['approve'] = '同意';
$string['approverequest'] = '同意请求';
$string['automaticdeletionrequests'] = '创建自动的数据删除请求';
$string['automaticdeletionrequests_desc'] = '如果启用，手工删除任何用户账号时，将自动创建一个数据删除请求。';
$string['bulkapproverequests'] = '同意请求';
$string['bulkdenyrequests'] = '拒绝请求';
$string['cachedef_contextlevel'] = '上下文层级的意图和类别';
$string['cachedef_purpose'] = '数据意图';
$string['cachedef_purpose_overrides'] = '在数据隐私工具中被覆盖的意图';
$string['cannotreset'] = '无法重置请求。只有被拒绝的请求才能被重置。';
$string['categories'] = '类别';
$string['categorieslist'] = '数据类别列表';
$string['close'] = '关闭';
$string['compliant'] = '符合';
$string['confirmapproval'] = '您是否同意此数据请求？';
$string['confirmbulkapproval'] = '您是否批量同意选中的所有数据请求？';
$string['confirmbulkdenial'] = '您是否批量拒绝选中的所有数据请求？';
$string['confirmcompletion'] = '您是否真的要将此用户征询标记为完成？';
$string['confirmcontextdeletion'] = '您是否确认删除所需中的上下文？此操作将同时删除此上下文相关的所有用户数据。';
$string['confirmdenial'] = '您是否确实要拒绝此数据请求？';
$string['confirmrequestresubmit'] = '您是否确实要取消类型为{$a->type}、属于用户{$a->username}的当前请求，并重新提交？';
$string['contactdataprotectionofficer'] = '联系隐私保护官';
$string['contactdataprotectionofficer_desc'] = '如果启用，用户可以联系隐私保护官，并通过用户个人档案页面上的链接发送一个数据请求。';
$string['contactdpoviaprivacypolicy'] = '请根据隐私政策的描述联系隐私保护官。';
$string['contextlevelname10'] = '站点';
$string['contextlevelname30'] = '用户';
$string['contextlevelname40'] = '课程分类';
$string['contextlevelname50'] = '课程';
$string['contextlevelname70'] = '活动模块';
$string['contextlevelname80'] = '板块';
$string['contextpurposecategorysaved'] = '意图和类别已保存。';
$string['createdeletedatarequest'] = '创建数据删除请求';
$string['createnewdatarequest'] = '创建一条数据请求';
$string['createpurpose'] = '创建数据意图';
$string['creationauto'] = '自动化';
$string['creationmanual'] = '手工';
$string['dataprivacy:downloadallrequests'] = '下载所有人的导出数据';
$string['dataprivacy:downloadownrequest'] = '下载您自己的导出数据';
$string['dataprivacy:makedatadeletionrequestsforchildren'] = '请求删除下级数据';
$string['dataprivacy:makedatarequestsforchildren'] = '为下级数据创建数据请求';
$string['dataprivacy:managedatarequests'] = '管理数据请求';
$string['dataprivacy:requestdelete'] = '请求删除你自己的数据';
$string['dataprivacy:requestdeleteforotheruser'] = '请求删除另一名用户的数据';
$string['dataregistryinfo'] = '数据注册表可启用全站内容的类别(数据类型)及意图(处理数据的原因）- 范围可从用户及课程直至活动及区块。每种意图可以设置保留期。当保留期已过，数据将被标注并列为待删除，等待管理员确认。';
$string['datarequestcreatedforuser'] = '为{$a}创建的数据请求';
$string['datarequestcreatedfromscheduledtask'] = '从一个计划任务自动创建的。';
$string['datarequestcreatedupondelete'] = '因删除用户而自动创建的。';
$string['datarequestemailsubject'] = '数据请求：{$a}';
$string['dataretentionexplanation'] = '此概要显示保留用户数据的默认的类别和意图。有些区域可能会有比这里列出来更多的特定类别和意图。';
$string['dataretentionsummary'] = '数据保留概况';
$string['defaultexpired'] = '所有用户的数据';
$string['defaultexpiredexcept'] = '所有用户的数据，除了拥有下列角色的用户：<br> {$a->unexpired}';
$string['defaultsinfo'] = '默认的类别和意图将会应用于所有新的和已有的实例，如果该实例没有设置特定值。';
$string['defaultssaved'] = '默认值已保存';
$string['defaultswarninginfo'] = '警告：更改这些默认值将会影响现存的实例的保留期限。';
$string['defaultunexpired'] = '仅包含拥有下列角色的用户的数据：<br> {$a->expired}';
$string['defaultunexpiredwithexceptions'] = '仅包含拥有下列任一角色的用户的数据：<br> {$a->expired} 除非该用户同时拥有下列任一角色：<br> {$a->unexpired}';
$string['deletedefaults'] = '删除默认值：{$a}';
$string['deletedefaultsconfirmation'] = '您是否要删除模块\'{$a}\'的默认类别和意图？';
$string['deleteexpiredcontextstask'] = '删除过期上下文';
$string['deleteexpireddatarequeststask'] = '删除过期的数据请求导出文件';
$string['deletemyaccount'] = '删除我的账号';
$string['deletepurpose'] = '删除意图';
$string['deletepurposetext'] = '您是否要删除意图\'{$a}\'？';
$string['deny'] = '拒绝';
$string['denyrequest'] = '拒绝请求';
$string['deprecated'] = '过时的';
$string['deprecatedexplanation'] = '此插件使用了旧版本的隐私接口，请升级。';
$string['download'] = '下载';
$string['downloadexpireduser'] = '下载已过期。如果你希望导出自己的个人数据，请提交一个新的请求。';
$string['dporolemapping'] = '隐私保护官角色映射';
$string['dporolemapping_desc'] = '隐私保护官管理数据请求。一个角色如要出现在隐私保护官的角色映射选项中，必须为该角色赋予权限tool/dataprivacy:managedatarequests。';
$string['duplicaterole'] = '角色已指定';
$string['editcategories'] = '编辑类别';
$string['editcategory'] = '编辑类别';
$string['editdefaults'] = '编辑默认值：{$a}';
$string['editmoduledefaults'] = '编辑模块默认值';
$string['editpurpose'] = '编辑意图';
$string['editpurposes'] = '编辑意图';
$string['errorcannotrequestdeleteforother'] = '您没有权限创建该用户的删除请求。';
$string['errorcannotrequestdeleteforself'] = '您没有权限创建您自己的删除请求。';
$string['errorcontexthasunexpiredchildren'] = '上下文“{$a}”仍有未过期的下级数据，不会将任何上下文标记为删除。';
$string['errorinvalidrequestcreationmethod'] = '无效的请求创建方法！';
$string['errorinvalidrequeststatus'] = '无效的请求状态！';
$string['errorinvalidrequesttype'] = '无效的请求类型！';
$string['errornocapabilitytorequestforothers'] = '用户{$a->requestedby}没有权限为用户{$a->userid}创建数据请求';
$string['errornoexpiredcontexts'] = '没有过期的上下文需要处理';
$string['errorrequestalreadyexists'] = '您已有一个正在处理的请求。';
$string['errorrequestnotfound'] = '没有找到请求';
$string['errorrequestnotwaitingforapproval'] = '请求没有在等候同意。或者它没有准备好或者已经处理完成。';
$string['errorsendingmessagetodpo'] = '发送消息给{$a}时发生错误。';
$string['expandplugin'] = '展开和收缩插件。';
$string['expandplugintype'] = '展开和收缩插件类型。';
$string['expiredretentionperiodtask'] = '保留期满期限';
$string['expiredrolewithretention'] = '{$a->retention}（过期）';
$string['expiry'] = '期满';
$string['explanationtitle'] = '此页面上使用的图标及它们的含义。';
$string['external'] = '附加的';
$string['externalexplanation'] = '此站点安装的附加插件。';
$string['frontpagecourse'] = '首页课程';
$string['hide'] = '隐藏所有';
$string['inherit'] = '继承';
$string['lawfulbases'] = '法律准则';
$string['lawfulbases_help'] = '请选择至少一项作为处理个人数据的法律准则。请参阅<a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">GDPR Art. 6.1</a>';
$string['markcomplete'] = '标记为完成';
$string['markedcomplete'] = '您的请求已被数据隐私保护官标记为完成。';
$string['messageprovider:contactdataprotectionofficer'] = '数据请求';
$string['messageprovider:notifyexceptions'] = '数据请求例外通知';
$string['mypersonaldatarequests'] = '我的个人数据请求';
$string['noactivitiestoload'] = '无活动';
$string['noassignedroles'] = '此上下文没有指定的角色';
$string['noblockstoload'] = '无板块';
$string['nocategories'] = '还没有类别';
$string['nocoursestoload'] = '无活动';
$string['nodatarequests'] = '没有数据请求';
$string['nodatarequestsmatchingfilter'] = '没有数据请求满足给定的过滤器';
$string['noexpiredcontexts'] = '此上下文层级中没有已过保留期的数据。';
$string['nopersonaldatarequests'] = '您没有任何个人数据请求';
$string['nopurposes'] = '还没有任何意图';
$string['nosubjectaccessrequests'] = '没有需要您处理的数据请求';
$string['nosystemdefaults'] = '尚未设置站点层级的意图和类别。';
$string['notset'] = '没有设置（使用默认值）';
$string['notyetexpired'] = '{$a} （未过期）';
$string['overrideinstances'] = '用指定值重置实例';
$string['pluginname_help'] = '数据隐私插件';
$string['pluginregistrytitle'] = '插件隐私承诺注册表';
$string['privacy'] = '数据隐私';
$string['privacy:metadata:preference:tool_dataprivacy_request-filters'] = '当前应用到数据请求页面的过滤器。';
$string['privacy:metadata:preference:tool_dataprivacy_request-perpage'] = '用户在一页上希望看到的数据请求的数量';
$string['privacyofficeronly'] = '只有赋予了隐私保护官角色（{$a}）的用户才能访问此内容';
$string['privacyrequestexpiry'] = '数据请求有效期';
$string['privacyrequestexpiry_desc'] = '已被同意的数据请求的下载有效期。如果设为0，则没有时间限制。';
$string['purpose'] = '意图';
$string['purpose_help'] = '意图描述了处理数据的原因。可以添加一个新的意图，或者应用更高层的上下文继承下来的意图（如果继承选项已勾选的话）。上下文包括（从低到高）：板块 > 活动模块 > 课程 > 课程类别 > 用户 > 站点。';
$string['purposecreated'] = '意图已创建。';
$string['purposedefault'] = '默认意图';
$string['purposedefault_help'] = '默认意图将会应用到所有新实例上。如果继承选项勾选，将应用上一层上下文的意图。上下文包括（从低到高）：板块 > 活动模块 > 课程 > 课程类别 > 用户 > 站点。';
$string['purposeoverview'] = '意图描述了所存储数据的使用意图和保留策略。该数据的存储和回收准则也在意图中描述。';
$string['purposes'] = '意图';
$string['purposeslist'] = '意图列表';
$string['purposeupdated'] = '意图已更新';
$string['replyto'] = '回复给';
$string['requestactions'] = '操作';
$string['requestapproved'] = '请求已被同意';
$string['requestby'] = '请求来自';
$string['requestbydetail'] = '请求来自：';
$string['requestcreation'] = '创建';
$string['requestdenied'] = '请求已被拒绝';
$string['requestemailintro'] = '您收到了一条数据请求：';
$string['requestfor'] = '用户';
$string['requestmarkedcomplete'] = '请求已被标记为完成';
$string['requestorigin'] = '站点';
$string['requestsapproved'] = '请求已被同意';
$string['requestsdenied'] = '请求已被拒绝';
$string['requestsubmitted'] = '您的请求已被提交给隐私保护官';
$string['requesttypedeleteshort'] = '删除';
$string['requesttypeexportshort'] = '导出';
$string['requesttypeothers'] = '通用请求';
$string['requesttypeothersshort'] = '消息';
$string['requireallenddatesforuserdeletion'] = '将没有结束日期的课程视为活跃的';
$string['requireallenddatesforuserdeletion_desc'] = '当计算用户有效期时，以下几个因素在考虑范围内：<br/>
- 该用户的最后登录时间与用户数据保留期限做比较；并且 <br/>
- 该用户没有有效注册到任何一门课程。<br/><br/>
当检查是否有效注册到某一门课程时，如果该课程没有结束时间，这个开关选项将决定在该课程的注册是有效的还是无效的。<br/>
如果课程没有结束日期，并且此选项勾选了，则该用户不能被删除。';
$string['requiresattentionexplanation'] = '此插件没有实现Moodle隐私API。如果此插件保存了用户的个人数据，这些数据将无法通过Moodle的隐私系统导出或者删除。';
$string['resubmitrequest'] = '为用户{$a->username}重新发送 {$a->type} 请求';
$string['resubmitrequestasnew'] = '作为新请求重新发送';
$string['resubmittedrequest'] = '用户{$a->username}现有的 {$a->type} 请求已经取消并重新发送';
$string['resultdeleted'] = '您最近请求删除{$a}中的账号和个人数据。该删除过程已经完成，您已无法登录。';
$string['resultdownloadready'] = '您最近请求导出的{$a} 中的个人数据副本已经准备好，可以通过下面的链接下载。';
$string['retentionperiod_help'] = '保留期设定数据应当保留的时间长度。当保留期满时，数据将被标记并列出来等待管理员确认来删除。';
$string['retentionperiodnotdefined'] = '没有设置数据保留期限';
$string['retentionperiodzero'] = '无数据保留期限';
$string['reviewdata'] = '检查数据';
$string['role'] = '角色';
$string['role_help'] = '覆盖政策应用的角色';
$string['roleoverrideoverview'] = '指定用户角色的默认保留政策可以被覆盖，以便您设置一个更长或者更短的保留政策。用户拥有的所有角色都期满后，该用户才会被认为期满。';
$string['roleoverrides'] = '角色覆盖政策';
$string['selectbulkaction'] = '请选择一个批量操作';
$string['selectdatarequests'] = '请选择数据请求';
$string['selectuserdatarequest'] = '选择{$a->username}的{$a->requesttype} 数据请求。';
$string['send'] = '发送';
$string['sensitivedatareasons'] = '敏感用户数据处理原因';
$string['sensitivedatareasons_help'] = '选择一个或多个适当的原因，该等原因可使禁止处理本意图关联的个人敏感信息的禁令被豁免。更多信息请参阅<a href="https://gdpr-info.eu/art-9-gdpr/" target="_blank">GDPR Art. 9.2</a>';
$string['showdataretentionsummary'] = '显示数据保留概况';
$string['showdataretentionsummary_desc'] = '如果启用，在页脚和用户个人档案中将显示一个指向数据保留概况页面的链接。';
$string['statusapproved'] = '同意';
$string['statusawaitingapproval'] = '等待同意';
$string['statuscomplete'] = '完成';
$string['statusdeleted'] = '删除';
$string['statusexpired'] = '过期';
$string['statuspending'] = '待定';
$string['statuspreprocessing'] = '预处理';
$string['statusprocessing'] = '处理中';
$string['statusready'] = '可下载';
$string['statusrejected'] = '拒绝';
$string['subjectscope'] = '主体范围';
$string['subjectscope_help'] = '主体范围列出在本上下文中指定的角色';
$string['summary'] = '数据保留概况';
$string['systemconfignotsetwarning'] = '没有定义站点层级的意图和类别，这样的话，当处理删除请求时，所有数据将会被移除。';
$string['tobedeleted'] = '待删除数据';
$string['unexpiredrolewithretention'] = '{$a->retention}（未过期）';
$string['user'] = '用户';
$string['userlistexplanation'] = '此插件已有基本功能实现，但还应实现用户列表已提供完整的隐私功能。';
$string['userlistnoncompliant'] = '没有用户列表功能';
$string['viewrequest'] = '查看请求';
$string['visible'] = '扩展全部';

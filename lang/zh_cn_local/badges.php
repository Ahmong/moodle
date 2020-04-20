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
 * @subpackage badges
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addbackpack'] = '添加徽章背包';
$string['addedtobackpack'] = '徽章已添加至徽章背包';
$string['addtobackpack'] = '添加进徽章背包';
$string['allowexternalbackpack'] = '允许连接到外部徽章背包';
$string['allowexternalbackpack_desc'] = '允许用户通过网络连接展示他们保存在外部徽章背包服务中心处的徽章。 提示：当无法从 Internet 访问此站点时（例如防火墙等造成的原因），建议禁用此选项。';
$string['apiversion'] = '支持的API版本';
$string['archivehelp'] = '<p>这个选项表示徽章将被标记为“退役”，将不再出现在徽章列表中。用户将不再能够获得这枚徽章，然而现有的徽章获得者仍然可以在他们的个人档案页面显示这个徽章并将它推到外部徽章背包。</p> <p>如果您想让用户仍然能够保持获得的徽章，请选择此选项而不是完全删除徽章。</p>';
$string['backpackapiurl'] = '徽章背包 API URL';
$string['backpackavailability_help'] = '为了能让徽章容器验证从你这里获得的徽章，一个外部徽章背包服务应该能访问您的站点并验证所颁发的徽章的有效性。您的站点目前无法访问，意味着您已经颁发的徽章或将要颁发的徽章都无法得到验证。 **为什么我会看到这条信息？** 可能是您的防火墙拒绝了您的网络外部的用户访问，或者您的站点有密码保护，或者您的站点运行在了一台互联网无法访问的电脑上（比如一台本地开发用机器）。 **是出问题了吗？** 如果您打算在任何一个投入实际应用的站点上颁发徽章，那么你应该解决这个问题，否则容器是无法验证从您这里获得的徽章的。如果您的站点还没有投入实际应用，您可以建立并发布测试徽章，直到您的站点可以被外部访问。 **如果我无法让我的整个站点被公开访问，该怎么办？** 验证仅仅需要一个网址，那就是[your-site-url]/badges/assertion.php，因此您只需要修改防火墙规则允许外部可访问这个文件，验证就可以进行了。';
$string['backpackbadges'] = '您从 {$a->totalcollections} 搜集的徽章有 {$a->totalbadges} 个已显示。 <a href="mybackpack.php">修改背包设置</a>。';
$string['backpackbadgessettings'] = '更改徽章背包设置';
$string['backpackconnection'] = '徽章背包连接';
$string['backpackconnection_help'] = '本页允许你设置一个访问外部背包服务的链接。背包链接让您显示外部勋章到自己的站点，也可以推送本地获得的勋章到您的外部背包。 当前，仅<a href="http://backpack.openbadges.org">Mozilla OpenBadges Backpack</a>被支持。在您尝试在这个页面建立一个背包链接前，你需要注册一个背包服务。';
$string['backpackconnectionconnect'] = '连接到徽章背包';
$string['backpackconnectionunexpectedmessage'] = '徽章背包返回错误：“{$a}”。';
$string['backpackconnectionunexpectedresult'] = '连接徽章背包出现问题。请再次尝试。<br><br>如果该问题继续发生，请联系管理员。';
$string['backpackdetails'] = '徽章背包设置';
$string['backpackemail_help'] = '此邮件地址关联了您的徽章背包。当您连接时，任何在此站点获得的徽章将与此邮件地址关联。';
$string['backpackemailverifyemailbody'] = 'Hi，从\'{$a->sitename}\'来的使用您的邮箱地址的徽章背包连接请求已经到达。要确认并激活此连接，请用邮件客户端点击{$a->link}。如果无法打开连接，请复制并黏贴此地址到浏览器地址栏。如需帮助，请联系网站管理员{$a->admin}。';
$string['backpackemailverifyemailsubject'] = '{$a}:开放徽章背包的邮箱验证';
$string['backpackemailverifypending'] = '一封验证邮件已经发送到<strong>{$a}</strong>。点击邮件中的验证连接来激活您的徽章背包连接。';
$string['backpackemailverifysuccess'] = '感谢您的邮箱验证。您现在已经连接到了您的徽章背包。';
$string['backpackimport_help'] = '背包连接成功建立后，你的背包中的徽章可以显示在“我的徽章”页面和您的个人档案页面。 在这个区域，你可以从背包中选择收藏徽章，以便在你的个人档案页显示。';
$string['backpackneedsupdate'] = '连接到此个人档案的徽章背包无法匹配此站点的徽章背包。请您断开并重新连接此徽章背包。';
$string['backpacksettings'] = '徽章背包设置';
$string['backpackweburl'] = '徽章背包URL';
$string['badgesalt_desc'] = '提供一个哈希串给徽章服务中心，以便确保勋章获得者不会暴露他们的 email 地址。此项设计只能填入数字和字母。 注意：为了保证有效验证收件人，一旦你开始发行徽章请避免更改此设置。';
$string['defaultissuercontact'] = '徽章颁发者邮箱地址';
$string['defaultissuercontact_desc'] = '徽章颁发者的关联邮箱地址。在Open Badges v2.0背包中，这个邮箱地址用来认证发布到背包中的徽章。';
$string['defaultissuername'] = '徽章颁发者名称';
$string['defaultissuerpassword'] = '徽章颁发者口令';
$string['defaultissuerpassword_help'] = '在徽章背包站点需要一个邮箱地址作为账号，该邮箱地址在“网站管理/徽章/徽章设置“中的徽章颁发者参数中设置。在这里输入该账号的口令。';
$string['deletehelp'] = '<P>完全删除一个徽章，意味着所有的信息和标准的记录将被永久删除。赢得了这枚徽章的用户将不再能够访问和显示在个人档案页。</P > <P>注：赢得了这枚徽章的用户，如果已经把它推到外部背包，仍可在其外部的背包中拥有这个徽章。然而，他们将不能访问链接到本站点的徽章标准和依据网页。</P >';
$string['delexternalbackpackconfirm'] = '删除站点徽章背包“{$a}”吗？';
$string['error:backpackdatainvalid'] = '从徽章背包返回的数据是无效的。';
$string['error:backpacknotavailable'] = '您的站点无法通过 Internet 访问，故此站点下颁发的徽章均不能被外部徽章背包服务中心确认。';
$string['error:nogroups'] = '<p>您的背包中没有有效的公开徽章集。 </p> <p>仅显示公开徽章集, <a href="http://backpack.openbadges.org">浏览您的背包</a> 创建公开徽章集。</p>';
$string['error:nogroupslink'] = '<p>只显示公共徽章集。在<a href="{$a}" target="_blank" rel="nofollow">查看您的背包</a>中创建公共徽章集。</p>';
$string['error:nogroupssummary'] = '<p>您的徽章背包中没有可用的公共徽章集</p>';
$string['error:nosuchuser'] = '此电子邮件地址的用户没有在当前背包供应商上拥有账号。';
$string['existsinbackpack'] = '徽章背包中已有此徽章';
$string['externalbadges_help'] = '此处展示您外部背包中的徽章。';
$string['listbackpacks'] = '徽章背包列表';
$string['localbadgesh_help'] = '所有在此站点通过完成课程、课程活动和其他要求获得的徽章。您可在此管理您的徽章，设置为个人档案中的公共或者私有徽章。您可以下载这些徽章并保存到您的电脑中。下载的徽章可以添加至外部徽章背包服务站点。';
$string['localconnectto'] = '分享这些徽章到外部网站，您需要< a href ="{$a}“>连接到背包</a>。';
$string['managebackpacks'] = '管理徽章';
$string['mybackpack'] = '我的徽章背包设置';
$string['nobackpack'] = '没有徽章背包服务连接到这个帐户。<br/>';
$string['nobackpackbadges'] = '在你所选择的集合没有徽章。<a href="mybackpack.php">添加更多集合</a>。';
$string['nobackpackcollections'] = '没有选中的徽章集。<a href="mybackpack.php">添加徽章集</a>。';
$string['nobackpacks'] = '没有可用的徽章背包';
$string['privacy:metadata:backpack'] = '用户徽章背包记录';
$string['privacy:metadata:backpack:backpackuid'] = '徽章背包唯一标识符';
$string['privacy:metadata:backpack:email'] = '徽章背包关联的邮箱地址';
$string['privacy:metadata:backpack:externalbackpackid'] = '徽章背包的ID';
$string['privacy:metadata:backpack:userid'] = '徽章背包所属用户的ID';
$string['privacy:metadata:external:backpacks'] = '当向外部勋章背包提交勋章时共享的信息';
$string['selectgroup_end'] = '仅显示公共徽章集，在<a href="{$a}">访问您的徽章背包</a>中创建更多公共徽章集。';
$string['selectgroup_start'] = '从您的徽章背包中选择徽章集以在此站点显示。';
$string['sitebackpack'] = '活跃的外部徽章背包';
$string['sitebackpack_help'] = '在此站点可以连接的外部背包集。注意：如更改此设置，已连接徽章背包的用户将需要进到徽章背包设置页面，断开连接后再重新连接。';
$string['sitebackpackverify'] = '徽章背包连接';
$string['sitebackpackwarning'] = '无法连接到徽章背包。<br/><br/>
请检查“徽章颁发者邮箱地址”参数值是否是徽章背包站点上的有效的账号所用的邮箱地址。<br/><br/>
检查“徽章颁发者口令“参数是否正确。<a href="{$a->url}">站点徽章背包设置页</a><br/><br/>
徽章背包返回值："{$a->warning}"';

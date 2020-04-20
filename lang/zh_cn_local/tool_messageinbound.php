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
 * @subpackage messageinbound
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = '类名';
$string['incomingmailserversettings_desc'] = 'Moodle可以连接到配置正确的IMAP服务器。您可以在这里设置IMAP服务器连接参数。';
$string['invalid_recipient_handler'] = '若收到一条有效消息，但无法验证发信人，这条消息将会存储在邮件服务器上，并会以发信人的个人资料里的地址来联系发信人。这让该用户有机会回复以确认原来那条消息是由他发送的。<br/>
这个处理程序是用来处理这些回复的。<br/> 
这个处理程序的发信人验证是无法关闭的，因为若他们的email客户端配置错误，该用户会从一个错误的地址回复。';
$string['message_handlers'] = '消息处理程序';
$string['messageinbound'] = '站内消息';
$string['messageinboundenabled_desc'] = '接收邮件处理程序必须开启才能让消息发送出去。';
$string['messageinboundgeneralconfiguration'] = '常规设置';
$string['messageinboundgeneralconfiguration_desc'] = '站内消息处理程序允许您在Moodle系统内接收和处理email。它可以用来以email来回应讨论区的贴文，或添加文件到用户的私人文件存储空间。';
$string['messageinboundmailboxconfiguration_desc'] = '当消息发出时，它们将组合成 address+data@example.com 的格式。要想让Moodle可靠地产生地址，请在@符号之前指定一个你平时使用的地址，并在@符号后指定一个域名。 举例来说，邮箱名称是 "address"，域名就是 "example.com"。为此，你应该使用一个专用的emai帐号。';
$string['messageprocessingsuccess'] = '{$a->plain} 若不想继续收到这些通知，你可以在你的浏览器上开启 {$a->messagepreferencesurl}，然后设置你的个人消息偏好。';
$string['messageprocessingsuccesshtml'] = '{$a->html} <p>若不想继续收到这些通知，你可以<a href="{$a->messagepreferencesurl}">编辑你的个人消息偏好</a>。</p>';
$string['messageprovider:invalidrecipienthandler'] = '用于确认某条站内消息是否由您发送的消息';
$string['messageprovider:messageprocessingerror'] = '站内消息无法处理时提出警告';
$string['messageprovider:messageprocessingsuccess'] = '确认一条消息已经处理完成';
$string['oldmessagenotfound'] = '你尝试手动确认消息，但找不到该消息。这可能是它已经被处理，或者消息已过期。';
$string['pluginname'] = '站内消息设置';

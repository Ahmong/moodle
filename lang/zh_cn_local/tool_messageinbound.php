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
 * @subpackage messageinbound
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['classname'] = '类名';
$string['invalid_recipient_handler'] = '若收到一封有效邮件消息，但无法验证发送者，这个消息会被储存在邮件服务器上，并会以发送者的个人资料里的地址来联系发信者。让该用户有机会回复以确认这个消息是由他发送的。 这个处理程序是用来处理这些回复。 这个处理程序的发送者验证是无法关闭的，因为若他们的email客户端配置错误，该用户会从一个错误的地址回复。';
$string['invalidrecipientdescription'] = '这条 "{$a->subject}" 邮件消息无法验证，因为不是从您的个人资料里的email地址，而是从不同的email地址所发送。若要让这个消息能被验证，您需要回复该消息。';
$string['invalidrecipientdescriptionhtml'] = '这条 "{$a->subject}" 邮件消息无法验证，因为不是从您的个人资料里的地址，而是从不同的email地址所发送。若要让这个消息能被认证，您需要回复该消息。';
$string['invalidrecipientfinal'] = '这一封 "{$a->subject}" 无法验证，请检查是否是从您的个人资料里的email地址发送的。';
$string['messageinboundgeneralconfiguration_desc'] = '站内消息处理程序允许您在Moodle系统内接收和处理email。它可以用来以email来回复讨论区的贴文，或添加文件到用户的个人文件。';
$string['validateaddress_help'] = '当从一用户收到一封email时，Moodle会比较发信者的地址和他们个人资料里的地址是否相同，以进行验证。 若两个地址不吻合，那么那个发信者会收到一个通知，以确认他们是否确实发出这封email。 若这个设定被关闭，Moodle就不会检查发信者的地址。';

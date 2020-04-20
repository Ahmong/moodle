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
 * @package    filter
 * @subpackage displayh5p
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedsourceslistdesc'] = '一组用户可用作内嵌H5P内容的URL。如果不指定任何URL，所有URL都显示为链接而不是显示为内嵌的H5P内容。\'[id]\'是外部资源中H5P内容ID的占位符。例如：
<ul><li>H5P.com: https://[xxxxxx].h5p.com/content/[id] </li>
<li>Wordpress: http://myserver/wp-admin/admin-ajax.php?action=h5p_embed&id=[id]</li></ul>';
$string['filtername'] = '显示H5P';
$string['privacy:metadata'] = '显示H5P过滤器不保存任何个人数据。';

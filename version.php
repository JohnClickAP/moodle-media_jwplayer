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
 *  JW Player media plugin.
 *
 * @package    media_jwplayer
 * @copyright  2017 Ruslan Kabalin, Lancaster University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2018082400;        // The current plugin version (Date: YYYYMMDDXX).
$plugin->requires  = 2018051700;        // Requires Moodle 3.5
$plugin->component = 'media_jwplayer'; // Full name of the plugin (used for diagnostics).
$plugin->maturity = MATURITY_STABLE;
$plugin->release   = '7-0.3 for Moodle 3.5+, JW7 CDN 7.12.13)';

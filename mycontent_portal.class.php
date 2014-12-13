<?php
/*	Project:	EQdkp-Plus
 *	Package:	MyContent Portal Module
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}

class mycontent_portal extends portal_generic {

	protected static $path		= 'mycontent';
	protected static $data		= array(
		'name'			=> 'Custom Content Module',
		'version'		=> '2.0.1',
		'author'		=> 'WalleniuM',
		'icon'			=> 'fa-code',
		'contact'		=> EQDKP_PROJECT_URL,
		'description'	=> 'Output a custom content',
		'multiple'		=> true,
		'lang_prefix'	=> 'mycontent_'
	);
	protected static $positions = array('middle', 'left1', 'left2', 'right', 'bottom');
	protected $settings	= array(
		'useroutput'	=> array(
			'type'		=> 'textarea',
			'cols'		=> '40',
			'rows'		=> '8',
			'codeinput'	=> true,
		),		
	);
	protected static $install	= array(
		'autoenable'		=> '0',
		'defaultposition'	=> 'right',
		'defaultnumber'		=> '7',
	);
	
	protected static $apiLevel = 20;

	public function output() {
		return xhtml_entity_decode(htmlspecialchars_decode($this->config('useroutput')));
	}
}
?>
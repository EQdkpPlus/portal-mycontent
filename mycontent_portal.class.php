<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2008
 * Date:		$Date: 2012-05-01 13:28:27 +0200 (Di, 01. Mai 2012) $
 * -----------------------------------------------------------------------
 * @author		$Author: hoofy_leon $
 * @copyright	2006-2011 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev: 11769 $
 * 
 * $Id: mycontent_portal.class.php 11769 2012-05-01 11:28:27Z hoofy_leon $
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

	public function output() {
		return xhtml_entity_decode(htmlspecialchars_decode($this->config('useroutput')));
	}
}
?>
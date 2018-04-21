<?php
/**
 * Value Plugger Module Entry Point
 * 
 * @package    Value Plugger
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 * @link       http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * mod_sitemembers is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

$updatedhtml = modValuePluggerHelper::getDataValue($params);

if ($params->def('prepare_content', 1))
{
	JPluginHelper::importPlugin('content');
	$updatedhtml = JHtml::_('content.prepare', $updatedhtml, '', 'mod_valueplugger.content');
}

require JModuleHelper::getLayoutPath('mod_valueplugger');
<?php
/**
 * @package Module A Simple Hit Counter for Joomla! 2.5
 * @version $Id: mod_asimplehitcounter.php 1 2012-09-07 14:00:00Z Peter Vavro $
 * @author Peter Vavro
 * @copyright (C) 2012- Peter Vavro
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/

// no direct access
defined('_JEXEC') or die;

// Include the helper.
require_once dirname(__FILE__) . '/helper.php';

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_asimplehitcounter', $params->get('layout', 'default'));

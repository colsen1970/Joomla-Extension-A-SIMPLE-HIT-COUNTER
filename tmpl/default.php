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
?>

<div class="asimple-hit-counter<?php echo $moduleclass_sfx ?>">
	<?php echo ModASipmleHitCounteHelper::displayHits($stored); ?>
	<?php if ($params->get('title_after')) : ?>
		<?php echo JText::_('MOD_ASIMPLEHITCOUNTER_TITLE_BEFORE_LABEL'); ?>
	<?php endif; ?>
</div>

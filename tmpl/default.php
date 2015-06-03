<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_newsh2n
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div class="newsflash<?php echo $moduleclass_sfx; ?>">
	<?php foreach ($list as $item) : ?>
		<?php require JModuleHelper::getLayoutPath('mod_articles_newsh2n', '_item'); ?>
	<?php endforeach; ?>
</div>

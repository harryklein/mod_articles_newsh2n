<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_newsh2n
 *
 * @author    Harry Klein
 * @author    TemplateMonster http://www.templatemonster.com
 * @copyright Copyright (C) 2015 Harry Klein
 * @copyright Copyright (C) 2012 - 2013 Jetimpex, Inc.
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 
 * 
 * 
 */
defined('_JEXEC') or die();

$n = count($list);

$document = JFactory::getDocument();
$baseUrl = JURI::base() . 'modules/mod_articles_newsh2n/';
$document->addStyleSheet($baseUrl . 'css/style.css');

?>

<div
	class="newsflash-multicolumn<?php echo $params->get('moduleclass_sfx'); ?>">

  <?php if ($params->get('pretext')): ?>
    <div class="pretext">
      <?php echo $params->get('pretext')?>
    </div>
  <?php endif; ?>      
    <div>  
      <?php
    
    for ($i = 0, $n; $i < $n; $i ++) :
        $item = $list[$i];
        
        if ($n - 1 < $columns) {
            $columns = $n - 1;
        }
        
        // nur die letzen $culmnns Einträge nebeneinander darstellen, den ersten bzw. die ersten
        // immer in einer Spalte
        if ($i == 0 || ($n - $i) > $columns) {
            $class = "news-columns1";
        } else {
            $class = "news-columns$columns";
        }
        ?>
        <div
			class="item item_num<?php echo $i; ?> <?php echo $class; ?>">
          <?php require JModuleHelper::getLayoutPath('mod_articles_newsh2n', '_item'); ?>
        </div>
      <?php endfor; ?>
    </div>

	<div class="newsflash-multicolumn-clearfix"></div>

</div>
<?php
/**
 * Articles Newsflash Advanced
 *
 * @author    TemplateMonster http://www.templatemonster.com
 * @copyright Copyright (C) 2012 - 2013 Jetimpex, Inc.
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 
 * Parts of this software are based on Articles Newsflash standard module
 * 
 */
defined('_JEXEC') or die();
$n = count($list);

$columns = 2;
?>

<div
	class="newsflash-multicolumn<?php echo $params->get('moduleclass_sfx'); ?>">

  <?php if ($params->get('pretext')): ?>
    <div class="pretext">
      <?php echo $params->get('pretext')?>
    </div>
  <?php endif; ?>      
    <div class="mod-newsflash-adv_row">  
      <?php
    
for ($i = 0, $n; $i < $n; $i ++) :
        $item = $list[$i];
        
        $class = "";
        if ($i == $n - 1) {
            $class = "lastItem";
        }
        
        if ($i == 0) {
            $width = 100 - 1;
        } else {
            $width = 100 / $columns - 1;
        }
        ?>
        <div class="item item_num<?php echo $i; ?> item__module  <?php echo $class; ?>" style="padding-right:1%; width:<?php echo $width; ?>%; float: left;">
          <?php require JModuleHelper::getLayoutPath('mod_articles_news_h2n', '_item'); ?>
        </div>
      <?php endfor; ?>
    </div>

	<div class="clearfix"></div>

</div>
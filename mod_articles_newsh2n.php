<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_newsh2n
 * 
 * @copyright   Copyright (C) 2015 Harry Klein 
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

require_once __DIR__ . '/helper.php';

$list            = ModArticlesNewsHelper::getList($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$columns         = $params->get('columns',3);

require JModuleHelper::getLayoutPath('mod_articles_newsh2n', $params->get('layout', 'horizontal'));

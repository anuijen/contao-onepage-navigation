<?php 

/**
 * @package     Onepage Navigation
 * @author      Sascha Brandhoff (https://github.com/Sascha-Brandhoff/onepage-navigation)
 * @author      Basti Buck (http://www.bastibuck.de)
 * @license     LGPLv3
 * @copyright   Erdmann & Freunde (https://erdmann-freunde.de)
 */



/**
 * Frontend-Modules
 **/
array_insert($GLOBALS['FE_MOD']['navigationMenu'], count($GLOBALS['FE_MOD']['navigationMenu']), array
(
	'onepage_navigation'     => 'EuF\OnepageNavigation\Modules\ModuleOnepageNavigation'
));

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('EuF\OnepageNavigation\Hooks\OnepageHooks', 'replaceScrollTag');


/**
 * Javascript
 **/
$GLOBALS['TL_JQUERY']['scrollToJS'] = '<script src="bundles/eufonepagenavigation/jquery.scrollTo.min.js"></script>';
$GLOBALS['TL_JQUERY']['onepageJS'] = '<script src="bundles/eufonepagenavigation/onepage.js"></script>';
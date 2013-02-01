<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// modifies the doctype to the HTML5 boilerplate style
// $TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-postProcess']['tx_bootstrapstyledcontent'] = 'Tx_BootstrapStyledContent_Service_DoctypeService->addDoctypeCondition';
$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_fe.php']['contentPostProc-all']['tx_bootstrapstyledcontent'] = 'Tx_BootstrapStyledContent_Service_DoctypeService->addDoctypeCondition';
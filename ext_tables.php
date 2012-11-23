<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// include Bootstrap styled content
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', 'Bootstrap Styled Content normal');

// fix "media" CE to have a preview image
t3lib_extMgm::addToAllTCAtypes('tt_content', 'image;Preview Image', 'media', 'after:pi_flexform');

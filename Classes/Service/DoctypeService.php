<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Benjamin Mack <benni@typo3.org>
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
/**
 * service class to modify the doctype to have Microsoft IE switches
 * filled with the right language (according to HTML5 boilerplate)
 * in the TYPO3 Frontend
 * 
 * all you need to set the following options via TypoScript
 *     config.doctype = html5
 *     config.doctype.enableBoilerplateCondition = 1
 *
 * 
 *	<!DOCTYPE html>
 *	<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="de"> <![endif]-->
 *	<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="de"> <![endif]-->
 *	<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="de"> <![endif]-->
 *	<!--[if IE 9]>    <html class="no-js ie9" lang="de"> <![endif]-->
 *	<!--[if gt IE 9]><!-->
 *	<html lang="de">
 *	<!--<![endif]-->
 * 
 * @package bootstrap_styled_content
 *
 */
class Tx_BootstrapStyledContent_Service_DoctypeService {
	
	/**
	 * hook for the postRenderer in the page Renderer class
	 * modifies the doctype statement
	 *
	 * @param array $params
	 * @param \TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController $parentObject
	 */
	public function addDoctypeCondition(&$params, $parentObject) {
		if ($parentObject->config['config']['doctype'] === 'html5'
			&& $parentObject->config['config']['doctype.']['enableBoilerplateCondition'] == 1) {
				$langKey = $parentObject->config['config']['htmlTag_langKey'] ? $parentObject->config['config']['htmlTag_langKey'] : 'en';
				$htmlTag = '
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="' . $langKey . '"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7 oldie" lang="' . $langKey . '"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 oldie" lang="' . $langKey . '"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9" lang="' . $langKey . '"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="' . $langKey . '">
<!--<![endif]-->
';
				$pageRenderer = $parentObject->getPageRenderer();
				$existingHtmlTag = $pageRenderer->getHtmlTag();
				$parentObject->content = str_replace($existingHtmlTag, trim($htmlTag), $parentObject->content);
		}
	}
}
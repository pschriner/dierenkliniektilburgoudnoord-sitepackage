<?php
defined('TYPO3') or die('Access denied.');
/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['dierenkliniektilburgoudnoord'] = 'EXT:dierenkliniektilburgoudnoord_sitepackage/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:dierenkliniektilburgoudnoord_sitepackage/Configuration/TsConfig/Page/All.tsconfig">');

<?php
/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['dierenkliniektilburgoudnoord'] = 'EXT:dierenkliniektilburgoudnoord_sitepackage/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */

$versionInformation = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class);
// Only include page.tsconfig if TYPO3 version is below 12 so that it is not imported twice.
if ($versionInformation->getMajorVersion() < 12) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig("@import 'EXT:dierenkliniektilburgoudnoord_sitepackage/Configuration/page.tsconfig'");
}

<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Default TypoScript for Dierenkliniektilburgoudnoord
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'dierenkliniektilburgoudnoord_sitepackage',
        'Configuration/TypoScript',
        'dierenkliniektilburgoudnoord'
    );
});

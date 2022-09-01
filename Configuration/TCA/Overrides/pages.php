<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Default PageTS for Dierenkliniektilburgoudnoord
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        'dierenkliniektilburgoudnoord_sitepackage',
        'Configuration/TsConfig/Page/All.tsconfig',
        'dierenkliniektilburgoudnoord'
    );
});

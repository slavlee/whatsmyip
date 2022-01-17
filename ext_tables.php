<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Slavlee.Whatsmyip',
            'Pi1',
            'Show my IP'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('whatsmyip', 'Configuration/TypoScript', 'Whats My IP');

    }
);

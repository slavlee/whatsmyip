<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Slavlee.Whatsmyip',
            'Pi1',
            [
                'IP' => 'show'
            ],
            // non-cacheable actions
            [
                'IP' => 'show'
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        pi1 {
                            iconIdentifier = whatsmyip-plugin-pi1
                            title = LLL:EXT:whatsmyip/Resources/Private/Language/locallang_db.xlf:tx_whatsmyip_pi1.name
                            description = LLL:EXT:whatsmyip/Resources/Private/Language/locallang_db.xlf:tx_whatsmyip_pi1.description
                            tt_content_defValues {
                                CType = list
                                list_type = whatsmyip_pi1
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
		$iconRegistry->registerIcon(
			'whatsmyip-plugin-pi1',
			\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
			['source' => 'EXT:whatsmyip/Resources/Public/Icons/user_plugin_pi1.svg']
		);
		
    }
);

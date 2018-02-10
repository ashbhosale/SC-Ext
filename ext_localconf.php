<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'ServiceChargeExtension.Servicechargeextension',
            'Scinfo',
            [
                'ServiceChargeModel' => 'list, show, new, create, edit, update, delete, '
            ],
            // non-cacheable actions
            [
                'ServiceChargeModel' => 'create, update, delete, '
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    scinfo {
                        iconIdentifier = servicechargeextension-plugin-scinfo
                        title = LLL:EXT:servicechargeextension/Resources/Private/Language/locallang_db.xlf:tx_servicechargeextension_scinfo.name
                        description = LLL:EXT:servicechargeextension/Resources/Private/Language/locallang_db.xlf:tx_servicechargeextension_scinfo.description
                        tt_content_defValues {
                            CType = list
                            list_type = servicechargeextension_scinfo
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'servicechargeextension-plugin-scinfo',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:servicechargeextension/Resources/Public/Icons/user_plugin_scinfo.svg']
			);
		
    }
);

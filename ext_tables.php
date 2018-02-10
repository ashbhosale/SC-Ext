<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'ServiceChargeExtension.Servicechargeextension',
            'Scinfo',
            'SC-Info'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('servicechargeextension', 'Configuration/TypoScript', 'ServiceChargeExtension');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_servicechargeextension_domain_model_servicechargemodel', 'EXT:servicechargeextension/Resources/Private/Language/locallang_csh_tx_servicechargeextension_domain_model_servicechargemodel.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_servicechargeextension_domain_model_servicechargemodel');

    }
);

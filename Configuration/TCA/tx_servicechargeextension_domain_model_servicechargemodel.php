<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:servicechargeextension/Resources/Private/Language/locallang_db.xlf:tx_servicechargeextension_domain_model_servicechargemodel',
        'label' => 'servicetype',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'servicetype,chargesin_i_n_r,mindaystodeliver,rangeofareainkm',
        'iconfile' => 'EXT:servicechargeextension/Resources/Public/Icons/tx_servicechargeextension_domain_model_servicechargemodel.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, servicetype, chargesin_i_n_r, mindaystodeliver, rangeofareainkm',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, servicetype, chargesin_i_n_r, mindaystodeliver, rangeofareainkm, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_servicechargeextension_domain_model_servicechargemodel',
                'foreign_table_where' => 'AND tx_servicechargeextension_domain_model_servicechargemodel.pid=###CURRENT_PID### AND tx_servicechargeextension_domain_model_servicechargemodel.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'behaviour' => [
                'allowLanguageSynchronization' => true
            ],
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => 13,
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],

        'servicetype' => [
            'exclude' => true,
            'label' => 'LLL:EXT:servicechargeextension/Resources/Private/Language/locallang_db.xlf:tx_servicechargeextension_domain_model_servicechargemodel.servicetype',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'chargesin_i_n_r' => [
            'exclude' => true,
            'label' => 'LLL:EXT:servicechargeextension/Resources/Private/Language/locallang_db.xlf:tx_servicechargeextension_domain_model_servicechargemodel.chargesin_i_n_r',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'mindaystodeliver' => [
            'exclude' => true,
            'label' => 'LLL:EXT:servicechargeextension/Resources/Private/Language/locallang_db.xlf:tx_servicechargeextension_domain_model_servicechargemodel.mindaystodeliver',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'rangeofareainkm' => [
            'exclude' => true,
            'label' => 'LLL:EXT:servicechargeextension/Resources/Private/Language/locallang_db.xlf:tx_servicechargeextension_domain_model_servicechargemodel.rangeofareainkm',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
    
    ],
];

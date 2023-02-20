<?php

defined('TYPO3') or die();

$typo3Version = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class);
if (version_compare($typo3Version->getVersion(), '10.0', '<')) {
    $interface = [
    	'showRecordFieldList' => ''
    ];
} else {
    $interface = [];
}
return [
    'ctrl' => [
        'title' => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table5',
        'label' => 'uid',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'crdate',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:sav_librarymvc_example0/Resources/Public/Icons/icon_tx_savlibrarymvcexample0_domain_model_table5.gif',
        'EXT' => [
            'sav_librarymvc_example0' => [
                'ctrl' => [
                ],
                'columns' => [
                    'field1' => [
                        'fieldType' => 'String',
                        'config' => [
                            1 => [
                                'selected' => 0,
                             ],
                            2 => [
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'selected' => 1,
                             ],
                            4 => [
                                'selected' => 0,
                             ],
                            5 => [
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                            3 => '6',
                            2 => '6',
                            1 => '',
                        ],
                       'order' => [
                            1 => 1,
                            2 => 1,
                            3 => 1,
                            4 => 1,
                            5 => 1,
                        ],
                    ],
                    'field2' => [
                        'fieldType' => 'RelationManyToManyAsSubform',
                        'foreignModel' => '\YolfTypo3\SavLibrarymvcExample0\Domain\Model\Table6',
                        'config' => [
                            1 => [
                                'selected' => 0,
                             ],
                            2 => [
                                'subformKey' => 3,
                                'selected' => 1,
                             ],
                            3 => [
                                'edit' => 1,
                                'subformKey' => 3,
                                'addDelete' => '1',
                                'selected' => 1,
                             ],
                            4 => [
                                'subformKey' => 3,
                                'selected' => 0,
                             ],
                            5 => [
                                'subformKey' => 3,
                                'selected' => 0,
                             ],
                        ],
                        'folders' => [
                            3 => '6',
                            1 => '',
                            2 => '6',
                        ],
                       'order' => [
                            1 => 2,
                            2 => 2,
                            3 => 2,
                            4 => 2,
                            5 => 2,
                        ],
                    ],
                ],
            ],
        ],
    ],
    'interface' => $interface,
    'columns' => [
        'hidden' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf.xlf:LGL.hidden',
            'config' => [
                'type'  => 'check',
                'default' => 0,
            ]
        ],
        'cruser_id_frontend' => [
            'config'  => [
                'type' => 'passthrough',
            ],
        ],
        'field1' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table5.field1',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim'
            ],
        ],
        'field2' => [
            'exclude' => 1,
            'label'  => 'LLL:EXT:sav_librarymvc_example0/Resources/Private/Language/locallang_db.xlf:tx_savlibrarymvcexample0_domain_model_table5.field2',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_savlibrarymvcexample0_domain_model_table6',
                'foreign_sortby' => 'sorting',
                'size' => 1,
                'minitems' => 0,
                'maxitems' => 999999,
                'MM' => 'tx_savlibrarymvcexample0_table5_field2_mm',
                'appearance' => [
                    'newRecordLinkPosition' => 'bottom',
                    'collapseAll' => 1,
                    'expandSingle' => 1,
                ],
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'hidden, field1, field2',
        ],
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ],
];


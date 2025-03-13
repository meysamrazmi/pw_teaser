<?php

$pluginSignature = \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'PwTeaser',
    'Pi1',
    'Page Teaser (pw_teaser)',
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:pw_teaser/Configuration/FlexForms/flexform_teaser.xml',
    $pluginSignature
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:plugin, pi_flexform',
    $pluginSignature,
    'after:palette:headers'
);

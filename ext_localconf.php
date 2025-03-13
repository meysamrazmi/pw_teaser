<?php

/*  | This extension is made with love for TYPO3 CMS and is licensed
 *  | under GNU General Public License.
 *  |
 *  | (c) 2011-2022 Armin Vieweg <armin@v.ieweg.de>
 */

if (!defined('TYPO3')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'PwTeaser',
    'Pi1',
    [
        \PwTeaserTeam\PwTeaser\Controller\TeaserController::class => 'index',
    ],
    [],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT,
);

/** @var \TYPO3\CMS\Core\Imaging\IconRegistry $iconRegistry */
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\CMS\Core\Imaging\IconRegistry');
$iconRegistry->registerIcon(
    'ext-pwteaser-wizard-icon',
    'TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider',
    ['source' => 'EXT:pw_teaser/Resources/Public/Icons/Extension_x2.png']
);

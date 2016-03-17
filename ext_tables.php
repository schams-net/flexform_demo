<?php

/*
 * This file is part of the TYPO3 CMS Extension "Flexform Demo"
 * Michael Schams - https://schams.net
 *
 * For copyright and license information, please read the LICENSE.txt
 * file distributed with this source code.
 *
 * @author Michael Schams <schams.net>
 * @package TYPO3 CMS
 * @subpackage flexform_demo
 */

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$pluginName = 'Pi1';
$pluginSignature = preg_replace('/[^a-z0-9]/', '', strtolower($_EXTKEY)) . '_' . strtolower($pluginName);

// Register an Extbase plugin into backend's list of plugins
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	$pluginName,
	'LLL:EXT:flexform_demo/Resources/Private/Language/locallang_db.xlf:plugin.extension_name',
	NULL // icon
);

// FlexForm configuration
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
	$pluginSignature,
	'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_demo.xml'
);

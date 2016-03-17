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

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Flexform Demo',
	'description' => 'TYPO3 extension to demonstrate Flexforms in TYPO3 CMS 7 LTS.',
	'category' => 'misc',
	'version' => '1.0.0',
	'module' => '',
	'state' => 'beta',
	'createDirs' => '',
	'clearcacheonload' => 0,
	'author' => 'Michael Schams (schams.net)',
	'author_email' => 'schams.net',
	'author_company' => 'https://schams.net',
	'constraints' => array(
		'depends' => array(
			'typo3' => '7.6.0-7.6.99',
			'php' => '5.5.0-5.6.999',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	)
);

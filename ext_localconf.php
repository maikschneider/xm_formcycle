<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Xmformcycle',
	array(
		'Formcycle' => 'list',
		
	),
	// non-cacheable actions
	array(
		'Formcycle' => 'list',
		
	)
);

?>
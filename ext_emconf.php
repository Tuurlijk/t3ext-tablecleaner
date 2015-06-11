<?php

########################################################################
# Extension Manager/Repository config file for ext "tablecleaner".
#
# Auto generated 23-07-2014 11:51
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Table Cleaner',
	'description' => 'Removes [deleted/hidden] records older than [N] days from tables.',
	'category' => 'be',
	'shy' => 0,
	'version' => '2.5.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'pages',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Michiel Roos',
	'author_email' => 'extensions@donationbasedhosting.org',
	'author_company' => 'Donation Based Hosting',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5.0-6.2.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:29:{s:9:"Changelog";s:4:"31ff";s:16:"ext_autoload.php";s:4:"adea";s:12:"ext_icon.gif";s:4:"62c8";s:17:"ext_localconf.php";s:4:"057b";s:14:"ext_tables.php";s:4:"2364";s:14:"ext_tables.sql";s:4:"fb87";s:24:"ext_typoscript_setup.txt";s:4:"206e";s:8:"ToDo.txt";s:4:"8f2e";s:43:"Classes/Controller/InfoModuleController.php";s:4:"3679";s:29:"Classes/Domain/Model/Page.php";s:4:"540b";s:44:"Classes/Domain/Repository/PageRepository.php";s:4:"2ac0";s:22:"Classes/Tasks/Base.php";s:4:"f402";s:25:"Classes/Tasks/Deleted.php";s:4:"5692";s:48:"Classes/Tasks/DeletedAdditionalFieldProvider.php";s:4:"be9b";s:25:"Classes/Tasks/Expired.php";s:4:"7881";s:48:"Classes/Tasks/ExpiredAdditionalFieldProvider.php";s:4:"ce84";s:24:"Classes/Tasks/Hidden.php";s:4:"b901";s:47:"Classes/Tasks/HiddenAdditionalFieldProvider.php";s:4:"9653";s:24:"Classes/Utility/Base.php";s:4:"a979";s:44:"Classes/ViewHelpers/Format/RawViewHelper.php";s:4:"7656";s:48:"Classes/ViewHelpers/Format/ReplaceViewHelper.php";s:4:"4862";s:46:"Resources/Private/Backend/Layouts/Default.html";s:4:"4cc2";s:57:"Resources/Private/Backend/Templates/InfoModule/Index.html";s:4:"1ec5";s:51:"Resources/Private/Language/ContextSensitiveHelp.xml";s:4:"4e00";s:56:"Resources/Private/Language/ContextSensitiveHelpPages.xml";s:4:"958e";s:40:"Resources/Private/Language/locallang.xml";s:4:"a4fc";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"ae3a";s:46:"Resources/Public/StyleSheets/Backend/Style.css";s:4:"d154";s:14:"doc/manual.sxw";s:4:"47f9";}',
);

?>
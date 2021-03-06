<?php

/*********************************************************************
* Extension configuration file for ext "realurl".
*
* Generated by ext 14-12-2017 08:44 UTC
*
* https://github.com/t3elmar/Ext
*********************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Speaking URLs for TYPO3',
  'description' => 'Makes TYPO3 URLs search engine friendly. Donations are welcome to dmitry.dulepov@gmail.com. They help to support the extension!',
  'category' => 'services',
  'version' => '2.3.1',
  'state' => 'stable',
  'uploadfolder' => 0,
  'createDirs' => '',
  'modify_tables' => 'pages,pages_language_overlay',
  'clearcacheonload' => 1,
  'author' => 'Dmitry Dulepov',
  'author_email' => 'dmitry.dulepov@gmail.com',
  'author_company' => '',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '6.2.0-8.7.999',
      'php' => '5.4.0-7.1.999',
      'scheduler' => '6.2.0-8.7.999',
    ),
    'conflicts' => 
    array (
      'cooluri' => '',
      'simulatestatic' => '',
    ),
    'suggests' => 
    array (
      'static_info_tables' => '6.2.0-',
    ),
  ),
  'comment' => 'Maintanance release before dropping TYPO3 6.2 support and adding TYPO3 9.0',
  'user' => 'dmitry',
);

?>
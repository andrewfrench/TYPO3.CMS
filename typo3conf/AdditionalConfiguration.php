<?php
/** #ddev-generated: Automatically generated TYPO3 AdditionalConfiguration.php file.
 ddev manages this file and may delete or overwrite the file unless this comment is removed.
 */

$GLOBALS['TYPO3_CONF_VARS']['SYS']['trustedHostsPattern'] = '.*';

$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default'] = array_merge(
    // on first install, this could be not set yet
    isset($GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default'])
        ? $GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']
        : [],
    [
        'dbname' => 'db',
        'host' => 'db',
        'password' => 'db',
        'port' => '3306',
        'user' => 'db',
    ]
);

// This mail configuration sends all emails to mailhog
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport'] = 'smtp';
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_smtp_server'] = 'localhost:1025';

$GLOBALS['TYPO3_CONF_VARS']['SYS']['devIPmask'] = '*';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = 1;

// This GFX configuration allows processing by installed ImageMagick 6
$GLOBALS['TYPO3_CONF_VARS']['GFX']['processor'] = 'ImageMagick';
$GLOBALS['TYPO3_CONF_VARS']['GFX']['processor_path'] = '/usr/bin/';
$GLOBALS['TYPO3_CONF_VARS']['GFX']['processor_path_lzw'] = '/usr/bin/';

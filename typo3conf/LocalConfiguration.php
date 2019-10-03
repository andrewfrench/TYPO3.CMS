<?php
return [
    'BE' => [
        'debug' => false,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$pbkdf2-sha256$25000$KQc1bsyM8PJmlamT1B3IdQ$lFwXlsk2YDHQryCcQnVyrEyj1Vw1LvKahHICETWeEkQ',
        'loginSecurityLevel' => 'rsa',
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'driver' => 'mysqli',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'backend' => 'a:6:{s:14:"backendFavicon";s:0:"";s:11:"backendLogo";s:0:"";s:20:"loginBackgroundImage";s:0:"";s:13:"loginFootnote";s:0:"";s:19:"loginHighlightColor";s:0:"";s:9:"loginLogo";s:0:"";}',
            'extensionmanager' => 'a:2:{s:21:"automaticInstallation";i:1;s:11:"offlineMode";i:0;}',
            'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
            'saltedpasswords' => 'a:6:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:20:"checkConfigurationBE";s:1:"0";s:21:"checkConfigurationBE2";s:1:"0";s:20:"checkConfigurationFE";s:1:"0";s:21:"checkConfigurationFE2";s:1:"0";}',
            'scheduler' => 'a:3:{s:11:"enableBELog";i:1;s:11:"maxLifetime";i:1440;s:15:"showSampleTasks";i:1;}',
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
        ],
        'extensionmanager' => [
            'automaticInstallation' => 1,
            'offlineMode' => 0,
        ],
        'rsaauth' => [
            'temporaryDirectory' => '',
        ],
        'saltedpasswords' => [
            'BE' => [
                'forceSalted' => 0,
                'onlyAuthService' => 0,
                'saltedPWHashingMethod' => 'TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt',
                'updatePasswd' => 1,
            ],
            'FE' => [
                'enabled' => 1,
                'forceSalted' => 0,
                'onlyAuthService' => 0,
                'saltedPWHashingMethod' => 'TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt',
                'updatePasswd' => 1,
            ],
            'checkConfigurationBE' => '0',
            'checkConfigurationBE2' => '0',
            'checkConfigurationFE' => '0',
            'checkConfigurationFE2' => '0',
        ],
        'scheduler' => [
            'enableBELog' => 1,
            'maxLifetime' => 1440,
            'showSampleTasks' => 1,
        ],
    ],
    'FE' => [
        'debug' => false,
        'loginSecurityLevel' => 'rsa',
    ],
    'GFX' => [
        'processor' => 'ImageMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'sRGB',
        'processor_effects' => 1,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/local/bin/mailhog sendmail test@example.org --smtp-addr 127.0.0.1:1025',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'devIPmask' => '',
        'displayErrors' => 0,
        'encryptionKey' => '9f7f2be589d5e3d314e2a41e24371a7b647ee933906bba77c1a43818b75773b81a1c24f0cb6ed145935968cd292eadfc',
        'exceptionalErrors' => 4096,
        'sitename' => 'New TYPO3 site',
        'systemLogLevel' => 2,
        'systemMaintainers' => [
            1,
        ],
    ],
];

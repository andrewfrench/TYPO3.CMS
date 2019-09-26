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

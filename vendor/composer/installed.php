<?php return array(
    'root' => array(
        'name' => 'northlab/twilio-whatsapp',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'composer-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'northlab/twilio-whatsapp' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'twilio/sdk' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '823f2630c14a67e904e1bf63f9b0d7053812d751',
            'type' => 'library',
            'install_path' => __DIR__ . '/../twilio/sdk',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
    ),
);

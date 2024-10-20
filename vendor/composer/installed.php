<?php return array(
    'root' => array(
        'name' => 'instawp/migration',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => '0fce418185d961091ebb29a126f60c3d525f4d45',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'instawp/connect-helpers' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '2e6503bc12615ca2c767178b8a5b5f242c1b1301',
            'type' => 'library',
            'install_path' => __DIR__ . '/../instawp/connect-helpers',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
        'instawp/migration' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => '0fce418185d961091ebb29a126f60c3d525f4d45',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'wp-cli/wp-config-transformer' => array(
            'pretty_version' => 'v1.4.1',
            'version' => '1.4.1.0',
            'reference' => '9da378b5a4e28bba3bce4ff4ff04a54d8c9f1a01',
            'type' => 'library',
            'install_path' => __DIR__ . '/../wp-cli/wp-config-transformer',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);

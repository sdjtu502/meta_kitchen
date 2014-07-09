<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'extensions' => require(__DIR__ . '/../../vendor/yiisoft/extensions.php'),
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=metadash',
            'username' => 'root',
            'password' => 'CHRoot1313!',
            'charset' => 'utf8',
        ],    
		//GMS CUSTOM See http://www.yiiframework.com/doc-2.0/guide-authorization.html
        'authManager' => [
            'class' => 'yii\rbac\PhpManager',
        ],		
	],
];
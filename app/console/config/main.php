<?php

return [
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'console\controllers',
    'controllerMap' => [
        'migrate' => [
            'class' => dmstr\console\controllers\MigrateController::class,
            'migrationTable' => '{{%migrations}}',
            'migrationPath' => '@migrations',
        ],
    ],
    'modules' => [

    ],
    'params' => [
        'yii.migrations' => [
            '@modules/depot/migrations',
        ],
    ],
];
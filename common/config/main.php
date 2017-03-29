<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'name'=>'REPORT-BK',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
        'hosxp' => [
            'class' => 'frontend\modules\hosxp\Module',
        ],
    ],
];

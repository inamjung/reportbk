<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'name'=>'REPORT-BK',
    'language'=>'th_TH',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
        'hosxp' => [
            'class' => 'frontend\modules\hosxp\Module',
        ],
        'gridview' =>  [
        'class' => '\kartik\grid\Module'
    ]
    ],
];

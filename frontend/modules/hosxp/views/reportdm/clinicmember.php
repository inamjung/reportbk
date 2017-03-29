<?php

use kartik\grid\GridView;
use yii\helpers\Html;

?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'hover'=>true,
    'striped'=>false,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        
        'cname',
       
        [
            'attribute'=>'total',
            'format'=>'raw',
            'value'=> function($model)use($clinic) {
                return Html::a(Html::encode($model['total']), [
                'reportdm/indivclinicmember', 
                    'clinic'=>$model['clinic']
                
                    ]
    );
            }
        ],
        
        //['class' => 'yii\grid\ActionColumn'],
    ],
]);
?> 
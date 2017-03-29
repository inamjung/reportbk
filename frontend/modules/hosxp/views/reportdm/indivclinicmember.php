<?php

use kartik\grid\GridView;
use yii\data\ArrayDataProvider;
?>


<?= GridView::widget([
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        
        'cname',
        'hn',        
        
       // ['class' => 'yii\grid\ActionColumn'],
    ],
]);
?> 
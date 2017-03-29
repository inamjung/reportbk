<?php

use yii\grid\GridView;

?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        
        'cname',
        'total',        
        
        ['class' => 'yii\grid\ActionColumn'],
    ],
]);
?> 
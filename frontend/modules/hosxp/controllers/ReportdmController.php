<?php

namespace frontend\modules\hosxp\controllers;

use yii\web\Controller;
use yii;
use yii\data\ArrayDataProvider;
/**
 * Default controller for the `hosxp` module
 */
class ReportdmController extends Controller
{
   
//    public function actionClinicmember($clinic=null)
//    {
//        
//        $sql="SELECT  c.clinic,c.`name` cname, COUNT(cm.hn) total,cm.refer_register_from_hospcode
//            from clinicmember cm
//            JOIN clinic c on c.clinic=cm.clinic
//            WHERE cm.refer_register_from_hospcode='11049'
//            AND c.hospcode='11049'
//            GROUP BY c.clinic
//            order by total desc";
//        
//        try {
//            $rawData = \Yii::$app->db2->createCommand($sql)->queryAll();
//        } catch (\yii\db\Exception $e) {
//            throw new \yii\web\ConflictHttpException('sql error');
//        }
//        $dataProvider = new \yii\data\ArrayDataProvider([
//            'allModels'=>$rawData           
//        ]);
//        
//        return $this->render('clinicmember',[
//            'dataProvider'=>$dataProvider,
//            'rawData'=>$rawData,
//            'sql'=>$sql,
//            'clinic'=>$clinic
//            
//        ]);
//    }
    
    public function actionClinicmember($clinic=null)
    {
        $connection = Yii::$app->db2;
        $data = $connection->createCommand("SELECT  c.clinic,c.`name` cname, COUNT(cm.hn) total,cm.refer_register_from_hospcode
            from clinicmember cm
            JOIN clinic c on c.clinic=cm.clinic
            WHERE cm.refer_register_from_hospcode='11049'
            AND c.hospcode='11049'
            GROUP BY c.clinic
            order by total desc")->queryAll();
       
        
        for ($i = 0; $i < sizeof($data); $i++) {
            $cname[] = $data[$i]['cname'];        
            $total[] = $data[$i]['total']*1;             
        }
        
        $dataProvider = new ArrayDataProvider([
                'allModels'=>$data, 
            ]);
        
        return $this->render('clinicmember',[
            'dataProvider'=>$dataProvider,  
            'clinic'=>$clinic,
            'cname'=>$cname,
            'total'=>$total
            
        ]);
    }
    
    public function actionIndivclinicmember($clinic=null){
        
        $sql="SELECT  c.`name` cname, cm.hn 
            from clinicmember cm
            JOIN clinic c on c.clinic=cm.clinic
            WHERE cm.refer_register_from_hospcode='11049'
            AND c.hospcode='11049' and c.clinic='$clinic'";
        
        try {
            $rawData = \Yii::$app->db2->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels'=>$rawData           
        ]);
        return $this->render('indivclinicmember',[
            'dataProvider'=>$dataProvider,
            'rawData'=>$rawData,
            'sql'=>$sql,
            'clinic'=>$clinic
        ]);
    }
}



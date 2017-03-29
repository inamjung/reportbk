<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?php echo Yii::$app->user->identity->username ;?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        
        
        <ul class="sidebar-menu">            
            <li class="treeview active">
                    <a href="#">
                        <i class="glyphicon glyphicon-cog"></i><span>รายงาน</span>
                        <i class="fa pull-right fa-angle-down"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?php echo yii\helpers\Url::to(['/hosxp/reportdm/clinicmember']);?>">
                                <i class="fa fa-circle text-blue"></i>
                                    <span>รายงาน</span>
                            </a>
                        </li>
                        
                      
                        
                    </ul>
            </li>
   </ul> 
       

    </section>

</aside>

<?php
use yii\helpers\Html;
use yii\helpers\Url;

//use common\models\MktPost;
?>

                  <li class="item-content">
                    <div class="item-inner">
                      <div class="item-title">  
                      
                        <?php echo substr($model->created_at, 0, 10);?>
                        <?php
                        echo \common\modules\redpack\models\RedpackLog::getStatusOption($model->status);
                        ?>
                      </div>
                      <div class="item-after green">+ <?php echo $model->amount/100;?> 元</div>
                    </div>
                  </li>

<?php
/*
<!--
                  <li class="item-content">
                    <div class="item-inner">
                      <div class="item-title">xxxxx</div>
                      <div class="item-after green">+ 0.5 元</div>
                    </div>
                  </li>
                  <li class="item-content">
                    <div class="item-inner">
                      <div class="item-title">xxxxx</div>
                      <div class="item-after red">- 0.5 元</div>
                    </div>
                  </li>
-->

                        if ($model->status == 1) {
                            echo '提现申请中...';
                        } elseif ($model->status == 2){
                            echo '已提现';
                        } elseif ($model->status == 9){
                            echo '系统异常';}

                        */

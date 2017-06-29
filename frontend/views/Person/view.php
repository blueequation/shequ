<?php

use kartik\dialog\Dialog;
use kartik\detail\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Person */
?>
<div class="person-view">
 
    <?php $pk = $model->getPrimaryKey();
        echo DetailView::widget([
        'model' => $model,
        'condensed'=>false,
        'hover'=>true,
        'mode'=>Yii::$app->request->get('edit')=='t' ? DetailView::MODE_EDIT : DetailView::MODE_VIEW,
        'panel'=>[
            'heading'=>'查看和修改',
            'type'=>DetailView::TYPE_INFO,
        ],

        //提示信息设置
        'alertMessageSettings'=>[
            'kv-detail-error' => 'alert alert-danger',
            'kv-detail-success' => 'alert alert-success',
            'kv-detail-info' => 'alert alert-info',
            'kv-detail-warning' => 'alert alert-warning'
        ],

        //弹框按钮设定
        'krajeeDialogSettings'=>[
            /*'options' =>[
                'size' => Dialog::SIZE_SMALL
            ],*/
            'dialogDefaults'=>[
                    Dialog::DIALOG_ALERT => [
                    'type' => Dialog::TYPE_INFO,
                    'title' => '提示',
                    'buttonLabel' => '<i class="glyphicon glyphicon-ok"></i> 确定'
                ],
                Dialog::DIALOG_CONFIRM => [
                    'type' => Dialog::TYPE_WARNING,
                    'title' => "确认",
                    'btnOKClass' => 'btn-warning',
                    'btnOKLabel' => '<i class="glyphicon glyphicon-ok"></i> 确定',
                    'btnCancelLabel' => '<i class="glyphicon glyphicon-ban-circle"></i> 取消'
                ],
            ],
        ],

        'deleteOptions'=>[
            'url'=>['deletefromdetail','id'=>$pk],
            'lable' =>'删除',
        ],
        /*'updateOptions'=>[
            'url'=>['detailview'],
        ],*/
        'formOptions' =>[
            'id' => "edit-model-form",
            //'action' => ["person/update",id=>$pk],
            'action' => "/index.php?r=person/update&id=$pk",
        ],
        'container' => ['id'=>'kv-demo'],
        //'formOptions' => ['action' => \yii\helpers\Url::to("/mgr/history/detailviewdelete")],// your action to delete
        'enableEditMode'=>true,
        //'buttons1' =>'{update}',
        'buttons2' => '{reset} {save}',
        'attributes' => [
              [
                  'attribute' => 'Id',
                  'label' => 'Id',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'city',
                  'label' => 'city',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'area',
                  'label' => 'area',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'suroffice',
                  'label' => 'suroffice',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'community',
                  'label' => 'community',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'village',
                  'label' => 'village',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'house_id',
                  'label' => 'house_id',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'huzhu',
                  'label' => 'huzhu',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'name',
                  'label' => 'name',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'sex',
                  'label' => 'sex',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'birthday',
                  'label' => 'birthday',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'age',
                  'label' => 'age',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'identity_id',
                  'label' => 'identity_id',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'nation',
                  'label' => 'nation',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'residence',
                  'label' => 'residence',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'ryxz',
                  'label' => 'ryxz',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'jkzt',
                  'label' => 'jkzt',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'zzmm',
                  'label' => 'zzmm',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'whcd',
                  'label' => 'whcd',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'profession',
                  'label' => 'profession',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'ylbxkh',
                  'label' => 'ylbxkh',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'ylbxzh',
                  'label' => 'ylbxzh',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'dmzh',
                  'label' => 'dmzh',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'remove',
                  'label' => 'remove',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'phone',
                  'label' => 'phone',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'address',
                  'label' => 'address',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'address_now',
                  'label' => 'address_now',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'remark',
                  'label' => 'remark',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'create_time',
                  'label' => 'create_time',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'update_time',
                  'label' => 'update_time',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'create_user',
                  'label' => 'create_user',
                  'displayOnly' => false,
              ],
              [
                  'attribute' => 'update_user',
                  'label' => 'update_user',
                  'displayOnly' => false,
              ],
        ],
    ]) ?>

</div>
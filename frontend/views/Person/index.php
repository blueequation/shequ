<?php

use common\models\Village;
use common\models\Xingzhi;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PersonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '人员信息';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="person-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('新增人员', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn','contentOptions'=>['width'=>'60px']],

            // 'id',
            ['attribute'=>'village',
                'value'=>'village0.name',
                'filter'=>village::find()->select(['name','id'])->orderBy('id')->indexBy('id')->column(),
                'contentOptions'=>['width'=>'80px']],
            ['attribute'=>'huhao',
                'contentOptions'=>['width'=>'100px']],
            ['attribute'=>'name',
                'contentOptions'=>['width'=>'100px']],
            ['attribute'=>'sex',
                'contentOptions'=>['width'=>'60px']],
            // 'date',
            ['attribute'=>'sfid',
                'contentOptions'=>['width'=>'180px']],
            // 'nation',
            // 'hkxz',
            ['attribute'=>'ryxz',
                'value'=>'xingzhi0.text',
                'filter'=>Xingzhi::find()->select(['text','id'])->orderBy('id')->indexBy('id')->column(),
                'contentOptions'=>['width'=>'140px']],
            // 'jkzt',
            // 'phone',
            // 'ylbxkh',
            // 'zhkh',
            // 'dmkh',
            // 'jzkh',
            // 'info',
            // 'huzhu',
            // 'created_at',
            // 'updated_at',
            // 'zzmm',
            // 'whcd',
            // 'zhiye',
            // 'address',
            // 'nowaddress',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

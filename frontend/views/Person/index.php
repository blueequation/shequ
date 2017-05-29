<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PersonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'People';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="person-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Person', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'village',
            'huhao',
            'name',
            'sex',
            // 'date',
            // 'sfid',
            // 'nation',
            // 'hkxz',
            // 'ryxz',
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

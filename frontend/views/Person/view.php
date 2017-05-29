<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Person */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'People', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="person-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            ['label'=>'村/庄',
                'value'=>$model->village0->name,],
            'huhao',
            'name',
            'sex',
            'date',
            'sfid',
           'nation',
            'hkxz',
            ['label'=>'人员性质','value'=>$model->xingzhi0->text,],
            ['label'=>'健康状况','value'=>$model->jiankang0->text,],
            'phone',
            'ylbxkh',
            'zhkh',
            'dmkh',
            'jzkh',
            'info',
            ['label'=>'户主（与户主关系）','value'=>$model->huzhu0->text,],

            ['label'=>'政治面貌','value'=>$model->zzmm0->text,],
            ['label'=>'文化程度','value'=>$model->whcd0->text,],
            ['label'=>'职业','value'=>$model->zhiye0->text,],
            'address',
            'nowaddress',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>

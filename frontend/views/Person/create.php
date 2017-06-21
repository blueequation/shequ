<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Person */

$this->title = '新增人员';
$this->params['breadcrumbs'][] = ['label' => '人员信息', 'url' => ['index']];
$this->params['breadcrumbs'][] = '新增';
?>
<div class="person-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

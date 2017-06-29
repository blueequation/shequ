<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Person */

?>

<div class="panel panel-info">
    <div class="panel-heading"><h3 class="panel-title">创建</h3></div>
    <div class="person-create">
        <?= $this->render('_form', [
        'model' => $model,
        ]) ?>
    </div>
</div>

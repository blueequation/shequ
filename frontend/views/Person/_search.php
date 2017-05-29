<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PersonSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="person-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'village') ?>

    <?= $form->field($model, 'huhao') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'sfid') ?>

    <?php // echo $form->field($model, 'nation') ?>

    <?php // echo $form->field($model, 'hkxz') ?>

    <?php // echo $form->field($model, 'ryxz') ?>

    <?php // echo $form->field($model, 'jkzt') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'ylbxkh') ?>

    <?php // echo $form->field($model, 'zhkh') ?>

    <?php // echo $form->field($model, 'dmkh') ?>

    <?php // echo $form->field($model, 'jzkh') ?>

    <?php // echo $form->field($model, 'info') ?>

    <?php // echo $form->field($model, 'huzhu') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'zzmm') ?>

    <?php // echo $form->field($model, 'whcd') ?>

    <?php // echo $form->field($model, 'zhiye') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'nowaddress') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

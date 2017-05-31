<?php

use common\models\Village;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model common\models\Person */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="person-form">

    <?php $form = ActiveForm::begin(); ?>
        <?php $vgObjs=Village::find()->all();
            $allVillage=ArrayHelper::map($vgObjs,'Id','name');?>
    <?= $form->field($model, 'village')->dropDownList($allVillage,['prompt'=>'请选择村/庄'],['maxlength' => true]);?>

    <?= $form->field($model, 'huhao')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->dropDownList([0=>'男',1=>'女'],['prompt'=>'请选择性别']) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'sfid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nation')->textInput() ?>

    <?= $form->field($model, 'hkxz')->textInput() ?>

    <?= $form->field($model, 'ryxz')->textInput() ?>

    <?= $form->field($model, 'jkzt')->textInput() ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ylbxkh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zhkh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dmkh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jzkh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'huzhu')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'zzmm')->textInput() ?>

    <?= $form->field($model, 'whcd')->textInput() ?>

    <?= $form->field($model, 'zhiye')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nowaddress')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '新增' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

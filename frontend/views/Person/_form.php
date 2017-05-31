<?php

use common\models\Huzhu;
use common\models\Jiankang;
use common\models\Nation;
use common\models\Village;
use common\models\Whcd;
use common\models\Xingzhi;
use common\models\Zhiye;
use common\models\Zzmm;
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

    <?= $form->field($model, 'sex')->dropDownList(['男'=>'男','女'=>'女'],['prompt'=>'请选择性别']); ?>

    <?= $form->field($model, 'sfid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?php $naObjs=Nation::find()->all();
            $allNation=ArrayHelper::map($naObjs,'Id','text'); ?>
    <?= $form->field($model, 'nation')->dropDownList($allNation,['prompt'=>'请选择民族']); ?>

    <?= $form->field($model, 'hkxz')->dropDownList(['农业'=>'农业','非农业'=>'非农业'],['prompt'=>'请选择户口性质']) ?>

    <?php $xzObjs=Xingzhi::find()->all();
    $allXingzhi=ArrayHelper::map($xzObjs,'Id','text');?>
    <?= $form->field($model, 'ryxz')->dropDownList($allXingzhi,['prompt'=>'请选择人员性质']) ?>

    <?php $jkObjs=Jiankang::find()->all();
    $allJiankang=ArrayHelper::map($jkObjs,'Id','text');?>
    <?= $form->field($model, 'jkzt')->dropDownList($allJiankang,['prompt'=>'请选择健康状况']) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ylbxkh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zhkh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dmkh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jzkh')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'info')->textInput(['maxlength' => true]) ?>

    <?php $hzObjs=Huzhu::find()->all();
    $allHuzhu=ArrayHelper::map($hzObjs,'Id','text');?>
    <?= $form->field($model, 'huzhu')->dropDownList($allHuzhu,['prompt'=>'请选择户主或关系']) ?>

    <?php $zzObjs=Zzmm::find()->all();
    $allZzmm=ArrayHelper::map($zzObjs,'Id','text');?>
    <?= $form->field($model, 'zzmm')->dropDownList($allZzmm,['prompt'=>'请选择政治面貌']) ?>

    <?php $whObjs=Whcd::find()->all();
    $allWhcd=ArrayHelper::map($whObjs,'Id','text');?>
    <?= $form->field($model, 'whcd')->dropDownList($allWhcd,['prompt'=>'请选择文化程度']) ?>

    <?php $zyObjs=Zhiye::find()->all();
    $allZhiye=ArrayHelper::map($zyObjs,'Id','text');?>
    <?= $form->field($model, 'zhiye')->dropDownList($allZhiye,['prompt'=>'请选择职业']) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nowaddress')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '新增' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

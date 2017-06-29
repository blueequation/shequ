<?php
use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Person */
/* @var $form kartik\form\ActiveForm */


?>

<div class="person-form">

    <?php $form = ActiveForm::begin(['id' => 'form-create']); ?>
    <table class="table table-hover table-bordered table-striped detail-view">
        <tbody>
 <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'city', ['label'=>'City', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'city',[
                     'showLabels'=>false
                ])->textInput(['maxlength' => true]) ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'area', ['label'=>'Area', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'area',[
                     'showLabels'=>false
                ])->textInput(['maxlength' => true]) ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'suroffice', ['label'=>'Suroffice', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'suroffice',[
                     'showLabels'=>false
                ])->textInput(['maxlength' => true]) ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'community', ['label'=>'Community', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'community',[
                     'showLabels'=>false
                ])->textInput(['maxlength' => true]) ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'village', ['label'=>'Village', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'village',[
                     'showLabels'=>false
                ])->textInput(['maxlength' => true]) ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'house_id', ['label'=>'House ID', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'house_id',[
                     'showLabels'=>false
                ])->textInput(['maxlength' => true]) ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'huzhu', ['label'=>'Huzhu', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'huzhu',[
                     'showLabels'=>false
                ])->textInput() ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'name', ['label'=>'Name', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'name',[
                     'showLabels'=>false
                ])->textInput(['maxlength' => true]) ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'sex', ['label'=>'Sex', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'sex',[
                     'showLabels'=>false
                ])->textInput() ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'birthday', ['label'=>'Birthday', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'birthday',[
                     'showLabels'=>false
                ])->textInput() ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'age', ['label'=>'Age', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'age',[
                     'showLabels'=>false
                ])->textInput() ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'identity_id', ['label'=>'Identity ID', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'identity_id',[
                     'showLabels'=>false
                ])->textInput(['maxlength' => true]) ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'nation', ['label'=>'Nation', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'nation',[
                     'showLabels'=>false
                ])->textInput() ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'residence', ['label'=>'Residence', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'residence',[
                     'showLabels'=>false
                ])->textInput() ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'ryxz', ['label'=>'Ryxz', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'ryxz',[
                     'showLabels'=>false
                ])->textInput() ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'jkzt', ['label'=>'Jkzt', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'jkzt',[
                     'showLabels'=>false
                ])->textInput() ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'zzmm', ['label'=>'Zzmm', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'zzmm',[
                     'showLabels'=>false
                ])->textInput() ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'whcd', ['label'=>'Whcd', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'whcd',[
                     'showLabels'=>false
                ])->textInput() ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'profession', ['label'=>'Profession', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'profession',[
                     'showLabels'=>false
                ])->textInput() ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'ylbxkh', ['label'=>'Ylbxkh', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'ylbxkh',[
                     'showLabels'=>false
                ])->textInput(['maxlength' => true]) ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'ylbxzh', ['label'=>'Ylbxzh', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'ylbxzh',[
                     'showLabels'=>false
                ])->textInput(['maxlength' => true]) ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'dmzh', ['label'=>'Dmzh', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'dmzh',[
                     'showLabels'=>false
                ])->textInput(['maxlength' => true]) ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'remove', ['label'=>'Remove', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'remove',[
                     'showLabels'=>false
                ])->textInput() ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'phone', ['label'=>'Phone', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'phone',[
                     'showLabels'=>false
                ])->textInput(['maxlength' => true]) ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'address', ['label'=>'Address', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'address',[
                     'showLabels'=>false
                ])->textInput(['maxlength' => true]) ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'address_now', ['label'=>'Address Now', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'address_now',[
                     'showLabels'=>false
                ])->textInput(['maxlength' => true]) ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'remark', ['label'=>'Remark', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'remark',[
                     'showLabels'=>false
                ])->textInput(['maxlength' => true]) ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'create_time', ['label'=>'Create Time', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'create_time',[
                     'showLabels'=>false
                ])->textInput() ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'update_time', ['label'=>'Update Time', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'update_time',[
                     'showLabels'=>false
                ])->textInput() ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'create_user', ['label'=>'Create User', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'create_user',[
                     'showLabels'=>false
                ])->textInput() ?>

    </div>
</td>
</tr>    <tr>
<th style='width: 20%; text-align: right; vertical-align: middle;'>
<?= Html::activeLabel($model, 'update_user', ['label'=>'Update User', 'class'=>'']) ?></th>
    <td>
<div class='kv-form-attribute'>    <?= $form->field($model, 'update_user',[
                     'showLabels'=>false
                ])->textInput() ?>

    </div>
</td>
</tr>  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>
        </tbody>
    </table>
    <?php ActiveForm::end(); ?>
</div>

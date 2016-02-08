<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StuInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stu-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stu_unique_id')->textInput() ?>

    <?= $form->field($model, 'stu_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stu_first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stu_middle_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stu_last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stu_gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stu_dob')->textInput() ?>

    <?= $form->field($model, 'stu_email_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stu_bloodgroup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stu_birthplace')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stu_religion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stu_admission_date')->textInput() ?>

    <?= $form->field($model, 'stu_photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stu_languages')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stu_mobile_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stu_info_stu_master_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

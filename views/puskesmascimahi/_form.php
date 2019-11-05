<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PuskesmasCimahi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="puskesmas-cimahi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_puskesmas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_puscim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_puscim')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'telepon_puscim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_puscim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'coordinates_puscim')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'kepala_puskesmas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

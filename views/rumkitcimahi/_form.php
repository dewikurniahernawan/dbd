<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RumkitCimahi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rumkit-cimahi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_rumkit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat_rumkit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'coordinate_rumkit')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

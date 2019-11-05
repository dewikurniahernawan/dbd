<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PuskesmascimahiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="puskesmas-cimahi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kode_puskesmas') ?>

    <?= $form->field($model, 'nama_puscim') ?>

    <?= $form->field($model, 'alamat_puscim') ?>

    <?= $form->field($model, 'telepon_puscim') ?>

    <?php // echo $form->field($model, 'jenis_puscim') ?>

    <?php // echo $form->field($model, 'coordinates_puscim') ?>

    <?php // echo $form->field($model, 'kepala_puskesmas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

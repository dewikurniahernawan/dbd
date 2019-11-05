<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JadwaldbdSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jadwal-dbd-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tempat') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'pemateri') ?>

    <?= $form->field($model, 'judul') ?>

    <?php // echo $form->field($model, 'ket') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

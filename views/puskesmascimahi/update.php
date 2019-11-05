<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PuskesmasCimahi */

$this->title = 'Update Puskesmas Cimahi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Puskesmas Cimahis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="puskesmas-cimahi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

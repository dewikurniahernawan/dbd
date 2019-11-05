<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RumkitCimahi */

$this->title = 'Update Rumkit Cimahi: ' . $model->id_rumkit;
$this->params['breadcrumbs'][] = ['label' => 'Rumkit Cimahis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_rumkit, 'url' => ['view', 'id' => $model->id_rumkit]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rumkit-cimahi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

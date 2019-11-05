<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JadwalDbd */

$this->title = 'Update Jadwal Dbd: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jadwal Dbds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jadwal-dbd-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

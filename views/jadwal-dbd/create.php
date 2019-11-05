<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JadwalDbd */

$this->title = 'Create Jadwal Dbd';
$this->params['breadcrumbs'][] = ['label' => 'Jadwal Dbds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jadwal-dbd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

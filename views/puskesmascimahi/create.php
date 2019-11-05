<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PuskesmasCimahi */

$this->title = 'Create Puskesmas Cimahi';
$this->params['breadcrumbs'][] = ['label' => 'Puskesmas Cimahis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="puskesmas-cimahi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

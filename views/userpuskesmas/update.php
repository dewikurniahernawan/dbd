<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserPuskesmas */

$this->title = 'Update User Puskesmas: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Puskesmas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-puskesmas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

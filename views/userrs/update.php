<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserRs */

$this->title = 'Update User Rs: ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'User Rs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->username]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-rs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

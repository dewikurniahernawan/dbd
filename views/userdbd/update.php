<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserDbd */

$this->title = 'Update User Dbd: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'User Dbds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-dbd-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

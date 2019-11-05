<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserPuskesmas */

$this->title = 'Create User Puskesmas';
$this->params['breadcrumbs'][] = ['label' => 'User Puskesmas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-puskesmas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

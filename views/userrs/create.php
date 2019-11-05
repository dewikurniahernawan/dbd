<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserRs */

$this->title = 'Create User Rs';
$this->params['breadcrumbs'][] = ['label' => 'User Rs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-rs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

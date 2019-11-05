<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UserDbd */

$this->title = 'Create User Dbd';
$this->params['breadcrumbs'][] = ['label' => 'User Dbds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-dbd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DataDbd */

$this->title = 'Create Data Dbd';
$this->params['breadcrumbs'][] = ['label' => 'Data Dbds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-dbd-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

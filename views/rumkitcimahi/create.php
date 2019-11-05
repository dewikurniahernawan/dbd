<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RumkitCimahi */

$this->title = 'Create Rumkit Cimahi';
$this->params['breadcrumbs'][] = ['label' => 'Rumkit Cimahis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rumkit-cimahi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

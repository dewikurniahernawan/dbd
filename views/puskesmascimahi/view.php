<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PuskesmasCimahi */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Puskesmas Cimahis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="puskesmas-cimahi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'kode_puskesmas',
            'nama_puscim',
            'alamat_puscim:ntext',
            'telepon_puscim',
            'jenis_puscim',
            'coordinates_puscim:ntext',
            'kepala_puskesmas',
        ],
    ]) ?>

</div>

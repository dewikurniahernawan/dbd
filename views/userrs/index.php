<?php

use yii\helpers\Html;
use \yii\bootstrap\Collapse;
use kartik\grid\GridView;
use yii\bootstrap\Modal;
use yii\widget\Pjax;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserrsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Akun User Rumah Sakit';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-rs-index">
<div class="col-md-12">
      <div class="box box-info">
      <div class="box-header with-border">
      <?php echo $this->render('_search', ['model' => $searchModel]); ?>
      </div>
      </div>
      
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'exportConfig' => [
            GridView::EXCEL => ['label' => 'Save as EXCEL'], //untuk menghidupkan button export ke Excell
            GridView::HTML => ['label' => 'Save as HTML'], //untuk menghidupkan button export ke HTML
            GridView::CSV => ['label' => 'Save as CSV'], //untuk menghidupkan button export ke CVS
        ],
        
      'toolbar' =>  [
          '{export}', 
        //  '{toggleData}' //uncoment untuk menghidupkan button menampilkan semua data..
      ],
      'pjax' => true,
      'bordered' => true,
      'striped' => true,
      'condensed' => false,
      'responsive' => false,
      'hover' => true,
      'floatHeader' => true,
      'showPageSummary' => true, //true untuk menjumlahkan nilai di suatu kolom, kebetulan pada contoh tidak ada angka.
      'panel' => [
          'type' => GridView::TYPE_PRIMARY
      ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'username',
            'password',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

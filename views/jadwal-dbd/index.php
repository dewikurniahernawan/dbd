<?php

use yii\helpers\Html;
use \yii\bootstrap\Collapse;
use kartik\grid\GridView;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel app\models\JadwaldbdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jadwal Penyuluhan';
$this->params['breadcrumbs'][] = $this->title;
?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
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

            'id',
            'tempat',
            [
                'attribute'=>'tanggal',
                'value'=>'tanggal',
                'format'=>'raw',
                'filter'=>DatePicker::widget([
                    'model'=>$searchModel,
                    'attribute'=>'tanggal',
                    'clientOptions'=>[
                        'autoclose'=>true,
                        'format'=>'yyyy-mm-dd',
                    ],
                ]),
            ],
            'pemateri',
            'judul',
            'ket',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

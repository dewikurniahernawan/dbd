<?php
use yii\helpers\Html;
use \yii\bootstrap\Collapse;
use kartik\grid\GridView;
use dosamigos\datepicker\DatePicker;
use yii\bootstrap\Modal;
use yii\widget\Pjax;
use yii\helpers\Url;



/* @var $this yii\web\View */
/* @var $searchModel app\models\DatadbdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/*'value' => Url::to(['datadbd/index']),*/

$this->title = 'Data dbd';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-dbd-index">
    <p>
    <?= Html::button('Create Data Dbd', ['class' => 'btn btn-success','id'=>'modalButton']) ?>
    </p>

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
            [
                'attribute'=>'timestamp',
                'value'=>'timestamp',
                'format'=>'raw',
                'filter'=>DatePicker::widget([
                    'model'=>$searchModel,
                    'attribute'=>'timestamp',
                    'clientOptions'=>[
                        'autoclose'=>true,
                        'format'=>'yyyy-mm-dd',
                    ],
                ]),
            ],
            'coordinates',
            [
                'class' => 'yii\grid\DataColumn',
                'header' => 'ns_1',                              
                'value'=>'ns_1',
                'filter' => Html::activeDropDownList($searchModel,'ns_1',[
                    'Y'=>'Yes',
                    'N'=>'No',
                ]), 
                          
            ],
            'fday',
            [
                'class' => 'yii\grid\DataColumn',
                'header' => 'age',                              
                'value'=>'age',
                'filter' => Html::activeDropDownList($searchModel,'age',[
                    0   => 'all',
                    1   => '0-10',
                    2   => '11-20',
                    3   => '21-30',
                    4   => '31-40',
                    5   => '41-50',
                    6   => '51-60',
                    7   => '61-70',
                    8   => '71-80',
                    9   => '81-90',
                   
                ]),  
                          

            ],
            [
                'class' => 'yii\grid\DataColumn',
                'header' => 'sex',                              
                'value'=>'sex',
                'filter' => Html::activeDropDownList($searchModel,'sex',[
                    'L'=>'Laki-laki',
                    'P'=>'Perempuan',
                ]),  
            ],
            [
                'class' => 'yii\grid\DataColumn',
                'header' => 'prevd',
                'value' => 'prevd',
                'filter' => Html::activeDropDownList($searchModel,'prevd',[
                    'Y'=>'Yes',
                    'N'=>'No',
                ]),
            ],
         

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

</div>

<?php
    Modal::begin([
    'header' => '<h4>Create Data DBD</h4>',
    'id' => 'modal',
    'size' => 'modal-lg',
    ]); ?>
    <?php echo "<div id='modalContent'><div>"; ?>

    <div class="box-body">
          <div class="row">
            <div class="col-md-6">
            <form method='post' action='createdata.php'>
              <div class="form-group">
                <label>ID DBD</label>
                <input type="text" name="id" class="form-control select2" placeholder="ID" style="width: 100%;">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
              <label>coordinates</label>
                <input type="text" name="coor" class="form-control select2" placeholder="coordinate" style="width: 100%;">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
              <label>Age</label>
                <input type="number" name="age" class="form-control select2" placeholder="Age" style="width: 100%;">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
              <label>Sex</label>
                <input type="text" name="sex" class="form-control select2" placeholder="Sex" style="width: 100%;">
              </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-6">
              <div class="form-group">
              <label>Timestamp</label>
                <input type="text" name="time" class="form-control select2" placeholder="timestamp" style="width: 100%;">
              </div>
              <div class="form-group">
              <label>Fday</label>
                <input type="number" name="day" class="form-control select2" placeholder="Fday" style="width: 100%;">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
              <label>NS-1</label>
                <input type="text" name="ns" class="form-control select2" placeholder="NS-1" style="width: 100%;">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
              <label>Prevd</label>
                <input type="text" name="vd" class="form-control select2" placeholder="Prevd" style="width: 100%;">
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <div class="box-footer">
                <button type="reset" class="btn btn-default">Reset</button>
                <button type="submit" class="btn btn-info pull-right">Save</button>
              </div>
      </form>
    <?php Modal::end()?>
        

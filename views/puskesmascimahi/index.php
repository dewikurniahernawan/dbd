<?php

use yii\helpers\Html;
use \yii\bootstrap\Collapse;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PuskesmascimahiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Puskesmas Kota Cimahi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="puskesmas-cimahi-index">
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
      
      'showPageSummary' => true, //true untuk menjumlahkan nilai di suatu kolom, kebetulan pada contoh tidak ada angka.
      'panel' => [
          'type' => GridView::TYPE_PRIMARY
      ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
           //'kode_puskesmas',
            'nama_puscim',
            'alamat_puscim:ntext',
            'telepon_puscim',
            'jenis_puscim',
            //'coordinates_puscim:ntext',
            'kepala_puskesmas',

           
        ],
    ]); ?>

<div class="site-aktif">
   <div class="col-md-12">
      <div class="box box-info">
      <center><h3 class="box-title">Lokasi Puskesmas Kota Cimahi</h3></center>
      <div class="box-header with-border">
      </div>
        
<html>
<style>
	#mapid{
		left: 15px;
		width: 1025px;
		height: 600px;
	}
	</style>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
<script src="leaflet.ajax.min.js"></script>
<?php
   include "koneksi.php";
?>
</head>
<body>
<div id="mapid"></div>
	<script>
		var map = L.map('mapid').setView([-6.899541, 107.5338671], 13);
        
		<?php 
			 $query = "SELECT kode_puskesmas,nama_puscim,coordinates_puscim FROM puskesmas_cimahi";
			 $query2 = mysqli_query($config,$query);
			 while($query3 = mysqli_fetch_assoc($query2)){
		 ?>

		var marker = L.marker([<?php echo $query3['coordinates_puscim']; ?>]).addTo(map);
		marker.bindPopup("<b>id : <?php echo $query3['kode_puskesmas']; ?></b><br>nama puskesmas : <?php echo $query3['nama_puscim']; ?>").openPopup();

       <?php } ?>
	   
		L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
		maxZoom: 20,
		id: 'mapbox.streets',
		accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
		}).addTo(map);
		var geojsonLayer = new L.GeoJSON.AJAX("geojson.json");       
		geojsonLayer.addTo(map);
	
	</script>
</body>
</html>
		
    </div>
    </div>


</div>

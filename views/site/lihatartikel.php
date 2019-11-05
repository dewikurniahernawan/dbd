<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DatadbdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Artikel';
$this->params['breadcrumbs'][] = $this->title;
include "koneksi.php";
?>
<div class="site-index">

    <div class="body-content">
    <?php 
		$query = "SELECT * FROM art_dbd";
		$query2 = mysqli_query($config,$query);
	    while($query3 = mysqli_fetch_assoc($query2)){
	?>

    <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
             <center><h2 class="box-title"><?php echo $query3['judul']; ?></h2></center>
              </br>
              <img src="/img/artikel/nyamuk.jpg" class="user-image" alt="User Image"/> 
              <p><?php echo $query3['isi']; ?></p>

                <p class="box-footer">sumber :   <?php echo $query3['sumber']; ?></p>
            </div>
        </div>
    </div>
  </div>
    <?php } ?>

    
</div>
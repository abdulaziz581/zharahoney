<?php
$total=0;
foreach ($model2 as $totalan) {
	$total=$total+$totalan->total;
}
$grandtotal=$total+$model->ongkir;
?>
<div style="width: 100%;font-family: times new roman;">

    <div style="width: 68%;float: left"><b>PENERIMA :</b></div>
	<div style="width: 30%;float: left"></div>

</div>
<div style="width: 100%;font-family: times new roman;margin-top:3px">

    <div style="width: 50%;float: left;">Nama :<?= $model->pembelipenjualan->nama;?></div>
    <div style="width: 18%;float: left;">&nbsp;</div>
    
	<div style="width: 30%;float: left"><?= $model->kode_trans;?></div>

</div>
<div style="width: 100%;font-family: times new roman;margin-top:2.8px">

    <div style="width: 50%;float: left">No. Telpon:<?=$model->pembelipenjualan->no_telpon?></div>
    <div style="width: 18%;float: left;">&nbsp;</div>
	<div style="width: 30%;float: left">Rp.<?php echo Yii::app()->numberFormatter->format("###,###,###",$total);?>,-</div>

</div>
<div style="width: 100%;font-family: times new roman;margin-top:2.8px">

   <div style="width: 50%;float: left">Alamat :<?= $model->pembelipenjualan->alamat.'&nbsp;Kec:'. $model->pembelipenjualan->pembelikecamatan->nama.'&nbsp;'. $model->pembelipenjualan->pembelikota->nama.'&nbsp;'. $model->pembelipenjualan->pembelipropinsi->nama?></div>
   <div style="width: 18%;float: left;">&nbsp;</div>
	<div style="width: 30%;float: left">Rp.<?php echo Yii::app()->numberFormatter->format("###,###,###",$model->ongkir);?>,-</div>

</div>
<div style="width: 100%;font-family: times new roman;margin-top:2.8px">

    <div style="width: 50%;float: left">Kode Pos:<?=$model->pembelipenjualan->kode_pos?></div>
    <div style="width: 18%;float: left;">&nbsp;</div>
	<div style="width: 30%;float: left">Rp.<?php echo Yii::app()->numberFormatter->format("###,###,###",$grandtotal);?>,-</div>

</div>
<div style="width: 100%;font-family: times new roman;margin-top:2.8px">

   <div style="width: 50%;float: left"><b>PENGIRIM :</b></div>
   <div style="width: 18%;float: left;">&nbsp;</div>
	<div style="width: 30%;float: left"><?php
	 if($model->statusbayar=='belum'){
	 echo "Belum Lunas";
		}
	 ?>
	 	
	 </div>

</div>
<div style="width: 100%;font-family: times new roman;margin-top:2.8px">

   <div style="width: 50%;float: left">ZHARA HONEY / 0878 5580 0998</div>
   <div style="width: 18%;float: left;">&nbsp;</div>
	<div style="width: 30%;float: left"></div>

</div>
<div style="width: 100%;font-family: times new roman;margin-top:2.8px">

   <div style="width: 50%;float: left">==================================================</div>
   <div style="width: 18%;float: left;">&nbsp;</div>
	<div style="width: 30%;float: left"></div>

</div>
<div style="width: 100%;font-family: times new roman;margin-top:2.8px">

   <div style="width: 50%;float: left">
	<?php
		foreach ($model2 as $barang) {
			echo "-".$barang->jualBarang->nama."&nbsp;(".$barang->jumlah.")<br />";
		}
	?>

   </div>
   <div style="width: 18%;float: left;">&nbsp;</div>
	<div style="width: 30%;float: left"></div>

</div>
<div style="width: 100%;font-family: times new roman;margin-top:2.8px">

   <div style="width: 50%;float: left">
	<?php
	echo "<b style='color:red'>".strtoupper($model->instruksi_khusus)."</b>";
	?>
   </div>
   <div style="width: 18%;float: left;">&nbsp;</div>
	<div style="width: 30%;float: left"></div>

</div>

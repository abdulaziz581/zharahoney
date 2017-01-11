<?php
$this->breadcrumbs=array(
	'Pembayarans'=>array('index'),
	$model->id,
);

$this->menu=array(
//array('label'=>'List Pembayaran','url'=>array('index')),
array('label'=>'Tambah Pembayaran','url'=>array('create')),
array('label'=>'Update Pembayaran','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Pembayaran','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Pembayaran','url'=>array('admin')),
);
?>

<h1>View Pembayaran #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'id_penjualan',
		'id_bank',
		'byr_nmbank',
		'byr_nama',
		'byr_noref',
		'byr_tgl',
		'jumlah',
		//'id_user',
		//'created_date',
		//'updated_date',
		'keterangan',
),
)); ?>

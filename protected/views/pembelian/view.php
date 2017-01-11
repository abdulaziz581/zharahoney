<?php
$this->breadcrumbs=array(
	'Pembelians'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Pembelian','url'=>array('index')),
array('label'=>'Create Pembelian','url'=>array('create')),
array('label'=>'Update Pembelian','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Pembelian','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Pembelian','url'=>array('admin')),
);
?>

<h1>View Pembelian #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'id_customerservice',
		'id_metodebayar',
		'id_ordervia',
		'id_ekspedisi',
		'id_pembeli',
		'kode_trans',
		'verifikasi',
		'tanggal',
		'kode_unik',
		'created_date',
		'updated_date',
),
)); ?>

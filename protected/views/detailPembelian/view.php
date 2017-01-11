<?php
$this->breadcrumbs=array(
	'Detail Pembelians'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List DetailPembelian','url'=>array('index')),
array('label'=>'Create DetailPembelian','url'=>array('create')),
array('label'=>'Update DetailPembelian','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete DetailPembelian','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage DetailPembelian','url'=>array('admin')),
);
?>

<h1>View DetailPembelian #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'id_pembelian',
		'id_barang',
		'jumlah',
		'harga',
),
)); ?>

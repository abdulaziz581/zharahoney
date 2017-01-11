<?php
$this->breadcrumbs=array(
	'Wkt Sampais'=>array('index'),
	$model->id,
);

$this->menu=array(
//array('label'=>'List WktSampai','url'=>array('index')),
array('label'=>'Tambah Waktu Sampai','url'=>array('create')),
array('label'=>'Update Waktu Sampai','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Waktu Sampai','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Waktu Sampai','url'=>array('admin')),
);
?>

<h2>View Waktu Sampai #<?php echo $model->id; ?></h2>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		//'id_propinsi',
		[
			'type'=>'raw',
			'name'=>'nmPropinsi',
			'value'=>$model->wktpropinsi->nama,

		],
		[
			'type'=>'raw',
			'name'=>'nmEkspedisi',
			'value'=>$model->wktekspedisi->nama,

		],
		//'id_ekspedisi',
		'lama',
),
)); ?>

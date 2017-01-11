<?php
$this->breadcrumbs=array(
	'Kecamatan'=>array('index'),
	$model->id,
);

$this->menu=array(
//array('label'=>'List Kecamatan','url'=>array('index')),
array('label'=>'Tambah Kecamatan','url'=>array('create')),
array('label'=>'Update Kecamatan','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Kecamatan','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Kecamatan','url'=>array('admin')),
);
?>

<h2>Detail Kecamatan</h2>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nama',
		//'id_kota',
		[
			'type'=>'raw',
			'name'=>'nmKota',
			'value'=>$model->kecamatankota->nama,
		],
),
)); ?>

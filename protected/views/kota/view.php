<?php
$this->breadcrumbs=array(
	'Kota'=>array('index'),
	$model->id,
);

$this->menu=array(
// array('label'=>'List Kota','url'=>array('index')),
array('label'=>'Tambah Kota','url'=>array('create')),
array('label'=>'Update Kota','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Kota','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Kota','url'=>array('admin')),
);
?>

<h2>Detail Kota</h2>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nama',
		//'id_propinsi',
		[
			'type'=>'raw',
			'name'=>'nmpropinsi',
			'value'=>$model->kotapropinsi->nama,

		],
),
)); ?>

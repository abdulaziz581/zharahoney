<?php
$this->breadcrumbs=array(
	'Ekspedisis'=>array('index'),
	$model->id,
);

$this->menu=array(
//array('label'=>'List Ekspedisi','url'=>array('index')),
array('label'=>'Tambah Ekspedisi','url'=>array('create')),
array('label'=>'Update Ekspedisi','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Ekspedisi','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Ekspedisi','url'=>array('admin')),
);
?>

<h1>View Ekspedisi #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'kode_ekspedisi',
		'nama',
),
)); ?>

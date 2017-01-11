<?php
$this->breadcrumbs=array(
	'Customer Service'=>array('index'),
	$model->id,
);

$this->menu=array(
//array('label'=>'List Customerservice','url'=>array('index')),
array('label'=>'Tambah Customer Service','url'=>array('create')),
array('label'=>'Update Customer Service','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Customer Service','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Customer Service','url'=>array('admin')),
);
?>

<h2>Detail Customer Service</h2>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'kode_cs',
		'nama',
		'no_handphone',
		'facebook',
),
)); ?>

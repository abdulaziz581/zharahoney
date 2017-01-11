<?php
$this->breadcrumbs=array(
	'Order Via'=>array('index'),
	$model->id,
);

$this->menu=array(
//array('label'=>'List Ordervia','url'=>array('index')),
array('label'=>'Tambah Ordervia','url'=>array('create')),
array('label'=>'Update Ordervia','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Ordervia','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Ordervia','url'=>array('admin')),
);
?>

<h2>Detail Order Via</h2>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nama',
),
)); ?>

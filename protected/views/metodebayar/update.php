<?php
$this->breadcrumbs=array(
	'Metodebayars'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	//array('label'=>'List Metodebayar','url'=>array('index')),
	array('label'=>'Tambah Metode Bayar','url'=>array('create')),
	array('label'=>'Detail Metode Bayar','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Metode Bayar','url'=>array('admin')),
	);
	?>

	<h2>Update Metode Bayar</h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
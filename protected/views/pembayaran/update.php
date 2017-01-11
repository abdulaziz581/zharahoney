<?php
$this->breadcrumbs=array(
	'Pembayarans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	//array('label'=>'List Pembayaran','url'=>array('index')),
	array('label'=>'Tambah Pembayaran','url'=>array('create')),
	array('label'=>'View Pembayaran','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Pembayaran','url'=>array('admin')),
	);
	?>

	<h1>Update Pembayaran <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
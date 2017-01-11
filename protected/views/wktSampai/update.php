<?php
$this->breadcrumbs=array(
	'Wkt Sampais'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	//array('label'=>'List WktSampai','url'=>array('index')),
	array('label'=>'Tambah Waktu Sampai','url'=>array('create')),
	array('label'=>'View Waktu Sampai','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Waktu Sampai','url'=>array('admin')),
	);
	?>

	<h2>Update Waktu Sampai <?php echo $model->id; ?></h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
<?php
$this->breadcrumbs=array(
	'Banks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	//array('label'=>'List Bank','url'=>array('index')),
	array('label'=>'Tambah Data Bank','url'=>array('create')),
	array('label'=>'Detail Data Bank','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Data Bank','url'=>array('admin')),
	);
	?>

	<h2>Update Data Rekening Bank <?php //echo $model->id; ?></h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
<?php
$this->breadcrumbs=array(
	'Propinsis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	//array('label'=>'List Propinsi','url'=>array('index')),
	array('label'=>'Tambah Propinsi','url'=>array('create')),
	array('label'=>'View Propinsi','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Propinsi','url'=>array('admin')),
	);
	?>

	<h2>Update Propinsi</h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
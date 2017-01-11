<?php
$this->breadcrumbs=array(
	'Customer Services'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	//array('label'=>'List Customerservice','url'=>array('index')),
	array('label'=>'Tambah Customer Service','url'=>array('create')),
	array('label'=>'Detail Customer Service','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Customer Service','url'=>array('admin')),
	);
	?>

	<h2>Update Customer Service</h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
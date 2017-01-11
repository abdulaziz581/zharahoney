<?php
$this->breadcrumbs=array(
	'Pembelis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Pembeli','url'=>array('index')),
	array('label'=>'Create Pembeli','url'=>array('create')),
	array('label'=>'View Pembeli','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Pembeli','url'=>array('admin')),
	);
	?>

	<h1>Update Pembeli <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
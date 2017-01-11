<?php
$this->breadcrumbs=array(
	'Ordervias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	//array('label'=>'List Ordervia','url'=>array('index')),
	array('label'=>'Tambah Order Via','url'=>array('create')),
	array('label'=>'Detail Order Via','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Order Via','url'=>array('admin')),
	);
	?>

	<h2>Update Order Via</h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
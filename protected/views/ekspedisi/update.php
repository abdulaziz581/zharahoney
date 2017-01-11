<?php
$this->breadcrumbs=array(
	'Ekspedisis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	//array('label'=>'List Ekspedisi','url'=>array('index')),
	array('label'=>'Tambah Ekspedisi','url'=>array('create')),
	array('label'=>'Detail Ekspedisi','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Ekspedisi','url'=>array('admin')),
	);
	?>

	<h2>Update Ekspedisi</h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
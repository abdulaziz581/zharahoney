<?php
$this->breadcrumbs=array(
	'Kecamatans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	///array('label'=>'List Kecamatan','url'=>array('index')),
	array('label'=>'Tambah Kecamatan','url'=>array('create')),
	array('label'=>'View Kecamatan','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Kecamatan','url'=>array('admin')),
	);
	?>

	<h2>Update Kecamatan</h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
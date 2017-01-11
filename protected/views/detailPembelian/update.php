<?php
$this->breadcrumbs=array(
	'Detail Pembelians'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List DetailPembelian','url'=>array('index')),
	array('label'=>'Create DetailPembelian','url'=>array('create')),
	array('label'=>'View DetailPembelian','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage DetailPembelian','url'=>array('admin')),
	);
	?>

	<h1>Update DetailPembelian <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
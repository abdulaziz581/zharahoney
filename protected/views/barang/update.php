<?php
$this->breadcrumbs=array(
	'Barangs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	//array('label'=>'List Barang','url'=>array('index')),
	array('label'=>'Tambah Barang','url'=>array('create')),
	array('label'=>'Detail Barang','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Barang','url'=>array('admin')),
	);
	?>

	<h2>Update Barang</h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
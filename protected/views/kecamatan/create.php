<?php
$this->breadcrumbs=array(
	'Kecamatan'=>array('index'),
	'Create',
);

$this->menu=array(
////array('label'=>'List Kecamatan','url'=>array('index')),
array('label'=>'Manage Kecamatan','url'=>array('admin')),
);
?>

<h2>Tambah Kecamatan</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
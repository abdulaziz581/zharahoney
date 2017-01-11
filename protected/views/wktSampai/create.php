<?php
$this->breadcrumbs=array(
	'Wkt Sampais'=>array('index'),
	'Create',
);

$this->menu=array(
//array('label'=>'List WktSampai','url'=>array('index')),
array('label'=>'Manage Waktu Sampai','url'=>array('admin')),
);
?>

<h2>Tambah Waktu Sampai</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
$this->breadcrumbs=array(
	'Pembeli'=>array('index'),
	'Create',
);

$this->menu=array(
//array('label'=>'List Pembeli','url'=>array('index')),
array('label'=>'Manage Pembeli','url'=>array('admin')),
);
?>

<h2>Tambah Data Pembeli</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
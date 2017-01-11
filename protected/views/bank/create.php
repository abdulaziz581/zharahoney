<?php
$this->breadcrumbs=array(
	'Bank'=>array('index'),
	'Tambah Data',
);

$this->menu=array(
//array('label'=>'List Bank','url'=>array('index')),
array('label'=>'Manage Bank','url'=>array('admin')),
);
?>

<h2>Tambah Data Rekening Bank</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
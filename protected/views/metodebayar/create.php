<?php
$this->breadcrumbs=array(
	'Metode Bayar'=>array('index'),
	'Tambah',
);

$this->menu=array(
//array('label'=>'List Metodebayar','url'=>array('index')),
array('label'=>'Manage Metode Bayar','url'=>array('admin')),
);
?>

<h2>Tambah Metode Bayar</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
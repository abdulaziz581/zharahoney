<?php
$this->breadcrumbs=array(
	'Pembayarans'=>array('index'),
	'Create',
);

$this->menu=array(
//array('label'=>'List Pembayaran','url'=>array('index')),
array('label'=>'Manage Pembayaran','url'=>array('admin')),
);
?>

<h1>Tambah Pembayaran</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
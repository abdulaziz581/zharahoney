<?php
$this->breadcrumbs=array(
	'Detail Pembelians'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List DetailPembelian','url'=>array('index')),
array('label'=>'Manage DetailPembelian','url'=>array('admin')),
);
?>

<h1>Create DetailPembelian</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
$this->breadcrumbs=array(
	'Penjualans'=>array('index'),
	'Create',
);

$this->menu=array(
//array('label'=>'List Penjualan','url'=>array('index')),
//array('label'=>'Manage Penjualan','url'=>array('admin')),
);
?>

<h2>Transaksi Penjualan</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model,'jual'=>$jual)); ?>
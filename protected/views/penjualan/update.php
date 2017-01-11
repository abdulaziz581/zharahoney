<?php
$this->breadcrumbs=array(
	'Penjualans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	//array('label'=>'List Penjualan','url'=>array('index')),
	array('label'=>'Tambah Penjualan','url'=>array('create')),
	array('label'=>'View Penjualan','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Penjualan','url'=>array('admin')),
	);
	?>

	<h2>Transaksi Penjualan</h2>

<?php echo $this->renderPartial('_form',array('model'=>$model,'jual'=>$jual,'detail'=>$detail,'cariDetail'=>$cariDetail)); ?>
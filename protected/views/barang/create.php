<?php
$this->breadcrumbs=array(
	'Barang'=>array('index'),
	'Create',
);

$this->menu=array(
//array('label'=>'List Barang','url'=>array('index')),
array('label'=>'Manage Data Barang','url'=>array('admin')),
);
?>

<h2>Tambah Data Barang</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
$this->breadcrumbs=array(
	'Ekspedisi'=>array('index'),
	'Tambah',
);

$this->menu=array(
//array('label'=>'List Ekspedisi','url'=>array('index')),
array('label'=>'Manage Ekspedisi','url'=>array('admin')),
);
?>

<h2>Tambah Ekspedisi</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
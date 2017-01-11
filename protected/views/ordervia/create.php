<?php
$this->breadcrumbs=array(
	'Order Via'=>array('index'),
	'Create',
);

$this->menu=array(
//array('label'=>'List Ordervia','url'=>array('index')),
array('label'=>'Manage Ordervia','url'=>array('admin')),
);
?>

<h2>Tambah Ordervia</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
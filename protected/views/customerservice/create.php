<?php
$this->breadcrumbs=array(
	'Customer Service'=>array('index'),
	'Create',
);

$this->menu=array(
//array('label'=>'List Customerservice','url'=>array('index')),
array('label'=>'Manage Customer Service','url'=>array('admin')),
);
?>

<h2>Tambah Customer Service</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
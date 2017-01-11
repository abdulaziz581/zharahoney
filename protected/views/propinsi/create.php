<?php
$this->breadcrumbs=array(
	'Propinsi'=>array('index'),
	'Create',
);

$this->menu=array(
//array('label'=>'List Propinsi','url'=>array('index')),
array('label'=>'Manage Propinsi','url'=>array('admin')),
);
?>

<h2>Tambah Propinsi</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
<?php
$this->breadcrumbs=array(
	'Kotas'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Kota','url'=>array('index')),
array('label'=>'Manage Kota','url'=>array('admin')),
);
?>

<h1>Create Kota</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
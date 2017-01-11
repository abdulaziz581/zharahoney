<?php
$this->breadcrumbs=array(
	'Wkt Sampais',
);

$this->menu=array(
array('label'=>'Create WktSampai','url'=>array('create')),
array('label'=>'Manage WktSampai','url'=>array('admin')),
);
?>

<h1>Wkt Sampais</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>

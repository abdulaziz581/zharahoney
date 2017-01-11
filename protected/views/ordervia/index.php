<?php
$this->breadcrumbs=array(
	'Ordervias',
);

$this->menu=array(
array('label'=>'Create Ordervia','url'=>array('create')),
array('label'=>'Manage Ordervia','url'=>array('admin')),
);
?>

<h1>Ordervias</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>

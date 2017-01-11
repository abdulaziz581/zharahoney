<?php
$this->breadcrumbs=array(
	'Pembelis',
);

$this->menu=array(
array('label'=>'Create Pembeli','url'=>array('create')),
array('label'=>'Manage Pembeli','url'=>array('admin')),
);
?>

<h1>Pembelis</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>

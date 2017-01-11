<?php
$this->breadcrumbs=array(
	'Penjualans',
);

$this->menu=array(
array('label'=>'Create Penjualan','url'=>array('create')),
array('label'=>'Manage Penjualan','url'=>array('admin')),
);
?>

<h1>Penjualans</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>

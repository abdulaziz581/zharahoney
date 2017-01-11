<?php
$this->breadcrumbs=array(
	'Pembelians',
);

$this->menu=array(
array('label'=>'Create Pembelian','url'=>array('create')),
array('label'=>'Manage Pembelian','url'=>array('admin')),
);
?>

<h1>Pembelians</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>

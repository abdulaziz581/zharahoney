<?php
$this->breadcrumbs=array(
	'Pembayarans',
);

$this->menu=array(
array('label'=>'Create Pembayaran','url'=>array('create')),
array('label'=>'Manage Pembayaran','url'=>array('admin')),
);
?>

<h1>Pembayarans</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>

<?php
$this->breadcrumbs=array(
	'Detail Pembelians',
);

$this->menu=array(
array('label'=>'Create DetailPembelian','url'=>array('create')),
array('label'=>'Manage DetailPembelian','url'=>array('admin')),
);
?>

<h1>Detail Pembelians</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>

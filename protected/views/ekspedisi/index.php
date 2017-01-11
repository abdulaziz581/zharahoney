<?php
$this->breadcrumbs=array(
	'Ekspedisis',
);

$this->menu=array(
array('label'=>'Create Ekspedisi','url'=>array('create')),
array('label'=>'Manage Ekspedisi','url'=>array('admin')),
);
?>

<h1>Ekspedisis</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>

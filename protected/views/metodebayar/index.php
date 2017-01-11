<?php
$this->breadcrumbs=array(
	'Metodebayars',
);

$this->menu=array(
array('label'=>'Create Metodebayar','url'=>array('create')),
array('label'=>'Manage Metodebayar','url'=>array('admin')),
);
?>

<h1>Metodebayars</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>

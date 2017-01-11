<?php
$this->breadcrumbs=array(
	'Customerservices',
);

$this->menu=array(
array('label'=>'Create Customerservice','url'=>array('create')),
array('label'=>'Manage Customerservice','url'=>array('admin')),
);
?>

<h1>Customerservices</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>

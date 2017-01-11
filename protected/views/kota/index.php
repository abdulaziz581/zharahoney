<?php
$this->breadcrumbs=array(
	'Kotas',
);

$this->menu=array(
array('label'=>'Create Kota','url'=>array('create')),
array('label'=>'Manage Kota','url'=>array('admin')),
);
?>

<h1>Kotas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>

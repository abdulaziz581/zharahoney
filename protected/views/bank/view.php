<?php
$this->breadcrumbs=array(
	'Bank'=>array('index'),
	$model->id,
);

$this->menu=array(
//array('label'=>'List Bank','url'=>array('index')),
array('label'=>'Tambah Data Bank','url'=>array('create')),
array('label'=>'Update Data Bank','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Data Bank','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Data Bank','url'=>array('admin')),
);
?>

<h2>Detail Data Rekening Bank</h2>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nama',
		'no_rekening',
		'nama_akun',
		'cabang',
),
)); ?>

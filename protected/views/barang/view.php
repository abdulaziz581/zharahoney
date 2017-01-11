<?php
$this->breadcrumbs=array(
	'Barang'=>array('index'),
	$model->id,
);

$this->menu=array(
//array('label'=>'List Barang','url'=>array('index')),
array('label'=>'Tambah Barang','url'=>array('create')),
array('label'=>'Update Barang','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Barang','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Barang','url'=>array('admin')),
);
?>

<h2>Detail Data Barang</h2>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'kode',
		'nama',
		//'harga',
		array(
	        'name'=>'harga',
	        'type'=>'raw',
	        'value'=>'Rp. '.Yii::app()->numberFormatter->format("###,###,###",$model->harga),
        ),
),
)); ?>

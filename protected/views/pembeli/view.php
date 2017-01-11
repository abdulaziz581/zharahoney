<?php
$this->breadcrumbs=array(
	'Pembeli'=>array('index'),
	$model->id,
);

$this->menu=array(
//array('label'=>'List Pembeli','url'=>array('index')),
array('label'=>'Tambah Pembeli','url'=>array('create')),
array('label'=>'Update Pembeli','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Pembeli','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Pembeli','url'=>array('admin')),
);
?>

<h2>Detail Pembeli</h2>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'nama',
		'alamat',
		array(
			'type'=>'raw',
			'name'=>'id_propinsi',
			'header'=>'Propinsi',
			'value'=>$model->pembelipropinsi->nama,
		),
		array(
			'type'=>'raw',
			'name'=>'id_kota',
			'header'=>'Kota',
			'value'=>$model->pembelikota->nama,
		),
		array(
			'type'=>'raw',
			'name'=>'id_kecamatan',
			'header'=>'Kecamatan',
			'value'=>$model->pembelikecamatan->nama,
		),
		

		///'id_propinsi',
		//'id_kota',
		//'id_kecamatan',
		'kode_pos',
		'no_telpon',
		'no_handphone',
		'email',
		'facebook',
		'twitter',
),
)); ?>

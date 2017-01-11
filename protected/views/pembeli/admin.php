<?php
$this->breadcrumbs=array(
	'Pembeli'=>array('index'),
	'Manage',
);

$this->menu=array(
//array('label'=>'List Pembeli','url'=>array('index')),
array('label'=>'Tambah Pembeli','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('pembeli-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h2>Manage Data Pembeli</h2>
<!--
<p>
	You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'pembeli-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
	array(
                    'header' => 'No.',
                    'value' => '$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
                ),
                'nama',
		'alamat',
		array(
			'type'=>'raw',
			'name'=>'nmpropinsi',
			'header'=>'Propinsi',
			'value'=>'$data->pembelipropinsi->nama',
		),
		array(
			'type'=>'raw',
			'name'=>'nmkota',
			'header'=>'Kota',
			'value'=>'$data->pembelikota->nama',
		),
		array(
			'type'=>'raw',
			'name'=>'nmkecamatan',
			'header'=>'Kecamatan',
			'value'=>'$data->pembelikecamatan->nama',
		),
		//'id_propinsi',
		//'id_kota',
		//'id_kecamatan',
		/*
		'kode_pos',
		'no_telpon',
		'no_handphone',
		'email',
		'facebook',
		'twitter',
		*/
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>

<?php
$this->breadcrumbs=array(
	'Wkt Sampais'=>array('index'),
	'Manage',
);

$this->menu=array(
//array('label'=>'List WktSampai','url'=>array('index')),
array('label'=>'Tambah Waktu Sampai','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('wkt-sampai-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h2>Manage Waktu Sampai</h2>

<!--<p>
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
'id'=>'wkt-sampai-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		//'id',
		array(
                    'header' => 'No.',
                    'value' => '$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
                ),
		//'id_propinsi',
		array(
			'name'=>'nmPropinsi',
			'header'=>'Propinsi',
			'value'=>'$data->wktpropinsi->nama'
		),
		//'id_ekspedisi',
		array(
			'name'=>'nmEkspedisi',
			'header'=>'Ekspedisi',
			'value'=>'$data->wktekspedisi->nama'
		),
		'lama',
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>

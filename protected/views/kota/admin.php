<?php
$this->breadcrumbs=array(
	'Kota'=>array('index'),
	'Manage',
);

$this->menu=array(
//array('label'=>'List Kota','url'=>array('index')),
array('label'=>'Tambah Kota','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('kota-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h2>Manage Data Kota</h2>
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
'id'=>'kota-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		//'id',
		array(
                    'header' => 'No.',
                    'value' => '$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
                ),
		'nama',
		//'id_propinsi',
		array(
			//'type'=>'raw',
			'name'=>'nmpropinsi',
			'header'=>'Nama Propinsi',
			'value'=>'$data->kotapropinsi->nama',
		),

array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>

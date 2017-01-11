<?php
$this->breadcrumbs=array(
	'Pembelians'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Pembelian','url'=>array('index')),
array('label'=>'Create Pembelian','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('pembelian-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Manage Pembelians</h1>

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
'id'=>'pembelian-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id',
		'id_customerservice',
		'id_metodebayar',
		'id_ordervia',
		'id_ekspedisi',
		'id_pembeli',
		/*
		'kode_trans',
		'verifikasi',
		'tanggal',
		'kode_unik',
		'created_date',
		'updated_date',
		*/
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>

<?php
$this->breadcrumbs=array(
	'Barang'=>array('index'),
	'Manage',
);

$this->menu=array(
//array('label'=>'List Barang','url'=>array('index')),
array('label'=>'Tambah Barang','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('barang-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h2>Manage Data Barang</h2>
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
'id'=>'barang-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		array(
                    'header' => 'No.',
                    'value' => '$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
                ),
		'kode',
		'nama',
		//'harga',
		array(
            'name'=>'harga',
            'header'=>'Harga',
            'type'=>'raw',
            'filter'=>FALSE,
            'value'=>'Yii::app()->numberFormatter->format("###,###,###",$data->harga)',
            'htmlOptions'=>array('style' => 'text-align: right;')
        ),
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>

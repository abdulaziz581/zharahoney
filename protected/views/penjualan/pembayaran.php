<?php
$this->breadcrumbs=array(
	'Penjualans'=>array('index'),
	'Manage',
);

$this->menu=array(
//array('label'=>'List Penjualan','url'=>array('index')),
//array('label'=>'Tambah Penjualan','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('penjualan-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h2>Status Pembayaran</h2>
<!--
<p>
	You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
-->
<?php echo CHtml::link('Filter Tanggal ','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 

$this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'penjualan-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
			array(
                    'header' => 'No.',
                    'value' => '$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
                ),
		'kode_trans',
		array(
			'name'=>'namaPembeli',
			'header'=>'Nama Pembeli',
			'value'=>'$data->pembelipenjualan->nama'
		),
		array(
			'name'=>'tanggal',
			'type'=>'raw',
			'header'=>'Tanggal',
			'filter'=>'',
			'value'=>'Fungsi::tanggal($data->tanggal)'
		),
		array(
			'name'=>'namaOrdervia',
			'header'=>'Order Via',
			'value'=>'isset($data->orderviapenjualan->nama)?$data->orderviapenjualan->nama:"-"'
		),
		array(
			'name'=>'namaCustomerservice',
			//'header'=>'Order Via',
			'value'=>'isset($data->customerservicepenjualan->nama)?$data->customerservicepenjualan->nama:"-"'
		),
		array(
			'name'=>'verifikasi',
			'filter' => CHtml::dropDownList('Penjualan[verifikasi]', $model->verifikasi, ['belum'=>'Belum', 'sudah'=>'Sudah'], array('empty' => '::: Status Verifikasi')),
			'value'=>'$data->verifikasi'
		),
		array(
			'name'=>'statuskirim',
			'filter' => CHtml::dropDownList('Penjualan[statuskirim]', $model->statuskirim, ['belum'=>'Belum', 'proses'=>'Proses','sampai'=>'Sampai'], array('empty' => '::: Status Pengiriman')),
			'value'=>'$data->statuskirim'
		),
		[
                    'class' => 'booster.widgets.TbEditableColumn',
                    'name' => 'statusbayar',
                    //'filter'=>'',
                    'filter' => CHtml::dropDownList('Penjualan[statusbayar]', $model->statusbayar, ['belum'=>'Belum', 'batal'=>'Batal','lunas'=>'Lunas'], array('empty' => '::: Status Pembayaran')),            

                    'editable' => [
                        'type' => 'select',
                        'url' => $this->createUrl('penjualan/editpembayaran'),
                        'source' => array('belum'=>'Belum','batal'=>'Batal','lunas'=>'Lunas'),
                    ],
                    'htmlOptions' => [
                        'style' => 'width:100px;'
                    ]          
                ],
        [
                    'class' => 'booster.widgets.TbEditableColumn',
                    'name' => 'id_metodebayar',
                    //'filter'=>'',
                    'filter'=>CHtml::dropDownList('Penjualan[id_metodebayar]', $model->id_metodebayar, CHtml::listData(Metodebayar::model()->findAll(), 'id', 'nama'), array('prompt'=>"::Metode Bayar", "class"=>"form-control")),           

                    'editable' => [
                        'type' => 'select',
                        'url' => $this->createUrl('penjualan/editmetodebayar'),
                        'source' => CHtml::listData(Metodebayar::model()->findAll(), 'id', 'nama'),
                    ],
                    'htmlOptions' => [
                        'style' => 'width:100px;'
                    ]          
                ],
		/*'statusbayar',
		'statuskirim',
		array(
			'name'=>'namaEkspedisi',
			'header'=>'Ekspedisi',
			'value'=>'isset($data->ekspedisipenjualan->nama)?$data->ekspedisipenjualan->nama:"-"'
		),*/
		//'id_customerservice',
		//'id_metodebayar',
		//'id_ordervia',
		//'id_ekspedisi',
		//'id_pembeli',
		/*
		'kode_trans',
		'verifikasi',
		'tanggal',
		'kode_unik',
		'created_date',
		'updated_date',
		
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),*/
array
(
    'class'=>'CButtonColumn',
    'template'=>'{view}',
)
),
)); ?>

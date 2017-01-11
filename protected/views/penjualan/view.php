<?php
$this->breadcrumbs=array(
	'Penjualans',
	$model->id,
);

$this->menu=array(
//array('label'=>'List Penjualan','url'=>array('index')),
//array('label'=>'Tambah Penjualan','url'=>array('create')),
//array('label'=>'Update Penjualan','url'=>array('update','id'=>$model->id)),
//array('label'=>'Delete Penjualan','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//array('label'=>'Manage Penjualan','url'=>array('admin')),
);
?>

<h2>Detail Penjualan #<?php echo $model->id; ?></h2>

<?php 
$tot=Yii::app()->db->createCommand()
        ->select('sum(total) as totalan')
        ->from('detail_penjualan')
        ->where('id_penjualan='.$model->id)
        ->queryRow();
$this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		//'id_customerservice',
		//'id_metodebayar',
		//'id_ordervia',
		//'id_ekspedisi',
		//'id_pembeli',
		'kode_trans',
		//'kode_unik',
		[
			'name'=>'namaPembeli',
			'type'=>'raw',
			'value'=>$model->pembelipenjualan->nama
		],
		[
			'label'=>'Alamat',
			'type'=>'raw',
			'value'=>$model->pembelipenjualan->alamat
		],
		[
			'label'=>'Kecamatan',
			'type'=>'raw',
			'value'=>$model->pembelipenjualan->pembelikecamatan->nama
		],
		[
			'label'=>'Kota/Kabupaten',
			'type'=>'raw',
			'value'=>$model->pembelipenjualan->pembelikota->nama
		],
		[
			'label'=>'Propinsi',
			'type'=>'raw',
			'value'=>$model->pembelipenjualan->pembelipropinsi->nama
		],
		[
			'label'=>'Total Transfer',
			'type'=>'raw',
			'value'=>'Rp.'.Yii::app()->numberFormatter->format("###,###,###",$model->kode_unik+$model->ongkir+$tot['totalan'])
		],
        [
            'name'=>'namaEkspedisi',
            'type'=>'raw',
            'value'=>$model->ekspedisipenjualan->nama
        ],
		//'tanggal',
		
		//'created_date',
		//'updated_date',
),
)); ?>
<?php //$this->widget('bootstrap.widgets.TbGridView',array(
$this->widget('zii.widgets.grid.CGridView', array(
'id'=>'detail-penjualan-grid',
'dataProvider'=>$cariDetail->caridet($model->id),
'enableSorting'=>false,
'summaryText'=>'',
'emptyText'=>'Data Penjualan Masih Kosong',
'columns'=>array(
				array(
                    'header' => 'No.',
                    'value' => '$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
                ),
                array(
                    'name'=>'kode',
                    'type'=>'raw',
                    'value'=>'$data->jualBarang->kode',
                ),
				array(
                    'name'=>'barang',
                    'type'=>'raw',
                    'value'=>'$data->jualBarang->nama',
                ),
               
       			array(
                    'name'=>'jumlah',
                    'type'=>'raw',
                    'value'=>'$data->jumlah',
                    'htmlOptions'=>array('style' => 'text-align: right;')
                ),
                
				array(
                    'name'=>'harga',
                    'type'=>'raw',
                    'value'=>'Yii::app()->numberFormatter->format("###,###,###",$data->harga)',
                    'htmlOptions'=>array('style' => 'text-align: right;')
                ),
		  		array(
                    'name'=>'total',
                    'type'=>'raw',
                    'value'=>'Yii::app()->numberFormatter->format("###,###,###",$data->total)',
                    'htmlOptions'=>array('style' => 'text-align: right;')
                ),
		  		          
),
)); 
?>
 <div style="margin-left: 10%;text-align: right;padding: 0px 80px 0px 0px"><h4>Grand Total : <?php echo Yii::app()->numberFormatter->format("Rp ###,###,###",$tot['totalan']) ?></h4></div>
        <div style="width:50%;margin-left: 40%;text-align: right;padding: 0.5px 10px 0px 2px">
        
         <?php 
               	echo '<h4>Ongkos Kirim :';
         		echo Yii::app()->numberFormatter->format("Rp ###,###,###",$model->ongkir);
        		echo '</h4>';

        ?>
         <?php 
                echo '<h5>Instruksi Khusus :';
                echo '<i style=color:red>'.$model->instruksi_khusus.'</i>';
                echo '</h5>';

        ?>
        </div>
        <br />
        <div style="padding-left: 75%;text-align: right">
        <?php
                $this->widget('booster.widgets.TbButton',
                array(
                    'label' => 'SELESAI',
                    'type' => 'success',
                    'url'=>'index.php?r=penjualan/admin',
                ));
        ?>
            &nbsp;&nbsp;&nbsp;
        <a target="_blank" href="<?php echo Yii::app()->createUrl('penjualan/cetakpenjualan/id/'.$model->id); ?>" class="btn btn-primary">
        <i class="fa fa-print"></i> CETAK DATA</a>
         
        </div>

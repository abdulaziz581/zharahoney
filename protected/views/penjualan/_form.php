<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'penjualan-form',
	'enableAjaxValidation'=>false,
)); ?>


<?php if($model->isNewRecord){
?>
<p class="help-block">Fields with <span class="required">*</span> are required.</p>
<?php echo $form->errorSummary($model); ?>

	<?php //echo $form->textFieldRow($model,'id_customerservice',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'id_metodebayar',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'id_ordervia',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'id_ekspedisi',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'id_pembeli',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'kode_trans',array('class'=>'span5','maxlength'=>255)); ?>

	<?php //echo $form->textFieldRow($model,'verifikasi',array('class'=>'span5','maxlength'=>255)); ?>
	  <?php echo CHtml::encode($model->getAttributeLabel('id_pembeli'),array('class'=>'span5')); ?>
      <p>
            <?php 
               	$this->widget('bootstrap.widgets.TbSelect2', array(
			'asDropDownList' => true,
			'name' => 'Penjualan[id_pembeli]',
			'data'=>CHtml::listData(Pembeli::model()->findAll(), 'id','fullName'),
			'options'=>array(
					'placeholder' => 'Pilih Pembeli',
					'required'=>'required',
			),
			'htmlOptions'=>array(
					//'prompt'=>'',
					'options'=>array($model->id_pembeli=>array('selected'=>true)),
                                        'class'=>'span8'
			)
                ));

                ?> &nbsp;&nbsp;<a href="#" class="btn btn-primary" id="cek"> <i class="icon icon-user"></i> TAMBAH</a>&nbsp;&nbsp;<a href="#" class="btn btn-success" id="segar"> <i class="icon icon-refresh"></i> REFRESH</a>   
        </p>
        
        <?php echo CHtml::encode($model->getAttributeLabel('id_ekspedisi'),array('class'=>'span4')); ?>
        <p>
            <?php 
               	$this->widget('bootstrap.widgets.TbSelect2', array(
			'asDropDownList' => true,
			'name' => 'Penjualan[id_ekspedisi]',
			'data'=>CHtml::listData(Ekspedisi::model()->findAll(), 'id','nama'),
			'options'=>array(
					'placeholder' => 'Pilih Ekspedisi',
					'required'=>'required',
			),
			'htmlOptions'=>array(
					//'prompt'=>'',
					'options'=>array($model->id_ekspedisi=>array('selected'=>true)),
                                        'class'=>'span8'
			)
                ));

                ?> 
        </p>
        <br />
        <br />
        <?php echo CHtml::encode($model->getAttributeLabel('id_ordervia'),array('class'=>'span12')); ?>
        <p>
            <?php 
               	$this->widget('bootstrap.widgets.TbSelect2', array(
			'asDropDownList' => true,
			'name' => 'Penjualan[id_ordervia]',
			'data'=>CHtml::listData(Ordervia::model()->findAll(), 'id','nama'),
			'options'=>array(
					'placeholder' => 'Pilih Metode Order',
					'required'=>'required',
			),
			'htmlOptions'=>array(
					//'prompt'=>'',
					'options'=>array($model->id_ordervia=>array('selected'=>true)),
                                        'class'=>'span8'
			)
                ));

                ?> 
        </p>
         
        <br />
        <br />
        <p>
     
	<?php echo $form->datepickerRow($model,'tanggal',array('options'=>array('format' => 'yyyy-mm-dd','viewformat'=>'dd/mm/YY'),'htmlOptions'=>array('class'=>'span5',)),array('prepend'=>'<i class="icon-calendar"></i>','append'=>'Masukkan Tanggal')); ?>
	</p>

	<?php //echo $form->textFieldRow($model,'kode_unik',array('class'=>'span5','maxlength'=>255)); ?>

	<?php //echo $form->textFieldRow($model,'created_date',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'updated_date',array('class'=>'span5')); ?>
	<hr />
	<h4>Detail Penjualan</h4>
        <hr />
        <?php //echo $form->textFieldRow($jual,'id_buku',array('class'=>'span5','maxlength'=>255)); ?>
        <p> 
            <span style="font-size: 14px"><?php echo CHtml::encode($jual->getAttributeLabel('id_barang')); ?></span></p>
        <p>
            <?php 
               	$this->widget('bootstrap.widgets.TbSelect2', array(
			'asDropDownList' => true,
                        
                       // 'readonly'=>'readonly',
			'name' => 'DetailPenjualan[id_barang]',
			'data'=>CHtml::listData(Barang::model()->findAll(),'id','fullName'),
			'options'=>array(
					'placeholder' => 'Pilih Barang',
					'required'=>'required',
                                        
			),
			'htmlOptions'=>array(
					//'prompt'=>'',
					'options'=>array($jual->id_barang=>array('selected'=>true)),
                                        'class'=>'span8',
                                        'ajax' => array(
                                            'type' => 'POST',
                                            'url' => CController::createUrl('barang/get_harga'),
                                            'update' => '#harga',
                                            'data' => array('id_barang' => 'js:this.value'),
                                        )
			)
                ));

                ?>    
        <br />
        </p>
        <?php 
            $this->widget('application.extensions.moneymask.MMask',array(
                'element'=>'#harga',
                'currency'=>'PHP',
                'config'=>array(
                        'symbol'=>'',
                        'showSymbol'=>true,
                        'symbolStay'=>true,
                        'thousands'=>',',
                        'decimal'=>'.',
                        'precision'=>0,
                    )
            ));
            echo $form->textFieldRow($jual,'harga',array('class'=>'span3','id'=>'harga','value'=>'0','style'=>'text-align:right','required'=>'required'));
            ?>
            <?php echo $form->textFieldRow($jual,'jumlah',array('class'=>'span3','style'=>'text-align:right','required'=>'required')); ?>
<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
<?php }else{?>
<?php echo $form->errorSummary($model); ?>
	<?php echo $form->hiddenField($model,'id',array('class'=>'span5')); ?>
	
            
	<?php //echo $form->textFieldRow($model,'id_customerservice',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'id_metodebayar',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'id_ordervia',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'id_ekspedisi',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'id_pembeli',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'kode_trans',array('class'=>'span5','maxlength'=>255)); ?>

	<?php //echo $form->textFieldRow($model,'verifikasi',array('class'=>'span5','maxlength'=>255)); ?>



	<?php //echo $form->textFieldRow($model,'kode_unik',array('class'=>'span5','maxlength'=>255)); ?>

	<?php //echo $form->textFieldRow($model,'created_date',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'updated_date',array('class'=>'span5')); ?>
	<h4>Detail Penjualan</h4>
        <hr />
        <?php //echo $form->textFieldRow($jual,'id_buku',array('class'=>'span5','maxlength'=>255)); ?>
        <p> 
            <span style="font-size: 14px"><?php echo CHtml::encode($jual->getAttributeLabel('id_barang')); ?></span></p>
        <p>
            <?php 
               	$this->widget('bootstrap.widgets.TbSelect2', array(
			'asDropDownList' => true,
                        
                       // 'readonly'=>'readonly',
			'name' => 'DetailPenjualan[id_barang]',
			'data'=>CHtml::listData(Barang::model()->findAll(),'id','fullName'),
			'options'=>array(
					'placeholder' => 'Pilih Barang',
					'required'=>'required',
                                        
			),
			'htmlOptions'=>array(
					//'prompt'=>'',
					'options'=>array($jual->id_barang=>array('selected'=>true)),
                                        'class'=>'span8',
                                        'ajax' => array(
                                            'type' => 'POST',
                                            'url' => CController::createUrl('barang/get_harga'),
                                            'update' => '#harga',
                                            'data' => array('id_barang' => 'js:this.value'),
                                        )
			)
                ));

                ?>    
        <br />
        </p>
        <?php 
            $this->widget('application.extensions.moneymask.MMask',array(
                'element'=>'#harga',
                'currency'=>'PHP',
                'config'=>array(
                        'symbol'=>'',
                        'showSymbol'=>true,
                        'symbolStay'=>true,
                        'thousands'=>',',
                        'decimal'=>'.',
                        'precision'=>0,
                    )
            ));
            echo $form->textFieldRow($jual,'harga',array('class'=>'span3','id'=>'harga','value'=>'0','style'=>'text-align:right','required'=>'required'));
            ?>
            <?php echo $form->textFieldRow($jual,'jumlah',array('class'=>'span3','style'=>'text-align:right','required'=>'required')); ?>
<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'TAMBAH',
		)); ?>
</div>
<?php //$this->widget('bootstrap.widgets.TbGridView',array(
$this->widget('zii.widgets.grid.CGridView', array(
'id'=>'detail-penjualan-grid',
'dataProvider'=>$cariDetail->caridet($model->id),
'enableSorting'=>false,
'summaryText'=>'',
//'filter'=>$cariDetail,
'emptyText'=>'Data Penjualan Masih Kosong',
//'footer'=>'Total: '.number_format($cariDetail->getTotals()), 
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
		  		array(
                    'class' => 'CButtonColumn',
                    'template' => '{delete}',
                    'buttons' => array(
                        'delete' => array(
                            'url' => 'Yii::app()->createUrl("detailpenjualan/delete",array("id"=>$data->id))',
                            'options' => array(
                                'confirm' => 'Apakah yakin menghapus ?',
                                'ajax' => array(
                                    'type' => 'POST',
                                    'url' => "js:$(this).attr('href')",
                                    'success' => 'js:function(data) { 
			              			//$.fn.yiiGridView.update("detail-penjualan-grid");
			              			location.reload();
			              		}',
                                )
                            ),
                        ),
                    ),
                ),
             	
               /*array(
			      'class'=>'CButtonColumn',
			      'template' => '{Hapus}',
			      'buttons'=>array
			      (
			          'Hapus' => array
			          (
			              'label' => 'My Funky Button',
			              'imageUrl' => 'images/myfunkybutton.png',
			              'url' => 'Yii::app()->createUrl("detailpenjualan/delete", array("id"=>$data->id))',
			              'options' => array( 
			              	'ajax' => array(
			              		'type' => 'POST', 
			              		'url'=>'js:$(this).attr("href")', 
			              		'success' => 'js:function(data) { 
			              			$.fn.yiiGridView.update("detail-penjualan-grid")
			              		}'
			              	   ) 
			              	)
			          ),
			      ),
			     ),*/
                //'harga',
				//'total',
		        /*        array(
		                    'name'=>'total_harga',
                    'type'=>'raw',
                    'value'=>'Yii::app()->numberFormatter->format("###,###,###",$data->total_harga)',
                    'htmlOptions'=>array('style' => 'text-align: right;')
                ),*/
               
),
)); 
$tot=Yii::app()->db->createCommand()
        ->select('sum(total) as totalan')
        ->from('detail_penjualan')
        ->where('id_penjualan='.$model->id)
        ->queryRow();
?>
 <div style="margin-left: 10%;text-align: right;padding: 0px 80px 0px 0px"><h4>Grand Total : <?php echo Yii::app()->numberFormatter->format("Rp ###,###,###",$tot['totalan']) ?></h4></div>
        <div style="width:50%;margin-left: 40%;text-align: right;padding: 0.5px 10px 0px 2px">
        
         <?php 
               echo '<h4>Ongkos Kirim : Rp.';
            $this->widget(
            'booster.widgets.TbEditableField',
            array(
                'type' => 'text',

                'model' => $model,
                'viewformat'=>',',
                'attribute' =>'ongkir', // $model->name will be editable
                'url' =>  $this->createUrl('penjualan/editongkir'), //url for submit data
                'htmlOptions'=>array(
                    'id'=>'ongkos',
                    'style'=>'color:red',   
                    
                )
            )
       );
            echo '</h4>';

        ?>
         <?php 
               echo '<h4>Instruksi Khusus : ';
            $this->widget(
            'booster.widgets.TbEditableField',
            array(
                'type' => 'text',

                'model' => $model,
                //'viewformat'=>',',
                'attribute' =>'instruksi_khusus', // $model->name will be editable
                'url' =>  $this->createUrl('penjualan/instruksikhusus'), //url for submit data
                'htmlOptions'=>array(
                    //'id'=>'instruksi_khusus',
                    'style'=>'color:blue',   
                    
                )
            )
       );
            echo '</h4>';

        ?>

        </div>
        <br />
        <div style="padding-left: 75%;text-align: right">
        <?php
                $this->widget('booster.widgets.TbButton',
                array(
                    'label' => 'SELESAI',
                    'type' => 'success',
                    'url'=>'index.php?r=penjualan/view&id='.$model->id,
                ));
        ?>
            &nbsp;&nbsp;&nbsp;
        <a target="_blank" href="<?php echo Yii::app()->createUrl('penjualan/cetakpenjualan/id/'.$model->id); ?>" class="btn btn-primary">
        <i class="fa fa-print"></i> CETAK DATA</a>
         
        </div>
<?php $this->endWidget();?>
<?php }?>
<script type="text/javascript">
			   $(document).ready(function(){
               function format(num){
                    var n = num.toString(), p = n.indexOf('.');
                    return n.replace(/\d(?=(?:\d{3})+(?:\.|$))/g, function($0, i){
                        return p<0 || i<p ? ($0+',') : $0;
                    });
                }
                $("#ongkos").maskMoney({"symbol":"","showSymbol":true,"symbolStay":true,"thousands":",","decimal":".","precision":0})
                 
                    $('#cek').click(function(){
                      window.open('?r=pembeli/tambah','mywindow','menubar=0,resizable=0,height=400,width=600,left=500,top=200');
                    });
                   /*$('#uangbayar').click(function(){
                       var nilai=$('#uangbayar').text()
                      nilai.replace(/(\d+),(?=\d{3}(\D|$))/g, "$1");
                      $('#uangbayar').text(nilai);
                    });*/
                   $('#segar').click(function(){
                      location.reload();
                    });
                    $('#tess').click(function(){
                        var nilai=$("#tess").val();
                        if(nilai=='1'){
                            $("#tglbayar").hide();
                        }else{
                            $("#tglbayar").show();
                        }
                    }
                     );
                     function pesan(){
                         alert('Tess');
                     }
               }
               );
</script>
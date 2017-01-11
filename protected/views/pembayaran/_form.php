<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'pembayaran-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php //echo $form->textFieldRow($model,'id_penjualan',array('class'=>'span5')); ?>
	<h5><?php echo CHtml::encode($model->getAttributeLabel('id_penjualan'),array('class'=>'span5')); ?></h5>
      <p>
            <?php 
               	$this->widget('bootstrap.widgets.TbSelect2', array(
			'asDropDownList' => true,
			'name' => 'Pembayaran[id_penjualan]',
			'data'=>CHtml::listData(Penjualan::model()->findAll(), 'id','fullName'),
			'options'=>array(
					'placeholder' => 'Pilih Kode Transaksi',
					'required'=>'required',
			),
			'htmlOptions'=>array(
					//'prompt'=>'',
					'options'=>array($model->id_penjualan=>array('selected'=>true)),
                                        'class'=>'span8'
			)
                ));

                ?> 
        </p>
        <br />
        <br />
	<?php //echo $form->textFieldRow($model,'id_bank',array('class'=>'span5')); ?>
	<h5><?php echo CHtml::encode($model->getAttributeLabel('id_bank'),array('class'=>'span5')); ?></h5>
      <p>
            <?php 
               	$this->widget('bootstrap.widgets.TbSelect2', array(
			'asDropDownList' => true,
			'name' => 'Pembayaran[id_bank]',
			'data'=>CHtml::listData(Bank::model()->findAll(), 'id','fullName'),
			'options'=>array(
					'placeholder' => 'Pilih Bank',
					'required'=>'required',
			),
			'htmlOptions'=>array(
					//'prompt'=>'',
					'options'=>array($model->id_bank=>array('selected'=>true)),
                                        'class'=>'span8'
			)
                ));

                ?> 
        </p>
        <br />
        <br />
	<?php echo $form->textFieldRow($model,'byr_nmbank',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'byr_nama',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'byr_noref',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->datepickerRow($model,'byr_tgl',array('options'=>array(),'htmlOptions'=>array('class'=>'span5')),array('prepend'=>'<i class="icon-calendar"></i>','append'=>'Click on Month/Year at top to select a different year or type in (mm/dd/yyyy).')); ?>

	<?php echo $form->textFieldRow($model,'jumlah',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'id_user',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'created_date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'updated_date',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'keterangan',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>

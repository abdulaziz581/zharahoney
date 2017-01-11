<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'pembelian-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'id_customerservice',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_metodebayar',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_ordervia',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_ekspedisi',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_pembeli',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'kode_trans',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'verifikasi',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->datepickerRow($model,'tanggal',array('options'=>array(),'htmlOptions'=>array('class'=>'span5')),array('prepend'=>'<i class="icon-calendar"></i>','append'=>'Click on Month/Year at top to select a different year or type in (mm/dd/yyyy).')); ?>

	<?php echo $form->textFieldRow($model,'kode_unik',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'created_date',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'updated_date',array('class'=>'span5')); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>

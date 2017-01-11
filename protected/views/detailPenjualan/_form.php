<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'detail-penjualan-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'id_penjualan',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'id_barang',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'jumlah',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'harga',array('class'=>'span5')); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>

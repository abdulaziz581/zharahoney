<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'id_penjualan',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'id_bank',array('class'=>'span5')); ?>

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
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

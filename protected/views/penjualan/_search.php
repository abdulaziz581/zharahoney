<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php //echo $form->textFieldRow($model,'id',array('class'=>'span5','maxlength'=>20)); ?>

		<?php //echo $form->textFieldRow($model,'id_customerservice',array('class'=>'span5')); ?>

		<?php //echo $form->textFieldRow($model,'id_metodebayar',array('class'=>'span5')); ?>

		<?php //echo $form->textFieldRow($model,'id_ordervia',array('class'=>'span5')); ?>

		<?php //echo $form->textFieldRow($model,'id_ekspedisi',array('class'=>'span5')); ?>

		<?php //echo $form->textFieldRow($model,'id_pembeli',array('class'=>'span5')); ?>

		<?php //echo $form->textFieldRow($model,'kode_trans',array('class'=>'span5','maxlength'=>255)); ?>

		<?php //echo $form->textFieldRow($model,'verifikasi',array('class'=>'span5','maxlength'=>255)); ?>

		<?php echo $form->datepickerRow($model,'tanggal',array('options'=>array('format' => 'yyyy-mm-dd','viewformat'=>'dd/mm/YY'),'htmlOptions'=>array('class'=>'span5',)),array('prepend'=>'<i class="icon-calendar"></i>','append'=>'Masukkan Tanggal')); ?>

		<?php //echo $form->textFieldRow($model,'kode_unik',array('class'=>'span5','maxlength'=>255)); ?>

		<?php //echo $form->textFieldRow($model,'created_date',array('class'=>'span5')); ?>

		<?php //echo $form->textFieldRow($model,'updated_date',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

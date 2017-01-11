<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>255)); ?>

		<?php echo $form->textFieldRow($model,'alamat',array('class'=>'span5','maxlength'=>255)); ?>

		<?php echo $form->textFieldRow($model,'id_propinsi',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'id_kota',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'id_kecamatan',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'kode_pos',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'no_telpon',array('class'=>'span5','maxlength'=>255)); ?>

		<?php echo $form->textFieldRow($model,'no_handphone',array('class'=>'span5','maxlength'=>255)); ?>

		<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>255)); ?>

		<?php echo $form->textFieldRow($model,'facebook',array('class'=>'span5','maxlength'=>255)); ?>

		<?php echo $form->textFieldRow($model,'twitter',array('class'=>'span5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'username',array('class'=>'span5','maxlength'=>255)); ?>

			<?php echo $form->textFieldRow($model,'role',array('class'=>'span5')); ?>

		<?php echo $form->dropDownListRow($model,'status',array("nonaktif"=>"nonaktif","aktif"=>"aktif",),array('class'=>'input-large')); ?>

		<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

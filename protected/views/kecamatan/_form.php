<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'kecamatan-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>255)); ?>

	<?php //echo $form->textFieldRow($model,'id_kota',array('class'=>'span5','maxlength'=>11)); ?>
	<p> <?php echo CHtml::encode($model->getAttributeLabel('id_kota')); ?></p>
                <p>
                <?php 
               	$this->widget('bootstrap.widgets.TbSelect2', array(
			'asDropDownList' => true,
			'name' => 'Kecamatan[id_kota]',
			'data'=>CHtml::listData(Kota::model()->findAll(), 'id', 'nama'),
			'options'=>array(
					'placeholder' => 'Pilih Kota',
			),
			'htmlOptions'=>array(
					//'prompt'=>'',
					'options'=>array($model->id_kota=>array('selected'=>true))
			)
                ));
        ?> 
     </p>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>

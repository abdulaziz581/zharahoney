<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'customerservice-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'kode_cs',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'no_handphone',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'facebook',array('class'=>'span5','maxlength'=>255)); ?>
	<br />
	<br />
	<?php echo CHtml::encode($model->getAttributeLabel('user_id'),array('class'=>'span12')); ?>
        <p>
            <?php 
               	$this->widget('bootstrap.widgets.TbSelect2', array(
			'asDropDownList' => true,
			'name' => 'Customerservice[user_id]',
			'data'=>CHtml::listData(User::model()->findAll(), 'id','nama'),
			'options'=>array(
					'placeholder' => 'Pilih User',
					'required'=>'required',
			),
			'htmlOptions'=>array(
					//'prompt'=>'',
					'options'=>array($model->user_id=>array('selected'=>true)),
                                        'class'=>'span8'
			)
                ));

                ?> 
        </p>
         
        <br />
        <br />
<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>

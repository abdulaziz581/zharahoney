<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'wkt-sampai-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php //echo $form->textFieldRow($model,'id_propinsi',array('class'=>'span5')); ?>
	<?php //echo $form->textFieldRow($model,'id_propinsi',array('class'=>'span5','maxlength'=>11)); ?>
	<p> <?php echo CHtml::encode($model->getAttributeLabel('id_propinsi')); ?></p>
                <p>
                <?php 
               	$this->widget('bootstrap.widgets.TbSelect2', array(
			'asDropDownList' => true,
			'name' => 'WktSampai[id_propinsi]',
			'data'=>CHtml::listData(Propinsi::model()->findAll(), 'id', 'nama'),
			'options'=>array(
					'placeholder' => 'Pilih Propinsi',
			),
			'htmlOptions'=>array(
					//'prompt'=>'',
					'options'=>array($model->id_propinsi=>array('selected'=>true))
			)
                ));
        ?> 
     </p>

	<?php //echo $form->textFieldRow($model,'id_ekspedisi',array('class'=>'span5')); ?>
	<p> <?php echo CHtml::encode($model->getAttributeLabel('id_ekspedisi')); ?></p>
                <p>
                <?php 
               	$this->widget('bootstrap.widgets.TbSelect2', array(
			'asDropDownList' => true,
			'name' => 'WktSampai[id_ekspedisi]',
			'data'=>CHtml::listData(Ekspedisi::model()->findAll(), 'id', 'nama'),
			'options'=>array(
					'placeholder' => 'Pilih Ekspedisi',
			),
			'htmlOptions'=>array(
					//'prompt'=>'',
					'options'=>array($model->id_ekspedisi=>array('selected'=>true))
			)
                ));
        ?> 
     </p>

	<?php echo $form->textFieldRow($model,'lama',array('class'=>'span5')); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>

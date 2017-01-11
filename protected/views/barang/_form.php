<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'barang-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'kode',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>255)); ?>

	<?php //echo $form->textFieldRow($model,'harga',array('class'=>'span5','maxlength'=>255)); ?>
	<?php 
            $this->widget('application.extensions.moneymask.MMask',array(
                    'element'=>'#harga',
                    'currency'=>'PHP',
                    'config'=>array(
                        'symbol'=>'',
                        'showSymbol'=>true,
                        'symbolStay'=>true,
                        'thousands'=>',',
                        'decimal'=>'.',
                        'precision'=>0,
                    )
                ));
 
            echo $form->textFieldRow($model,'harga',array('id'=>'harga','class'=>'span3','maxlength'=>255,'style'=>'text-align:right','required'=>'required'));
        ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>

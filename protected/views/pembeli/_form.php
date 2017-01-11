<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'pembeli-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'alamat',array('class'=>'span5','maxlength'=>255)); ?>

	<?php //echo $form->textFieldRow($model,'id_propinsi',array('class'=>'span5')); ?>
	<p> <?php echo CHtml::encode($model->getAttributeLabel('id_propinsi')); ?></p>
                <p>
                <?php 
               	$this->widget('bootstrap.widgets.TbSelect2', array(
			'asDropDownList' => true,
			'name' => 'Pembeli[id_propinsi]',
			'data'=>CHtml::listData(Propinsi::model()->findAll(), 'id', 'nama'),
			'options'=>array(
					'placeholder' => 'Pilih Propinsi',
			),
			'htmlOptions'=>array(
                    //'prompt'=>'',
                    'options'=>array($model->id_propinsi=>array('selected'=>true)),
                                        'class'=>'span8',
                                        'ajax' => array(
                                            'type' => 'POST',
                                            'url' => CController::createUrl('propinsi/get_kota'),
                                            'data' => array('id_propinsi' => 'js:this.value'),
                                            'update' => '#Pembeli_id_kota',
                                            //'data' => array('id_propinsi' => 'js:this.value'),
                                        )
            )
                ));
        ?> 
     </p>
     <br />
     <br />
     <p> <?php echo CHtml::encode($model->getAttributeLabel('id_kota')); ?></p>
                <p>
                <?php 
               	$this->widget('bootstrap.widgets.TbSelect2', array(
			'asDropDownList' => true,
			'name' => 'Pembeli[id_kota]',
			'data'=>CHtml::listData(Kota::model()->findAll(), 'id', 'nama'),
			'options'=>array(
					'placeholder' => 'Pilih Kota',
			),
			'htmlOptions'=>array(
                    //'prompt'=>'',
                    'options'=>array($model->id_kota=>array('selected'=>true)),
                                        'class'=>'span8',
                                        'ajax' => array(
                                            'type' => 'POST',
                                            'url' => CController::createUrl('propinsi/get_kecamatan'),
                                            'data' => array('id_kota' => 'js:this.value'),
                                            'update' => '#Pembeli_id_kecamatan',
                                            //'data' => array('id_propinsi' => 'js:this.value'),
                                        )
            )
                ));
        ?> 
     </p>
     <br />
     <br />
     <p> <?php echo CHtml::encode($model->getAttributeLabel('id_kecamatan')); ?></p>
                <p>
                <?php 
               	$this->widget('bootstrap.widgets.TbSelect2', array(
			'asDropDownList' => true,
			'name' => 'Pembeli[id_kecamatan]',
			'data'=>CHtml::listData(Kecamatan::model()->findAll(), 'id', 'nama'),
			'options'=>array(
					'placeholder' => 'Pilih Kecamatan',
			),
			'htmlOptions'=>array(
					//'prompt'=>'',
					'options'=>array($model->id_kecamatan=>array('selected'=>true))
			)
                ));
        ?> 
     </p>
	<?php //echo $form->textFieldRow($model,'id_kota',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'id_kecamatan',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'kode_pos',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'no_telpon',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'no_handphone',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'facebook',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'twitter',array('class'=>'span5','maxlength'=>255)); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>

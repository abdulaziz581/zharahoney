<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_rekening')); ?>:</b>
	<?php echo CHtml::encode($data->no_rekening); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_akun')); ?>:</b>
	<?php echo CHtml::encode($data->nama_akun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cabang')); ?>:</b>
	<?php echo CHtml::encode($data->cabang); ?>
	<br />


</div>
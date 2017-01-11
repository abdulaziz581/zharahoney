<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_propinsi')); ?>:</b>
	<?php echo CHtml::encode($data->id_propinsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kota')); ?>:</b>
	<?php echo CHtml::encode($data->id_kota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kecamatan')); ?>:</b>
	<?php echo CHtml::encode($data->id_kecamatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_pos')); ?>:</b>
	<?php echo CHtml::encode($data->kode_pos); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('no_telpon')); ?>:</b>
	<?php echo CHtml::encode($data->no_telpon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_handphone')); ?>:</b>
	<?php echo CHtml::encode($data->no_handphone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('facebook')); ?>:</b>
	<?php echo CHtml::encode($data->facebook); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('twitter')); ?>:</b>
	<?php echo CHtml::encode($data->twitter); ?>
	<br />

	*/ ?>

</div>
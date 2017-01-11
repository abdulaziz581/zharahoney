<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_customerservice')); ?>:</b>
	<?php echo CHtml::encode($data->id_customerservice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_metodebayar')); ?>:</b>
	<?php echo CHtml::encode($data->id_metodebayar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ordervia')); ?>:</b>
	<?php echo CHtml::encode($data->id_ordervia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ekspedisi')); ?>:</b>
	<?php echo CHtml::encode($data->id_ekspedisi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pembeli')); ?>:</b>
	<?php echo CHtml::encode($data->id_pembeli); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_trans')); ?>:</b>
	<?php echo CHtml::encode($data->kode_trans); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('verifikasi')); ?>:</b>
	<?php echo CHtml::encode($data->verifikasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kode_unik')); ?>:</b>
	<?php echo CHtml::encode($data->kode_unik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_date')); ?>:</b>
	<?php echo CHtml::encode($data->created_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_date')); ?>:</b>
	<?php echo CHtml::encode($data->updated_date); ?>
	<br />

	*/ ?>

</div>
<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_penjualan')); ?>:</b>
	<?php echo CHtml::encode($data->id_penjualan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bank')); ?>:</b>
	<?php echo CHtml::encode($data->id_bank); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('byr_nmbank')); ?>:</b>
	<?php echo CHtml::encode($data->byr_nmbank); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('byr_nama')); ?>:</b>
	<?php echo CHtml::encode($data->byr_nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('byr_noref')); ?>:</b>
	<?php echo CHtml::encode($data->byr_noref); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('byr_tgl')); ?>:</b>
	<?php echo CHtml::encode($data->byr_tgl); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_date')); ?>:</b>
	<?php echo CHtml::encode($data->created_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_date')); ?>:</b>
	<?php echo CHtml::encode($data->updated_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keterangan')); ?>:</b>
	<?php echo CHtml::encode($data->keterangan); ?>
	<br />

	*/ ?>

</div>
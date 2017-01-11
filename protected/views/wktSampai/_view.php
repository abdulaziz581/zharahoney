<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_propinsi')); ?>:</b>
	<?php echo CHtml::encode($data->id_propinsi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ekspedisi')); ?>:</b>
	<?php echo CHtml::encode($data->id_ekspedisi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lama')); ?>:</b>
	<?php echo CHtml::encode($data->lama); ?>
	<br />


</div>
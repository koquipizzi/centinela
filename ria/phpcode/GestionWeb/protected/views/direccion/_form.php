<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'direccion-form',
	'type'=>'horizontal',
	'htmlOptions'=>array('class'=>'well'),
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'tipodireccion',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'calle',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'persona_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'numero',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'localidad',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Guardar' : 'Actualizar',
		)); ?>
	</div>

<?php $this->endWidget(); ?>

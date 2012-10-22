<?php
/* @var $this DeathMethodsController */
/* @var $model deathMethods */

$this->breadcrumbs=array(
	'Death Methods'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List deathMethods', 'url'=>array('index')),
	array('label'=>'Create deathMethods', 'url'=>array('create')),
	array('label'=>'Update deathMethods', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete deathMethods', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage deathMethods', 'url'=>array('admin')),
);
?>

<h1>View deathMethods #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'content',
	),
)); ?>

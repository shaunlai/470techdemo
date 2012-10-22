<?php
/* @var $this DeathMethodsController */
/* @var $model deathMethods */

$this->breadcrumbs=array(
	'Death Methods'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List deathMethods', 'url'=>array('index')),
	array('label'=>'Create deathMethods', 'url'=>array('create')),
	array('label'=>'View deathMethods', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage deathMethods', 'url'=>array('admin')),
);
?>

<h1>Update deathMethods <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
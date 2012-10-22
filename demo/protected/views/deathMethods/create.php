<?php
/* @var $this DeathMethodsController */
/* @var $model deathMethods */

$this->breadcrumbs=array(
	'Death Methods'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List deathMethods', 'url'=>array('index')),
	array('label'=>'Manage deathMethods', 'url'=>array('admin')),
);
?>

<h1>Create deathMethods</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
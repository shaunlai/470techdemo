<?php
/* @var $this DeathMethodsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Death Methods',
);

$this->menu=array(
	array('label'=>'Create deathMethods', 'url'=>array('create')),
	array('label'=>'Manage deathMethods', 'url'=>array('admin')),
);
?>

<h1>Death Methods</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

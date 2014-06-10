<?php
/* @var $this PuntosController */
/* @var $model Puntos */

$this->breadcrumbs=array(
	'Puntoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Puntos', 'url'=>array('index')),
	array('label'=>'Manage Puntos', 'url'=>array('admin')),
);
?>

<h1>Create Puntos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
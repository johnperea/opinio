<?php
/* @var $this PuntosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Puntos Opinion',
);

$this->menu=array(
	array('label'=>'Create Puntos', 'url'=>array('create')),
	array('label'=>'Manage Puntos', 'url'=>array('admin')),
);
?>

<h1>Puntoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

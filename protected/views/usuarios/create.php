<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Create',
);

?>

<h4>Registrate para empezar a usar Opinio ahora!</h4>

<?php echo $this->renderPartial('_form_nuevo', array('model'=>$model)); ?>
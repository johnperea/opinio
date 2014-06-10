<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->username,
);


?>

<div id="page">
  <div class="container">
    
  <div class="alert alert-block alert-success">
    <button type="button" class="close" data-dismiss="alert" onclick="$('.alert').hide();">x</button>
    <?php echo $model->username; ?>,Tu cuenta se ha creado correctamente.
  </div>


    <h4> Activa tu cuenta para empezar a usar Opinio ahora!</h4>
<section class="signup">
  <p>Para activar su cuenta acceda al link de confirmacion que se le ha enviado al email. Si no le llega el correo, compruebe si esta en su carpeta de Spam.</p>
  <p><a href="/opinio">Volver a la portada</a>
</p></section>



  </div>
</div>

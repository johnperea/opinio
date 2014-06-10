<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
<link href="http://emtrics.com/stylesheets/master-458afbcd.css" media="screen" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="http://localhost/opinio/css/home.css">
<link rel="shortcut icon" href="http://emtrics.com/images/favicon/favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Inicio', 'url'=>array('/site/index'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Puntos Opinion', 'url'=>array('/puntos/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Preguntas', 'url'=>array('/preguntas/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Opiniones', 'url'=>array('/respuestas/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Categorias', 'url'=>array('/categorias/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Formularios', 'url'=>array('/formularios/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Usuarios', 'url'=>array('/usuarios/admin'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Registro', 'url'=>array('/usuarios/create'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->id.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by JOHN PEREA - 3005503069.<br/>
		All Rights Reserved.<br/>
		
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

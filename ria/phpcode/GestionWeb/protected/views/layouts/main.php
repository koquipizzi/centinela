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

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->bootstrap->registerCoreCss(); ?>" />
	

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
<div class="container" id="page">
	
	<?php
	$this->widget('bootstrap.widgets.TbNavbar', array(
				'type'=>null, // null or 'inverse'
				'brand'=>'Casa Sebastián',
				'brandUrl'=>'www.qwavee.com',
				'collapse'=>true, // requires bootstrap-responsive.css
				'items'=>array(
					array(
					'class'=>'bootstrap.widgets.TbMenu',
					'items'=>array(
								array('label'=>'Inicio', 'url'=>'#', 'active'=>true),								
								array('label'=>'Personas', 'url'=>'#', 
								'items'=>array(
										array('label'=>'Nueva Persona', 'url'=>'index.php?r=persona/create'),
										array('label'=>'Crear Cuenta', 'url'=>'index.php?r=cuenta/create'),
										array('label'=>'', 'url'=>'#'),
										'---',
										array('label'=>'LISTADOS'),
										array('label'=>'Proveedores', 'url'=>'#'),
										array('label'=>'Clientes', 'url'=>'#'),
									)),
								array('label'=>'Georeferencia', 'url'=>'#', 
								'items'=>array(
										array('label'=>'Paises', 'url'=>'index.php?r=pais'),
										array('label'=>'Provincias', 'url'=>'index.php?r=provincia'),
										array('label'=>'Localidades', 'url'=>'index.php?r=localidad'),					
									)),
								array('label'=>'Poductos', 'url'=>'#', 
								'items'=>array(
										array('label'=>'Producto', 'url'=>'index.php?r=producto'),
										array('label'=>'Categoria', 'url'=>'index.php?r=categoriaProducto'),
										array('label'=>'LISTADOS'),
										array('label'=>'Stock', 'url'=>'index.php?r=stock'),
															
									)),
								array('label'=>'Configuración', 'url'=>'#', 
								'items'=>array(
										array('label'=>'Tipo de Contacto', 'url'=>'index.php?r=tipocontacto/create'),	
										'---',									
										array('label'=>'Georeferencia', 'url'=>'#', 
										'items'=>array(
												array('label'=>'Paises', 'url'=>'index.php?r=pais'),
												array('label'=>'Provincias', 'url'=>'index.php?r=provincia'),
												array('label'=>'Localidades', 'url'=>'index.php?r=localidad'),					
											)),									
									)),
								
					),
),
'<form class="navbar-search pull-left" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
),
)); 
	?>

	<!--<div id="header">
		<div id="logo"><?php //echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<!--<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Paises', 'url'=>"index.php?r=pais"),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
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
		Copyright &copy; <?php echo date('Y'); ?> by QWavee.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>

<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom/animate.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom/custom.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/custom/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<!-- <div class="fh5co-loader"></div> -->

	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="<?php echo Yii::app()->request->baseUrl; ?>"><?php echo CHtml::encode(Yii::app()->name); ?><span>.</span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
              <?php $this->widget('zii.widgets.CMenu',array(
								'encodeLabel' => false,
          			'items'=>array(
          				array('label'=>'Home', 'url'=>Yii::app()->request->baseUrl),
          				// array('label'=>'Login', 'url'=>array('/gtest/Log'), 'visible'=>Yii::app()->user->isGuest),
                  array('label'=>'View', 'url'=>array('/gtest/Hel')),
                  array('label'=>'About', 'url'=>array('/gtest/About')),
          				array('label'=>'Upload Image', 'url'=>array('/gtest/Img')),
          				//	array('label'=>'Insert', 'url'=>array('/gtest/View')),
          				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/gtest/Logout'), 'visible'=>!Yii::app()->user->isGuest),
									array('label'=>'<span>Login</span>', 'url'=>array('/glogin/Log'),'itemOptions'=> array('class' => 'btn-cta','id' => 'loginbtn','data-toggle' => 'modal','data-target' => '#myModal'),),
									array('label'=>'<span>Signup</span>', 'url'=>array('/gtest/View'),'itemOptions'=> array('class' => 'btn-cta','id' => 'signbtn','data-toggle' => 'modal','data-target' => '#signModal',),)
          			),
          		)); ?>
							<!-- <li class="btn-cta"><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/gtest/Log"><span>Login</span></a></li>
							<li class="btn-cta"><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/gtest/View"><span>Sign Up</span></a></li> -->
						</ul>

					</div>
				</div>

			</div>
		</div>
	</nav>
	<!-- Modal content-->
	<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
	<form>
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Login Form</h4>
		</div>
		<div class="modal-body" id="loginbody">
		gfhf
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
	</div>
</form>
</div></div>

<!-- sign up modal  -->
<div class="modal fade" id="signModal" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Signup Form</h4>
	</div>
	<div class="modal-body" id="signbody">
	gfhf
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
</div>
</div></div>
<!-- modal end  -->

<!DOCTYPE html>
<html lang="zxx">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Crucial - Responsive Magazine Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- ICON CSS -->
    <link rel="stylesheet" href="js/font-awesome/css/font-awesome.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="js/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="js/slick/slick.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- MODERNIZR -->
    <script src="js/modernizr-2.8.3-respond-1.4.2.min.js"></script>

</head>
<body class="home5">

<div class="wrapper">
    <header class="header header3 header5 header6">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="search-bar">
                    <input type="search" placeholder="Type search text here...">
                    <div class="search-close"><i class="fa fa-times"></i></div>
                </div>

                <div class="navbar-header hidden visible-xs">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./index.html"><img src="img/logo.png" class="img-responsive" alt=""/></a>
                </div>

                <div class="navbar-social">
                    <a href="#"><img src="img/icon/3.png" class="img-responsive" alt=""/></a>
                    <a href="#"><img src="img/icon/4.png" class="img-responsive" alt=""/></a>
                    <a href="#"><img src="img/icon/5.png" class="img-responsive" alt=""/></a>
                </div>

                <div class="navbar-brand hidden-xs">
                    <a href="#"><img src="img/logo2.png" class="img-responsive" alt=""/></a>
                </div>

                <div class="search-trigger pull-right"></div>

                <a href="registerForm"><div class="login pull-right"></div></a>


            </div>
        </nav>

    </header>
</div>

<div class="nav-white">
	<div class="container">
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class="dropdown dropdown-v1">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Category<span class="fa fa-angle-down"></span></a>						
							<ul class="submenu">
                                <?php
                                Controller::AllCategory();                                
                                ?>
							</ul>
						</li>																
				</li>
			</ul>
        </div>	
	</div>
</div>
<section>
    <div class= 'divBox'>
        <?php
            if(isset($content)) {
                echo $content;
            } else{
                echo '<h1>Content is gone!</h1>';
            }
        ?>
    </div>
</section>





<script src="js/jquery.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/slick/slick.min.js"></script>
<script src="js/theme.js"></script>
</body>
</html>

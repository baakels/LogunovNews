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
                    <a class="navbar-brand" href="../start.php"><img src="img/logo.png" class="img-responsive" alt=""/></a>
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

                <div class="login pull-right"></div>
            </div>
        </nav>
    </header>
</div>
<div class="nav-white">
    <div class="container">
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown dropdown-v1">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown">Категории<span class="fa fa-angle-down"></span></a>
                    <?php
                        foreach($array as $key => $value) {
                            echo "<li class = 'dropdown-toggle'><a href = 'categoria?id=".$value['id']."'>".$value['Name'].'</a></li></ br>';
                        }
                    ?>
            </ul>
        </div>

    </div>
</div>


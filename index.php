<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">The Perfect Cup</div>
    <div class="address-bar">Shop No. 32 | By-Pass Road | Madurai | 625016</div>
    <?php
		// isset checks is the variable "logout" is contained within the URL using GET method
	if (isset($_GET["logout"])) {
		// if variable found to check logout is true
		if ($_GET["logout"] == "true") { ?>
			
			<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>You have been logged out of the system.</strong>
			</div>   
	<?php
		}
	}
	?>

    <!-- to import navigation.php file -->
    <?php require_once 'navigation.php';?>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full img-s" src="img/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full img-s" src="img/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full img-s" src="img/slide-3.jfif" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">The Perfect Cup</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Reshma Syed Khader</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">How to make
                        <strong>the perfect cup of tea</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left img-size" src="img/intro-pic.jpg" alt="">
                    <hr class="visible-xs">
                    <p>Making the perfect cup of tea can be challenging! With so many unique flavours and recipes to choose from, where do you begin? 
                        Our website provides you with the best recipes from around the world. Whether you prefer your tea hot and mild or bracingly cold and strong 
                        - we are sure to have what you are looking for. 
                        Whether you prefer your tea bagged or loose, always start with freshly drawn cold water. 
                        If using a teapot, warm the inside first with hot water, 
                        then pour it out. And, of course, make sure your mugs, teapot and kettle are clean as a whistle.
                        Everyone has an opinion on the making of a perfect cup of tea it seems, 
                        whether the debate is milk-in-first-or-after, the length of time the tea needs to mash (steep), even the type of 
                        <a href="https://www.amazon.com/s?k=teapot" target="_blank">teapot in which to brew.</a> 
                        Here are just three points of view from two professionals, and a writer. As you will see, 
                        they have a few points in common; use freshly boiled water, let the tea stand, add milk, the rest it seems is personal preference.
                        For access to unlimited recipes you must register! Registration is free. Click here to get started!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Perfect Cup 2023</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>

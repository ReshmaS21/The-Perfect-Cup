<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog - The Perfect Cup</title>

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

<!-- to import navigation.php file -->
<?php require_once 'navigation.php';?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                <h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a></h2>
                    <hr>
                    <h2 class="intro-text text-center">The Perfect Cup
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" style="width:65%;" alt="">
                    <h2>Honey Lemon 
                        <br>
                        <small>November 21, 2020</small>
                    </h2>
                    <p>Honey Lemon tea is as a body cleanser. The cleansing properties of this tea help in removing all the toxins from the body.
It serves as a digestive aid by providing an overall calming effect on the stomach.
The detoxifying action of green tea helps in overall boosting of the immune system of the body.
Because of its antioxidants properties and concentration of vitamins and minerals, it serves as an effective home remedy for common ailments like colds and sore throats. It is also somewhat effective in providing relief from a cough. The natural enzymes and vitamin C from lemon and honey provide a soothing effect on the throat.</p>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg"style="width:65%;" alt="">
                    <h2>Masala Chai
                        <br>
                        <small>September 18, 2021</small>
                    </h2>
                    <p>The traditional masala chai is a spiced beverage brewed with different proportions of warming spices. The spice mixture, called karha, uses a base of ground ginger and green cardamom pods. Other spices are usually added to this karha including one or more of cinnamon, star anise, fennel seeds, peppercorn, nutmeg, cloves, cardamom seeds, ginger root, honey, vanilla, and other spices.</p>
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jfif" style="width:65%;" alt="">
                    <h2>Jasmine Pearl
                        <br>
                        <small>October 15, 2022</small>
                    </h2>
                    <p>Jasmine Pearl tea is green tea made from young tea leaves rolled into “pearls” that open up when brewed. Depending on the manufacturer, the pearls contain jasmine flowers or are infused with the scent of jasmine.
As with most teas, there are plenty of variations when it comes to Jasmine Pearl tea, depending on the manufacturer and the region it comes from. We’ll get into some of the variations below, as well as the flavor profile of this unique tea and the health benefits tea drinkers can enjoy.</p>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- Modal 1 -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Honey Lemon</h4>
		  </div>
		  <div class="modal-body">
			<p>The skin disorders and acne can be effectively reduced by drinking lemon tea with honey regularly as its antioxidant properties provide a host of benefits to the skin and make it look healthier.
Both lemon and honey aid in weight loss by serving as they have fat-burning properties.
It’s a great morning drink as it not only to energizes the body but also refreshes the mind. Unlike beverages with a high amount of caffeine, it has a soothing effect that lasts.
The risks of skin cancer are greatly reduced owing to the antioxidant properties of the skin.
Both lemon, as well as honey, have antibacterial, antifungal and natural antioxidant properties which help in preventing infections and diseases.
</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- Modal 2 -->
	<div id="myModal2" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Masala Chai</h4>
		  </div>
		  <div class="modal-body">
			<p>Traditionally, cardamom and ginger are the dominant notes, supplemented by other spices such as cloves, or black pepper; the latter two add a heat to the flavour and the utilization of cloves is more typical and popular throughout India. The traditional composition of spices often differs by climate and region in Southern and Southwestern Asia.
Masala chai in western India often excludes clove and black peppercorn. A small amount of salt is often added to chai in the region of Bhopal.The Kashmiri version of chai is brewed with green tea instead of black tea and has a more subtle blend of spices with a pinch of salt. This version is a bit savory and is pink in color, due to the addition of baking soda.</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	
	<!-- Modal 3 -->
	<div id="myModal3" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Jasmine Pearl</h4>
		  </div>
		  <div class="modal-body">
			<p>One of the main reasons that people drink tea is because it tastes good, of course. But many tea drinkers also enjoy getting to know more about the tea they’re drinking and what goes into it. With that said, the remainder of this guide aims to answer every question you have about Jasmine Pearl tea.
Jasmine Pearl tea is sweet and delicate. The heady aroma of the jasmine balances out the light, fresh base of the green tea to make a perfectly balanced tea.
This tea is subtle and refreshing.
</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
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

</body>

</html>

<?php

} else {
    header("location:login.php ");
}
?>

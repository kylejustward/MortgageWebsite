
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mortgage Calculator</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                 <!-- </button>
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
				-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href=""><!--Had reference to home --></a>
                    </li>
                    <li>
                        <a href="mortgage_calculator.php"><!--Had reference to about-->Mortgage Calculator</a>
                    </li>
                    <li>
                        <a href="#invest_anchor"><!--Had reference to sample post -->Invest</a>
                    </li>
                    <li>
                        <a href="financial_analysis.php"><!--Had reference to contact -->Financial Analysis</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('house.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>Sell your home with our company today</h1>
                        <h2 class="subheading">Calculate Mortgage, Profit, Repairs and more</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				<h1>Invest</h1>
				<a id= invest_anchor><p> </p></a>
						<form action "share.php" method "post" >

						<!--FirstName:<br>
						<input type="text" name="FirstName"><br>
						
						Email:<br>
						<input type="text" name="Email"><br>
						
						<input type="submit" name="submit" value="Submit"><br>
						-->
						
						Address<br>
						<input type="text" class="form-control" id="address" placeholder="Address"> <br>

						Price<br>
						<input type="number" class="form-control" id="price" placeholder="Price"> <br>

						Square Feet<br>
						<input type="number" class="form-control" id="sqrFt" placeholder="Square Feet"><br>

						Repairs<br>
						<input type="number" class="form-control" id="repairs" placeholder="Repairs"><br>
						
						Price Per Sqr Foot<br>
						<input class="form-control" id="priceSqrFt" type="text" readonly><br>

						Closing Cost<br>
						<input class="form-control" id="closingCost" type="text" readonly><br>

						Agent Fee<br>
						<input class="form-control" id="agentFee" type="text" readonly><br>

						Net<br>
						<input class="form-control" id="net" type="text" readonly><br>

						Closing Cost<br>
						<input class="form-control" id="closingCost2" type="text" readonly><br>

						HoldingCost<br>
						<input class="form-control" id="holdingCost" type="text" readonly><br>

						Profit<br>
						<input class="form-control" id="profit" type="text" readonly><br>

						Offer<br>
						<input class="form-control" id="offer" type="text" readonly><br>
					</form>
				
                </div>
            </div>
        </div>
    </article>

    <hr>

	
	<!-- Footer -->
    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
						<!--
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
						-->
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Your Website 2016</p>
                </div>
            </div>
        </div>
    </footer>
	
    
	<!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
<script type="text/javascript">
var price        = 0.0;
var priceGood    = false;
var sqrFt        = 0.0;
var sqrFtGood    = false;
var priceSqrFt   = 0.0;
var closingCost  = 0.0;
var agentFee     = 0.0;
var repairs      = 0.0;
repairsGood      = false;
var closingCost2 = 0.0;
var holdingCost  = 0.0;
var profit       = 0.0;
//for grabbing values from box to store in other box



	document.getElementById("price").onchange = function() {
		validatePrice();
		calcPrice();
	}

	document.getElementById("sqrFt").onchange = function() {
		validateSqrFt();
		calcPrice();
	}

	document.getElementById('repairs').onchange = function(){
		validateRepairs();
		calcPrice();
	}

	function validatePrice(){
		//alert('function is running');
		if(isNaN(document.getElementById("price").value)){
			alert('Price must be a number');
			priceGood = false;
		}else{
			price = document.getElementById("price").value;
			//alert(price + ' is the value of price');
			priceGood = true;
		}
	}

	function validateSqrFt(){
		//alert('function is running');
		if(isNaN(document.getElementById("sqrFt").value)){
			alert('Square Feet must be a number');
			sqrFt = false;
		}else{
			sqrFt = document.getElementById("sqrFt").value;
			//alert(sqrFt + ' is the value of square feet');
			sqrFtGood = true;
		}
	}

	function validateRepairs(){
		if(isNaN(document.getElementById('repairs').value)){
			alert('Repairs must be a number');
			repairs = false;
		}else{
			repairs = document.getElementById('repairs').value;
			repairsGood = true;
			
		}
	}

	function calcPrice(){
		//checking if price and sqr ft have been set
		if(priceGood && sqrFtGood){
			//evaluating and printing price pr sqr ft
			priceSqrFt = price / sqrFt;
			document.getElementById("priceSqrFt").value = "$" + priceSqrFt;
			
			//evaluating and printing closing cost
			closingCost = 0.03 * price;
			document.getElementById("closingCost").value = "$" + closingCost;
			//evaluating and printing agent fee
			agentFee = 0.06 * price;
			document.getElementById("agentFee").value = "$" + agentFee;
		}
		//checking if repairs are set and preforming the rest of the calculations
		if(repairsGood){
			//calc net value
			net = price - closingCost - agentFee - repairs;
			document.getElementById('net').value = "$" + net;
			//calc and print closing cost
			closingCost2 = 0.03 * net;
			document.getElementById("closingCost2").value = "$" + closingCost2;
			//calc and print holding cost
			holdingCost = 0.05 * net;
			document.getElementById("holdingCost").value = "$" + holdingCost;
			//calc and print profit
			profit = 0.15 * net;
			document.getElementById("profit").value = "$" + profit;
			//calc and print offer
			offer = net - closingCost - holdingCost - profit;
			document.getElementById("offer").value = "$" + offer;
		}
	}
</script>
<!-- FOR GRABBING VALUES FROM TEXTBOXES AND PUTTING THEM IN NEW TEXTPOXES -->
<script type="text/javascript">
</script>
</body>
</html>




<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Financial Analysis</title>

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
                        <a href="invest.php"><!--Had reference to sample post -->Invest</a>
                    </li>
                    <li>
                        <a href="#financial_analysis_anchor"><!--Had reference to contact -->Financial Analysis</a>
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
					<form action ="financial_analysis_main.php" method = "POST">
						<a id="financial_analysis_anchor"><p> </p></a>
						<h1>Financial Analysis</h1>
						
						Land:<br>
						<input type="number" class="form-control" name="land"><br>

						Building:<br>
						<input type = "number" class="form-control" name = "building"/><br>

						Improvements:<br>
						<input type = "number" class="form-control" name = "improvements"/><br>

						Closing Cost:<br>
						<input type = "number" class="form-control" name = "closing_cost"/><br>
	
			
					<br>
					<h1>Number of Units</h1>
					
						Average Monthly Rent:     <br>
						<input type = "number" class="form-control" name = "average_monthly_rent"/><br>
		
						Gross Monthly Revenues:   <br>
						<input type = "number" class="form-control" name = "gross_monthly_revenues"/><br>
		
						Vacancy Rent Loss Yearly: <br>
						<input type = "number" class="form-control" name = "vacancy_rent_loss_yearly"/><br>
		
					<br>
					<h1>Operating Expenses</h1>
					
						Repairs and Maintenance: <br>
						<input type = "number" class="form-control" name = "repairs_and_maintenance"/><br>
		
						Taxes:                   <br>
						<input type = "number" class="form-control" name = "taxes"/><br>
		
						Insurance:               <br>
						<input type = "number" class="form-control" name = "insurance"/><br>
		
						Property Management:     <br>
						<input type = "number" class="form-control" name = "property_management"/><br>
		
						Utilities:               <br>
						<input type = "number" class="form-control" name = "utilities"/><br>
		
						Trash Removal:           <br>
						<input type = "number" class="form-control" name = "trash_removal"/><br>
		
	
					<br>
					<br>
					<h1>Financing Assumptions</h1>
					
						Total Purchase Price: <br>
						<input type = "number" class="form-control" name = "total_purchase_price"/><br>
	
						Equity:               <br>
						<input type = "number" class="form-control" name = "equity"/><br>
	
						Balance to finance:   <br>
						<input type = "number" class="form-control" name = "balance_to_finance"/><br>
		
	
	

					<br>
					<h1>Interest Rate</h1>
					
						Term:<br>
						<input type = "number" class="form-control" name = "term"/><br>
		
						Payment:<br>
						<input type = "number" class="form-control" name = "payment"/><br>
		
						Yearly:<br>
						<input type = "number" class="form-control" name = "yearly"/><br>
						
						Net Operating Income:<br>
						<input type = "number" class="form-control" name = "net_operating_income"/><br>
						
						CAP Rate: <br>
						<input type = "number" class="form-control" name = "cap_rate"/><br>
						
						Debt Service: <br>
						<input type = "number" class="form-control" name = "debt_service"/><br>
						
						Cash Flow: <br>
						<input type = "number" class="form-control" name = "cash_flow"/><br>
						
						Return on Investment: <br>
						<input type = "number" class="form-control" name = "return_on_investment"/><br>
						
						<br>
					<h1>Key Ratios</h1>

						Total Square Feet:<br>
						<input type = "number" class="form-control" name = "total_square_feet"/><br>
						
						Average Square Feet/Unit:<br>
						<input type = "number" class="form-control" name = "average_square_feet_per_unit"/><br>
						
						Average Rent Square Feet:<br>
						<input type = "number" class="form-control" name = "average_rent_per_square_feet"/><br>
						
						Average Cost Square Feet:<br>
						<input type = "number" class="form-control" name = "average_cost_square_feet"/><br>
						
						Average Unit Cost:<br>
						<input type = "number" class="form-control" name = "average_unit_cost"/><br>
						
						Cap Rate:<br>
						<input type = "number" class="form-control" name = "cap_rate"/><br>	
						
						
						<input type="submit" />
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
<?PHP

//cost and revenue assumptions
$land         = $_POST['land'];
$building     = $_POST['building'];
$improvements = $_POST['improvements'];
$closing_cost = $_POST['closing_cost'];

$total        = $land + $building + $improvements + $closing_cost;
	




//number of units
$average_monthly_rent     = $_POST['average_monthly_rent'];
$gross_monthly_revenues   = $_POST['gross_monthly_revenues'];
$vacancy_rent_loss_yearly = $_POST['vacancy_rent_loss_yearly'];
	
//operating expenses
$repairs_and_maintenance  = $_POST['repairs_and_maintenance'];
$taxes                    = $_POST['taxes'];
$insurance                = $_POST['insurance'];
$property_management      = $_POST['property_management'];
$utilities                = $_POST['utilities'];
$trash_removal            = $_POST['trash_removal'];
$total_operating_expenses = $repairs_and_maintenance + $taxes + $insurance + $property_management + $utilities + $trash_removal;

	

//financing assumptions
$total_purchase_price = $_POST['total_purchase_price'];
$equity               = $_POST['equity'];
$balance_to_finance   = $_POST['balance_to_finance'];
	

//interest rate
$term    = $_POST['term'];
$payment = $_POST['payment'];
$yearly  = $_POST['yearly'];


$net_operating_income = $_POST['net_operating_income'];
$cap_rate             = $_POST['cap_rate'];
$debt_service         = $_POST['debt_service'];
$cash_flow            = $_POST['cash_flow'];
$return_on_investment = $_POST['return_on_investment'];

//key ratios

$total_square_feet            = $_POST['total_square_feet'];
$average_square_feet_per_unit = $_POST['average_square_feet_per_unit'];  
$average_rent_per_square_feet = $_POST['average_rent_per_square_feet'];
$average_cost_square_feet     = $_POST['average_cost_square_feet'];
$average_unit_cost            = $_POST['average_unit_cost'];
$cap_rate                     = $_POST['cap_rate']; 
		
	
	
	
	
	
?>


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
					<form action ="financial_analysis_main.php" method = "POST">
					
						<h1>Financial Analysis</h1>
						
						Land:<br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($land, 2);?>" readonly><br>

						Building:<br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($building, 2);?>" readonly><br>

						Improvements:<br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($improvements, 2);?>" readonly><br>

						Closing Cost:<br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($closing_cost, 2);?>" readonly><br>
	
			
					<br>
					<h1>Number of Units</h1>
					
						Average Monthly Rent:     <br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($average_monthly_rent, 2);?>" readonly><br>
		
						Gross Monthly Revenues:   <br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($gross_monthly_revenues, 2);?>" readonly><br>
		
						Vacancy Rent Loss Yearly: <br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($vacancy_rent_loss_yearly, 2);?>" readonly><br>
		
					<br>
					<h1>Operating Expenses</h1>
					
						Repairs and Maintenance: <br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($repairs_and_maintenance, 2);?>" readonly><br>
		
						Taxes:                   <br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($taxes, 2);?>" readonly><br>
		
						Insurance:               <br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($insurance, 2);?>" readonly><br>
		
						Property Management:     <br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($property_management, 2);?>" readonly><br>
		
						Utilities:               <br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($utilities, 2);?>" readonly><br>
		
						Trash Removal:           <br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($trash_removal, 2);?>" readonly><br>
		
	
					<br>
					<br>
					<h1>Financing Assumptions</h1>
					
						Total Purchase Price: <br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($total_purchase_price, 2);?>" readonly><br>
	
						Equity:               <br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($equity, 2);?>" readonly><br>
	
						Balance to finance:   <br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($balance_to_finance, 2);?>" readonly><br>
		
	
	

					<br>
					<h1>Interest Rate</h1>
					
						Term:<br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($term, 2);?>" readonly><br>
		
						Payment:<br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($payment, 2);?>" readonly><br>
		
						Yearly:<br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($yearly, 2);?>" readonly><br>
					
						Net Operating Income:<br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($net_operating_income, 2);?>" readonly><br>
						
						CAP Rate: <br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($cap_rate, 2);?>" readonly><br>
						
						Debt Service: <br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($debt_service, 2);?>" readonly><br>
						
						Cash Flow: <br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($cash_flow, 2);?>" readonly><br>
						
						Return on Investment: <br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($return_on_investment, 2);?>" readonly><br>
						
						<br>
					<h1>Key Ratios</h1>

						Total Square Feet:<br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($total_square_feet, 2);?>" readonly><br>
						
						Average Square Feet/Unit:<br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($average_square_feet_per_unit, 2);?>" readonly><br>
						
						Average Rent Square Feet:<br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($average_rent_per_square_feet, 2);?>" readonly><br>
						
						Average Cost Square Feet:<br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($average_cost_square_feet, 2);?>" readonly><br>
						
						Average Unit Cost:<br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($average_unit_cost, 2);?>" readonly><br>
						
						Cap Rate:<br>
						<input class="form-control" id="readonly" type="text" placeholder="<?php echo number_format($cap_rate, 2);?>" readonly><br>	
						
						
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
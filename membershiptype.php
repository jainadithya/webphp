<?php
		include ("includes/connection.php");	//
		if(!isset($_SESSION["id"])){
			include 'includes/header.php';
		}
		else{
			include 'includes/header_member.php';
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Membership Types</title>
	<link rel="stylesheet" href="css/style2.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <section class="container">
    <h1  style="text-align: center">Membership Types</h1> <!--heading for the section-->
    <p  style="text-align: center" >Choose the membership type that best fits your needs.</p> <!--paragraph below heading-->
    
    <section class="row"> 
		
      <section class="col-md-4"><!--section for silver membership-->
        <section class="panel panel-default"> <!--putting the section in a panel-->
          <section class="panel-heading"><!--panel heading-->
            <h3 class="panel-title">Silver</h3><!--silver membership type-->
          </section><!--section closes-->			
          <section class="panel-body"> <!--panel body-->
            <h4>Benefits</h4><!--heading for the list of benefits-->
            <ul>
              <li>Access home page </li><!--listing the benefits-->
              <li>Access news page</li>
            </ul>
            <h4>Pricing</h4><!--heading for pricing-->
            <p>€0 month</p><!--amount-->
            <a href="#" style="margin-top:42px" class="btn btn-primary">Sign up for free</a><!--ctreating a button-->
          </section><!--section closes-->
        </section><!--section closes-->
      </section><!--section closes-->
      
      <section class="col-md-4">
        <section class="panel panel-default">
          <section class="panel-heading">
            <h3 class="panel-title">Gold</h3><!--gold membership type-->
          </section>
			
          <section class="panel-body">
            <h4>Benefits</h4>
            <ul>
              <li>See the team</li>
              <li>Reach out to us anytime through our email</li>
            </ul>
            <h4>Pricing</h4>
            <p>€10 per month</p>
            <a href="#" style="margin-top:42px"  class="btn btn-primary">Get Started</a>
          </section>
        </section>
      </section>
      
      <section class="col-md-4">
        <section class="panel panel-default">
          <section class="panel-heading">
            <h3 class="panel-title">Platinum</h3><!--gold membership type-->
          </section>
          <section class="panel-body">
            <h4>Benefits</h4>
            <ul>
              <li>Get to know more about the players</li>
              <li>24/7 support on call</li>
              <li>Exclusive perks</li>
            </ul>
            <h4>Pricing</h4>
            <p>€20 per month</p>
            <a href="#" class="btn btn-primary">Get Started</a>
          </section><!--section closes-->
        </section><!--section closes-->
      </section><!--section closes-->
    </section>  <!--section closes-->  
	  
  </section><!--section closes-->	
</body>
</html>

<?php
	include ("./includes/footer.php");
?>

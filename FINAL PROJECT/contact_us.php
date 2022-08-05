<?php
include "includes/common.php"
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Contact Us | E-Store.com</title>
        <!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="img\logo.png" type="image/png">
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>

<body style="padding-top: 50px;">
    
    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    <br>
    
<div class="container">
    <div class="row">
        <div class="col-sm-10">
		  <h1 class="title">LIVE SUPPORT</h1>
		  <h4>24 hours|7 days a week| 365 days a year Live Technical Support</h4><br>
          <div>
             <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. There are many variations of passages of Lorel Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
          </div>
      </div>
        <div class="col-sm-2">
         <img align="right" src="img/contact.png" alt="contact us">
        </div>
    </div>
    

<div class="row">
    <div class="col-sm-9">
        <div class="contact-form">
            <h2>CONTACT US</h2>
	           <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="sendemail.php">
				    
                    <div class="form-group col-sm-9">
                        <p>Name:</p>
				        <input type="text" name="name" class="form-control" required="required" placeholder="" >
				    </div>
				    
                    <div class="form-group col-sm-9">
                        <p>Email:</p>
				        <input type="email" name="email" class="form-control" required="required" placeholder="">
				    </div>
				    
                    <div class="form-group col-sm-9">
                        <p>Message:</p>
				        <textarea name="message" id="message" required="required" class="form-control" rows="7" placeholder=""></textarea>
				    </div>
				            
                    <div class="form-group col-sm-7">
				                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
				    </div>
				</form>
        </div>
    </div>
	    		
        <div class="col-sm-3">
	       <div class="contact-info">
	           <h2 class="title">Company Information:</h2>
	               <address>
				    <p>500 Lorem Ipsum Dolar Sit,</p>
				    <p>22-56-2-9 Sit Amet, Lorem,</p>
				    <p>USA</p>
				    <p>Phone:(00) 222 666 444</p>
				    <p>Fax:(000) 000 00 00 0</p>
				    <p>Email: info@mycompany.com</p>
	               </address>
	               
	            <div><p>Follow On: Facebook, Twitter</p>
               </div>
            </div>
        </div>
    </div>
</div>



      <?php include 'includes/footer.php'; ?>
    </body>
</html>

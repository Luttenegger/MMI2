<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>McGuran Mechanical Inc.</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

  </head>
<div class="navWrap">
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    	<div class="container">
        	<div class="navbar-header">
            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">McGuran Mechanical Inc.</a>
            </div>

            <div class="navbar-collapse collapse">
            	<ul class="nav navbar-nav navbar-right">
                	<li class="active"><a href="index.html">Home</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
          
            </div>
        </div>
    </div>
</div>
<body>

<div class="container">
<div class="row">
  <div class="col-md-12">
    <small><i></i>Add alerts if form ok... success, else error.</i></small>
    <div class="alert alert-success"><strong><span class="glyphicon glyphicon-send"></span> Success! Message sent. (If form ok!)</strong></div>   
    <div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span><strong> Error! Please check the inputs. (If form error!)</strong></div>
  </div>
  <form role="form" action="" method="post" >
    <div class="col-lg-6">
      <div class="form-group">
        <label for="InputName">Your Name</label>
        <div class="input-group">
          <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="InputEmail">Your Email</label>
        <div class="input-group">
          <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="InputMessage">Message</label>
        <div class="input-group"
>
          <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="InputReal">What is 4+3? (Simple Spam Checker)</label>
        <div class="input-group">
          <input type="text" class="form-control" name="InputReal" id="InputReal" required>
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
    </div>
  </form>
  <hr class="featurette-divider hidden-lg">
  <div class="col-lg-5 col-md-push-1">
    <address>
    <h3>Office Location</h3>
    <p class="lead"><a href="https://www.google.com/maps/preview?ie=UTF-8&q=The+Pentagon&fb=1&gl=us&hq=1400+Defense+Pentagon+Washington,+DC+20301-1400&cid=12647181945379443503&ei=qmYfU4H8LoL2oATa0IHIBg&ved=0CKwBEPwSMAo&safe=on">The Pentagon<br>
Washington, DC 20301</a><br>
      Phone: XXX-XXX-XXXX<br>
      Fax: XXX-XXX-YYYY</p>
    </address>
  </div>
</div>

</div>

<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['InPutReal']);
        $from = 'ContactForm'; 
        $to = 'Luttenegger.Eric@gmail.com'; 
        $subject = 'Message McGuran Mechanical';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 7) {
            $errHuman = 'Your anti-spam is incorrect';
        }
?>
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
?>
<!-- footer -->
<div class="footer">
<div class="navbar navbar-inverse navbar-fixed-bottom"
role="navigation">
    <div class="container">
        <div class="navbar-text pull-left">
        McGuran Mechanical Inc | Phoenix 
        </div>
    </div>
</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
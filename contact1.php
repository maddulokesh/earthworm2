<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>EARTHWORM: contact</title>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="#">
                <img src="img/farmerlogo.png" height="30" width="41">
            </a>
            <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="./home.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                <li class="nav-item"><a class="nav-link" href="./about1.php"><span class="fa fa-info fa-lg"></span> About</a></li>
                <li class="nav-item active"><a class="nav-link" href="./contact1.php"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
            </ul>
        </div>
        </div>
    </nav>
    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-6">
                    <h1>EARTHWORM</h1>
                    <p>We take inspiration from present farmers problems and created an app for farmers to help to give information about agriculture based on daily conditions</p>
                </div>
                <div class="col-12 col-sm-2"></div>
                <div class="col-12 col-sm-3 align-self-center">
                    <img src="img/farmerlogo.png" class="img-fluid">
                </div>
                <div class="col-12 col-sm-1"></div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="./home.php">Home</a></li>
                <li class="breadcrumb-item active">Contact</li>
            </ol>
            <div class="col-12">
               <h3>Contact Us</h3>
               <hr>
            </div>
        </div>

        <div class="row row-content">
           <div class="col-12">
              <h3>Location Information</h3>
           </div>
            <div class="col-12 col-sm-4 offset-sm-1">
                   <h5>Our Address</h5>
                    <address style="font-size: 100%">
		              Vignan's institute of information technology<br>
		              Beside VSEZ, Duvvada<br>
		              Vishakhapatnam, Andhra Pradesh<br>
		              <i class="fa fa-phone"></i>: +91 6305164033<br>
		              <i class="fa fa-fax"></i>: +91 9505285308<br>
		              <i class="fa fa-envelope"></i>:
                        <a href="mailto:maddulokesh2001@gmail.com">maddulokesh2001@gmail.com</a>
		           </address>
            </div>
            <div class="col-12 col-sm-11 offset-sm-1">
                <div class="btn-group" role="group">
                    <a role="button" class="btn btn-primary" href="tel:+91 6305164033"><i class="fa fa-phone"></i> Call</a>
                    <a role="button" class="btn btn-info"><i class="fa fa-skype"></i> Skype</a>
                    <a role="button" class="btn btn-success" href="mailto:maddulokesh2001@gmail.com"><i class="fa fa-envelope-o"></i> Email</a>
                </div>
            </div>
        </div>

        <div class="row row-content">
           <div class="col-12">
              <h3>Send us your Feedback</h3>
           </div>
            <div class="col-12 col-md-9">
                <form method="post" action="contact.php">
                <?php include('errors.php'); ?>
                    <div class="form-group row">
                        <label for="firstname" class="col-md-2 col-form-label">First Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" value="<?php echo $firstname; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastname" class="col-md-2 col-form-label">Last Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" value="<?php echo $lastname; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telnum" class="col-12 col-md-2 col-form-label">Contact Tel.</label>
                        <div class="col-5 col-md-3">
                            <input type="tel" class="form-control" id="areacode" name="areacode" placeholder="Area Code" value="<?php echo $areacode; ?>">
                        </div>
                        <div class="col-7 col-md-7">
                            <input type="tel" class="form-control" id="telnum" name="telnumber" placeholder="Tel. Number" value="<?php echo $telnumber; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="emailid" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                            <input type="email" class="form-control" id="emailid" name="email" placeholder="Email" value="<?php echo $email; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="feedback" class="col-md-2 col-form-label">Your Feedback</label>
                        <div class="col-md-10">
                            <textarea class="form-control" id="feedback" name="feedback" rows="12" placeholder="Feedback" value="<?php echo $feedback; ?>"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-md-2 col-md-10">
                            <button type="submit" class="btn btn-primary" name="feedbackdetails">
                                Sent Feedback
                            </button>
                        </div>
                    </div>
                </form>
            </div>
             <div class="col-12 col-md">
            </div>
       </div>

    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="./home.php">Home</a></li>
                        <li><a href="./about1.php">About</a></li>
                        <li><a href="./contact1.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
                        Vignan's institute of information technology<br>
                        Beside VSEZ, Duvvada<br>
                        Vishakhapatnam, Andhra Pradesh<br>
                        <i class="fa fa-phone"></i>: +91 6305164033<br>
                        <i class="fa fa-fax"></i>: +91 9505285308<br>
                        <i class="fa fa-envelope"></i>:
                        <a href="mailto:maddulokesh2001@gmail.com">maddulokesh2001@gmail.com</a>
                    </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/profile.php?id=100075661933825"><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/maddu-lokesh-ba104a208"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-google" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                        <a class="btn btn-social-icon" href="mailto:maddulokesh2001@gmail.com"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2022 EARTHWORM</p>
                </div>
           </div>
        </div>
    </footer>
    <!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>

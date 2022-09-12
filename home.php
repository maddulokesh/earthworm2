<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
        <link rel="stylesheet" href="css/styles.css">
    <title>EARTHWORM</title>
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
                <li class="nav-item active"><a class="nav-link" href="./home.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                <li class="nav-item"><a class="nav-link" href=""><span class="fa fa-info fa-lg"></span> About</a></li>
                <li class="nav-item"><a class="nav-link" href="./contact1.php"><span class="fa fa-address-card fa-lg"></span> Contact</a></li>
            </ul>
            <span class="navbar-text">
                <a href="./login.php"><span class="fa fa-sign-in">Login</span></a>
            </span>
        </div>
        </div>
    </nav>
    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-12 col-sm-5">
                    <h1>F-arms</h1>
                    <p>We take inspiration from present farmers problems and created an app for farmers to help to give information about agriculture based on daily conditions</p>
                </div>
                <div class="col-12 col-sm-3 align-self-center">
                    <img src="img/farmerlogo.png" class="img-fluid">
                </div>
                <div class="col-12 col-sm align-self-center" style="text-align-center">
                    <a type="button" class="btn btn-block nav-link btn-warning" href="./booking.php" role="button">Book Products Here</a>
                </div>
            </div>
        </div>
        
    </header>
    <div class="container">
        <div class="row row-content">
            <div class="col">
                <div id="mycarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid"
                                src="img/crop.png" alt="crop">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="mt-0"><span class="badge badge-danger">Soil and water sensors</span></h2>
                                <p class="d-none d-sm-block">These sensors are very useful for detection of moisture and nitrogen levels and moreover these are affordable and durable to  farmers to distribute them throughout their land.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid"
                                src="img/tech.png" alt="crop">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="mt-0"><span class="badge badge-danger">Drone and other aerial imagery </span></h2>
                                <p class="d-none d-sm-block">With the assistance of drones farmers have an opportunity to define crop biomass, plant height, the presence of weeds, and water saturation on certain field areas with high precision.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid"
                                src="img/auto.png" alt="crop">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="mt-0"><span class="badge badge-danger">Pervasive automation</span></h2>
                                <p class="d-none d-sm-block">This is an amazing boom in the agricultural sector which includes the vehicles controlled by robotics or remotely through navigation systems.</p>
                            </div>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#mycarousel" data-slide-to="1"></li>
                        <li data-target="#mycarousel" data-slide-to="2"></li>
                    </ol>
                    <a class="carousel-control-prev" href="#mycarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#mycarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
             </div>
        </div>
    </div>  

    <div class="container">
        <div class="card">
            <h3 class="card-header bg-primary text-white">Suggestions</h3>
            <div class="card-body">
                
                    <div class="col-sm col-md flex-first">
                        <div class="media">
                            <div class="media-body">
                            <div class="card">
                            <div class="card-body">
                            <div class="col-sm col-md flex-first">
                            <div class="media">
                            <div class="media-body">
                            1. Loamy soil (more fertile) is used for growing crops such as pulses,sugarcane,cotton.<br>
                            link: <a href="https://www.bobvila.com/articles/loamy-soil/">https://www.bobvila.com/articles/loamy-soil/</a>
                            </div></div></div></div></div>
                           
                            <div class="card">
                            <div class="card-body">
                            <div class="col-sm col-md flex-first">
                            <div class="media">
                            <div class="media-body">
                            2. For the less fertility of soil to increase the fertility we can grow plants like peas, beans ,clover,oats.<br>
                            link: <a href="https://rodaleinstitute.org/blog/20-ways-to-boost-soil-fertility/">https://rodaleinstitute.org/blog/20-ways-to-boost-soil-fertility/</a>
                            </div></div></div></div></div>
                            <div class="card">
                            <div class="card-body">
                            <div class="col-sm col-md flex-first">
                            <div class="media">
                            <div class="media-body">
                            3. Sandy soil is used to grow hibiscus, carrots, lettuce.<br>
                            link: <a href="https://byjus.com/biology/types-of-soil/">https://byjus.com/biology/types-of-soil/</a>
                            </div></div></div></div></div>
                            
                            <div class="card">
                            <div class="card-body">
                            <div class="col-sm col-md flex-first">
                            <div class="media">
                            <div class="media-body">
                            4. Clay soil is used to grow broccoli, cabbage,gram,lentils.<br> 
                            link: <a href="https://www.familyhandyman.com/article/clay-soil/">https://www.familyhandyman.com/article/clay-soil/</a>
                            </div></div></div></div></div>
                            
                            <div class="card">
                            <div class="card-body">
                            <div class="col-sm col-md flex-first">
                            <div class="media">
                            <div class="media-body">
                            5. Some plants do not require a particular soil to grow instead they can grow in water. Those are known as hydroponic plants.<br>
                            link: <a href="https://dengarden.com/gardening/indoor-hydroponic-garden">https://dengarden.com/gardening/indoor-hydroponic-garden</a>
                            </div></div></div></div></div>
                            
                            <div class="card">
                            <div class="card-body">
                            <div class="col-sm col-md flex-first">
                            <div class="media">
                            <div class="media-body">
                            6. The hydroponic plants which can grow to our weather condition are strawberry, basil,mint.<br>
                            link: <a href="https://gardeningbrain.com/strawberry-mint-plant/">https://gardeningbrain.com/strawberry-mint-plant/</a>
                            </div></div></div></div></div>
                            
                            <div class="card">
                            <div class="card-body">
                            <div class="col-sm col-md flex-first">
                            <div class="media">
                            <div class="media-body">
                            7. During rabi season we can grow sweet potatoes, edamame,pumpkin, peppers.<br>
                            link: <a href="https://byjus.com/free-ias-prep/rabi-kharif-crops/">https://byjus.com/free-ias-prep/rabi-kharif-crops/</a>
                            </div></div></div></div></div>
                           
                            <div class="card">
                            <div class="card-body">
                            <div class="col-sm col-md flex-first">
                            <div class="media">
                            <div class="media-body">
                            8. During kharif season we can grow  rice,millets,maize.<br>
                            link: <a href="https://byjus.com/biology/difference-between-rabi-and-kharif-crops/">https://byjus.com/biology/difference-between-rabi-and-kharif-crops/</a>
                            </div></div></div></div></div>
                            
                            <div class="card">
                            <div class="card-body">
                            <div class="col-sm col-md flex-first">
                            <div class="media">
                            <div class="media-body">
                            9. During Zaid season we can grow watermelon, muskmelon, fodder crops.<br>
                            link: <a href="https://byjus.com/ias-questions/what-is-zaid-crop/">https://byjus.com/ias-questions/what-is-zaid-crop/</a>
                            </div></div></div></div></div>
                          
                            <div class="card">
                            <div class="card-body">
                            <div class="col-sm col-md flex-first">
                            <div class="media">
                            <div class="media-body">
                            10. For farmers there is no particular time for the growth of the crops as each crop possess different habitat of their growth.<br>
                            link: <a href="https://www.sciencedirect.com/topics/agricultural-and-biological-sciences/soil-habitats">https://www.sciencedirect.com/topics/agricultural-and-biological-sciences/soil-habitats</a>
                            </div></div></div></div></div>
            
                            </div>
                        
                        </div>
                    </div>
            </div>
        </div> 
    </div> 

    <div class="container">
        <div class="card">
            <h3 class="card-header bg-secondary text-white">Weather Report</h3>
            <div class="card-body">
                
                    <div class="col-sm col-md flex-first">
                        <div class="media">
                            <div class="media-body">
                                <dl class="row">
                                    <dt class="col-6">Date</dt>
                                    <dd class="col-6">13 aug.2022</dd>
                                    <dt class="col-6">Temperature</dt>
                                    <dd class="col-6">26 Degree Celsius</dd>
                                    <dt class="col-6">Humidity</dt>
                                    <dd class="col-6">89%</dd>
                                    <dt class="col-6">Sunrise</dt>
                                    <dd class="col-6">5:28 AM</dd>
                                    <dt class="col-6">Sunset</dt>
                                    <dd class="col-6">6:36 PM</dd>
                                </dl>
                            </div>
                            <img class="d-flex mr-3 img-thumbnail align-self-center col-sm-3"
                            src="img/weather1.png" alt="Weather">
                        </div>
                    </div>
                
            </div>
        </div>
        
    </div>   
    <div class="container">
        <div class="card">
            <h3 class="card-header bg-primary text-white">Pesticides</h3>
            <div class="card-body">
                
                    <div class="col-sm col-md flex-first">
                        <div class="media">
                            <div class="media-body">
                                <dl class="row">
                                    <dt class="col-6">DDT</dt>
                                    <dd class="col-6">₹25.6/kg(For to kill insects)</dd>
                                    <dt class="col-6">Chlorpyrifos</dt>
                                    <dd class="col-6">₹300/lit(To control foliage and soil borne)</dd>
                                    <dt class="col-6">Herbicides</dt>
                                    <dd class="col-6">₹215/lit(To control undesired plants)</dd>
                                    <dt class="col-6">Rodenticide</dt>
                                    <dd class="col-6">₹60/piece(To kill rats and mice)</dd>
                                    
                                </dl>
                            </div>
                            <img class="d-flex mr-3 img-thumbnail align-self-center col-sm-3"
                            src="img/pesticide.png" alt="Weather">
                        </div>
                    </div>
                
            </div>
        </div>
        
    </div> 
    <div class="container">
        <div class="card">
            <h3 class="card-header bg-secondary text-white">Fertilizers</h3>
            <div class="card-body">
                
                    <div class="col-sm col-md flex-first">
                        <div class="media">
                            <div class="media-body">
                                <dl class="row">
                                    <dt class="col-6">Urea</dt>
                                    <dd class="col-6">₹5.36/kg(For nitrogen improvements)</dd>
                                    <dt class="col-6">DAP</dt>
                                    <dd class="col-6">₹23.6/kg(For ammonium-potassium improvements)</dd>
                                    <dt class="col-6">Potassium</dt>
                                    <dd class="col-6">₹18/kg(For potassium improvements)</dd>
                                    <dt class="col-6">Micro-nutrients</dt>
                                    <dd class="col-6">₹125/kg</dd>
                                    
                                </dl>
                            </div>
                            <img class="d-flex mr-3 img-thumbnail align-self-center col-sm-3"
                            src="img/fertilizers.png" alt="Weather">
                        </div>
                    </div>
                
            </div>
        </div>
        
    </div> 
    <div class="container">
        <div class="card">
            <h3 class="card-header bg-primary text-white">Tools</h3>
            <div class="card-body">
                
                    <div class="col-sm col-md flex-first">
                        <div class="media">
                            <div class="media-body">
                                <dl class="row">
                                    <dt class="col-6">Combined Harvester</dt>
                                    <dd class="col-6">₹1000/hour</dd>
                                    <dt class="col-6">rotavator</dt>
                                    <dd class="col-6">₹600/hour</dd>
                                    <dt class="col-6">Tractor</dt>
                                    <dd class="col-6">₹500/hour</dd>
                                    <dt class="col-6">Sprinklers</dt>
                                    <dd class="col-6">₹300/day</dd>
                                    
                                </dl>
                            </div>
                            <img class="d-flex mr-3 img-thumbnail align-self-center col-sm-3"
                            src="img/combined.png" alt="Weather">
                        </div>
                    </div>
                
            </div>
        </div>
        
    </div> 
    <div class="row row-content align-items-center justify-content-center" id="booking">
        <div class="col-12 col-sm-8">
            <div class="card">
                <h3 class="card-header bg-warning text-white">Book Products Here</h3>
                <div class="card-body">
                    <form method="post" action="home1.php">
                        <div class="form-group row">
                            <label for="phone number" class="col-md-2 col-form-label">Phone Number</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="phonenumber" value="<?php echo $phonenumber; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="product name" class="col-md-2 col-form-label">Product (or) Tool Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="productname" name="productname" placeholder="productname" value="<?php echo $productname; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="No. of packets" class="col-md-2 col-form-label">No. of Kilograms (or) Tools</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="productquantity" name="productquantity" placeholder="productquantity" value="<?php echo $productquantity; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-md-2 col-md-10">
                                <button type="submit" class="btn btn-secondary" name="cancel" href="home1.php">Cancel</button>
                                <button type="submit" class="btn btn-primary" name="booking" href="home1.php">Book</button>
                            </div>
                        </div>
                    </form>
                </div>
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
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
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
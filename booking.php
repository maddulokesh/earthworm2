<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Booking</title>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
        <link rel="stylesheet" href="css/styles.css">
</head>
<body>
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
</body>
</html>
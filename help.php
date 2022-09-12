                    <form>
                        <div class="form-group row">
                            <label for="product name" class="col-md-2 col-form-label">Product (or) Tool Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="product name" name="product name" placeholder="Product Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="No. of packets" class="col-md-2 col-form-label">No. of Kilograms (or) Tools</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="no. of packets" name="no. of packets" placeholder="No. of packets">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-md-2 col-md-10">
                                <button type="submit" class="btn btn-primary">Book</button>
                            </div>
                        </div>
                    </form>







                    <div class="header">
  	<h2>Book Products Here</h2>
  </div>
	
  <form method="post" action="booking.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>product name</label>
  	  <input type="text" name="productname" value="<?php echo $productname; ?>">
  	</div>
  	<div class="input-group">
  	  <label>product quantity</label>
  	  <input type="text" name="productquantity" value="<?php echo $productquantity; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="booking" href="home.php">Book</button>
  	</div>
  </form>









  <div class="form-group row">
                        <div class="col-md-6 offset-md-2">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="approve" id="approve" value="">
                                <label class="form-check-label" for="approve">
                                    <strong>May we contact you?</strong>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3 offset-md-1">
                            <select class="form-control">
                                <option>Tel.</option>
                                <option>Email</option>
                            </select>
                        </div> 
                    </div>
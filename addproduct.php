<?php
   //$path = $_SERVER['DOCUMENT_ROOT'];   // flagged: To be checked if it's really needed in this code
   include_once("templateheader.php");
   include('registration/server.php');  // flagged: Will tidy up later after removing the reg folder

   // Check if the user clicked on "Logout" then destroy the login session
   if (isset($_GET['logout'])) {
  	session_destroy();                  // destroy users login session
  	unset($_SESSION);                   // make sure the login session variables don't persist
    header("location: ./index.php");    // redirect to index.php
  }


  // If the user is logged in, and the users authorization level is less than 200.
  // Or if the user is not logged in then destroy the users login session and goto index.php
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && $_SESSION['level'] < 200 || !$_SESSION ) {
    session_destroy();                  // destroy users login session
    unset($_SESSION);                   // make sure the login session variables don't persist
    header("location: ./index.php");    // redirect to index.php
  }

   include_once("templatenav.php");
?>
<hr>

    <!-- Management System -->
    <div  class="container-fluid">
        <h2>Add Products</h2> <!--
        <form action="" enctype="multipart/form-data" id="js-upload-form">
            <div class="form-group">
                <label for="exampleFormControlFile1">Add photo</label>
                <input type="file" name="files[]" class="form-control-file" id="js-upload-files">
            </div>
            <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>
        </form> -->
    

    <!-- Drag and drop window
    
        <div class="row">
            <div class="col-lg dragndrop" id="uploader">
                <div class="row h-100 justify-content-center align-items-center" id="highlighter">
                    <p class="">Drop Files Here</p>
                </div>
            </div>
        </div>
    -->
        <div id="divInsertCols" class="row">

        </div>
    <!-- Progress Bar
    <div class="progress">
        <div class="progress-bar" id="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
        <span class="sr-only">60% Complete</span>
        </div>
    </div> -->

    <!-- STATUS -->
        <div id="upstat">
        </div>


    <!-- Upload Finished 
    <div class="js-upload-finished">
        <h3>Processed files</h3>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right"></span>image01.jpg</a>
            <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right"></span>image02.jpg</a>
        </div>
    </div> -->

    <!-- FALLBACK -->
        <form action="ajax.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="file" name="file-upload" id="file-upload" accept="image/*" multiple>
            </div>
            <div class="form-group">
                <label for="inputProductListingName">Product Listing Name</label>
                <input type="text" name="productListingName" id="inputProductListingName" class="form-control" placeholder="Product Listing Name">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="geography" id="exampleRadios1" value="mainland">
                <label class="form-check-label" for="exampleRadios1">
                    Sell online to the 48 states.
                </label>
                <small id="geographyHelpMainland" class="form-text text-muted">For selling online to the 48 states. Shipping/handling and other extra costs should be added manually to the "Price of Product" which is located below.</small>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="geography" id="exampleRadios2" value="local" checked>
                <label class="form-check-label" for="exampleRadios2">
                    Sell only locally
                </label>
                <small id="geographyHelpLocal" class="form-text text-muted">For selling in your local area only</small>
            </div>
            <div class="form-group">
                <label for="inputProductYear">Year</label>
                <input type="text" name="productYear" id="inputProductYear" class="form-control" placeholder="Product Year">
            </div>
            <div class="form-group">
                <label for="inputProductMileage">Mileage</label>
                <input type="number" name="productMileage" id="inputProductMileage" class="form-control" placeholder="Mileage">
            </div>
            <div class="form-group">
                <label for="inputProductMake">Make</label>
                <input type="text" name="productMake" id="inputProductMake" class="form-control" placeholder="Make">
            </div>
            <div class="form-group">
                <label for="inputProductModel">Model</label>
                <input type="text" name="productModel" id="inputProductModel" class="form-control" placeholder="Model">
            </div>
            <div class="form-group">
                <label for="autoOrManual">Auto or Manual Transmission</label>
                <select name="automaticOrManual" class="form-control" id="autoOrManual">
                    <option value="1">Automatic</option>
                    <option value="2">Manual</option>
                </select>
            </div>
            <div class="form-group">
                <label for="inputProductColor">Color</label>
                <input type="text" name="productColor" id="inputProductColor" class="form-control" placeholder="Color">
            </div>
            <div class="form-group">
                <label for="inputProductVin">Vin Number</label>
                <input type="text" name="productVin" id="inputProductVin" class="form-control" placeholder="Vin Number">
            </div>
            <div class="form-group">
                <label for="priceOfProduct">Price of Product</label>
                <input type="number" min="0" id="priceOfProduct" aria-describedby="priceHelp" class="form-control" placeholder="price">
                <small id="priceHelp" class="form-text text-muted">This is the prerequisite price(goal) that you want to sell the product for, but not the final closing price, which could be higher if people continue bidding while the product is pending closure.</small>
            </div>
            <div class="form-group">
                <label for="productDescription">Product Description</label>
                <textarea class="form-control" id="productDescription" placeholder="Enter a good description of the product for the customers... Engine Size, Drivetrain, Etc..." rows="4"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit" name="submit">
            </div>
        </form>

    </div>

    <!-- End -->

<?php include_once("templatefooter.php");
?>
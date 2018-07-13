<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Add Products/Items</title>
    <style>
	 body{
		 color: #000 !important;
	 }
	 label{
		 font-weight: bold !important;
	 }
	 </style>
	<?php include("header.html"); ?>
    
    <?php include("sidebar.php"); ?>

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> Add Products/Items</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_document_alt"></i>Add Products/Items</li>
						
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
          
              <div class="row">
                  <div class="col-md-5">
				 
				  <?php if(isset($_REQUEST["success"])) { 
					
				  ?>
						<section>
							<div class="panel" >
							 <p class="text-center" style='background: green; color: #fff; padding: 10px;'><span>(<?php echo $_REQUEST["upload"] ?>) Items were uploaded successfully. <br> Your products is currently being processed by the administrators to meet certain standard before publishing.</span></p>
							 <center><a href="additems.php" class="btn btn-danger"><i class="fa fa-plus"></i> Add More</a> </center>
							 <br clear="all" />
							</div>
						</section>
				         
					   
					<?php } ?>
				  
				 <?php if(!isset($_REQUEST["success"])) { ?>
                <section class="panel">
                          <header class="panel-heading">
                             Add New Items
                          </header>
                          <div class="panel-body">
			
                <div class="row">
					   
				<div class="col-md-12">
				<form action="process.php" method="post" class="form-group" ENCTYPE="multipart/form-data">
				<div class="form-group">
				<label>Product/Item Title</label>
				<input type="text" name="itemtitle" class="form-control"/>
				
				</div>
				<div class="form-group">
				<label>Product/Item Category</label>
				<input type="text" list="maincat" name="itemcategory" class="form-control" placeholder="Item's Category..." />
				<datalist id="maincat">
				<?php 				
				$check = mysql_query("select * from items group by itemcategory"); 
					while($item = mysql_fetch_assoc($check)) {
				?>
				<option value="<?php echo"$item[itemcategory]"; ?>">
				<?php } ?>
				</datalist>
				</div>
				
				<div class="form-group">
				<label>Standard Price (N)</label>
				<input type="number" name="standardprice" class="form-control">
				
				</div>
				<div class="form-group">
				<label>Discounted Price (N)</label>
				<input type="number" name="discountprice" class="form-control" />
				</div>
				<div class="form-group">
				<label>Quantity for Sale</label>
				<input type="number" name="quantity" class="form-control"/>
				</div>
				<div class="form-group">
				<label>No of Star Review</label>
				<select class="form-control" name="reviewstar">
				<option value="">Choose Figure</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				
				</select>
				</div>
			
				<div class="form-group">
				<label>Product Description</label>
				<textarea name="description" class="form-control" value="<?php $_POST["remark"]; ?>" placeholder="Give a description for this product"></textarea>
				</div>
				<div class="form-group">
				<label>Shipping Information</label>
				<textarea name="shipping" class="form-control" value="<?php $_POST["remark"]; ?>" placeholder="Please, provide shipping information about this product"></textarea>
				</div>
				
				<div class="form-group">
				<label>Sale End Day</label>
				<input type="date" name="saleenddate" class="form-control"/>
				</div>
				<div class="form-group">
				<label>Upload Product/Item Images</label>
				<input type='file' multiple name='images[]' value='select file'>
				</div>
				
				<div class="form-group">
				<input type="submit" class="btn btn-primary" name="additem" value="Submit Product for Processing" />
				</div>
			  </form>
		  </div>
		  </div>
		 </div> <!---/panel -->
                          
						  </div>
                      </section>
				 <?php } ?>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery validate js -->
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>

    <!-- custom form validation script for this page-->
    <script src="js/form-validation-script.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>    


  </body>
</html>

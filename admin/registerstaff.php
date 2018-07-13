<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Register Staffs</title>

	<?php include("header.html"); ?>

    <?php include("sidebar.php"); ?>

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> Staff Registration</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_document_alt"></i>Registration</li>
						
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
          
              <div class="row">
                  <div class="col-md-6">
                      <section class="panel">
                          <header class="panel-heading">
                             Staff Registration Form
                          </header>
                          <div class="panel-body">
			<?php if(!isset($_POST['regstaff'])){ ?>
                <div class="row">
					   
				<div class="col-md-9">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-group">
				<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" placeholder="First and Last Name" />
				</div>
				<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" placeholder="Username (Would be used to log in)" />
				</div>
				<div class="form-group">
				<label>Choose Password</label>
				<input type="password" name="password" class="form-control" placeholder="Choose a pasword (6 Characters minimum)" min="6" />
				</div>
				<div class="form-group">
				<label>Phone Number</label>
				<input type="number" name="phone" class="form-control" placeholder="Mobile No." />
				</div>
				<div class="form-group">
				<label>Email</label>
				<input class="form-control" name="email" placeholder="e.g. support@www.ewebstechnologies.com" />
				</div>
				 <div class="form-group">
				<label>Role</label>
				<select name="status" class="form-control">
				<?php $do = mysql_query("select * from staffs where status='admin'"); 
				if(!$available = mysql_fetch_assoc($do)) { ?>
				<option value="admin">Admin</option>
				<?php } ?>
				<option value="staff">Staff</option>
				</select>
				</div>
				<div class="form-group">
				<input type="submit" class="btn btn-primary" name="regstaff" value="Register" />
				</div>
			  </form>
		  </div>
		  </div>
			<?php }
if(isset($_POST['regstaff'])){
	  //save data to database
		
		//create table

		$sql= "	Create Table if not exists `staffs` (
				id VARCHAR (20) NOT NULL,
				name VARCHAR( 30),
				username VARCHAR(30),
				password VARCHAR(20),
				phone VARCHAR (20),
				email VARCHAR (50),
				lastaccess timestamp,
				status VARCHAR (20),
				date VARCHAR (20),
				loginstatus VARCHAR (20),
				PRIMARY KEY ( username )
				)";
		// Execute query
		if (!mysql_query($sql,$conn)) {
					echo "Error creating table: " . mysql_error($conn);
		}
		else
		{
		// escaping variables for security
			date_default_timezone_set('GMT');
			$id = time();
			$staffname = mysql_real_escape_string($_POST['name']);
			$date = date('h:i a M-D-Y');
			$username = mysql_real_escape_string($_POST['username']);
			$email = mysql_real_escape_string($_POST['email']);
			$phone = mysql_real_escape_string($_POST['phone']);
			$password = mysql_real_escape_string($_POST['password']);
			$status = mysql_real_escape_string($_POST['status']);
			
			if(! $conn )
			{
			  die('Could not connect:' . mysql_error());
			}
			if($staffname!="" and $username!="" and $email!="" and $phone!="" and $status!="" and $password!="" and strlen($password)>=6){
		    	
			$sql = "INSERT INTO `staffs` (id, name, username, password, phone, email, lastaccess, status, date, loginstatus) values ( '$id', '$staffname', '$username', '$password', '$phone', '$email', ' ', '$status', '$date',' ')";
		
			$retval = mysql_query($sql);
			if(! $retval )
			{
			  die("<span class='btn btn-danger'><b>$username is already registered!</b>");
			}else{echo"<span class='btn btn-success'><b>$staffname has been registered successfully <br /> Username: $username <br /> Password: $password.</b>";}
			
		}else{ echo"<span class='btn btn-danger'><b>Some fields were not filled in appropraitely</b>";}
  }
  
  }
?>

		  
                              </div> <!---/panel -->
                          </div>
                      </section>
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

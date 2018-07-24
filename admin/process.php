<?php //error_reporting(0);
include("../database.php");
session_start();
ob_start();
include("imageresize.php");
if(isset($_POST['additem']))
{
			date_default_timezone_set('Africa/Lagos');
			$id = uniqid().rand().time();
			//$itemname = mysql_real_escape_string($_POST['itemname']);
			$itemtitle= mysql_real_escape_string($_POST['itemtitle']);
			$itemcategory = mysql_real_escape_string($_POST['itemcategory']);
			$standardprice = mysql_real_escape_string($_POST['standardprice']);
			$discountprice = mysql_real_escape_string($_POST['discountprice']);
			$quantity = mysql_real_escape_string($_POST['quantity']);
			$reviewstar = mysql_real_escape_string($_POST['reviewstar']);
			$description = mysql_real_escape_string($_POST['description']);
			$shipping = mysql_real_escape_string($_POST['shipping']);
			$saleenddate = mysql_real_escape_string($_POST['saleenddate']);
			$saletime = strtotime($saleenddate);
			
			$time = time();
			$microtime = microtime();
			
			for($key = 0; $key < count($_FILES['images']['name']); $key++)
			{
			
				$remove = array("/","~","!","+","=","#","'","$","&","Ǿ");
				$filename = str_replace($remove,'',$_FILES['images']['name'][$key]);
				$type = end(explode('.', strtolower($_FILES['images']['name'][$key])));
				$explode = explode($type, $filename);
				
				$newfilename = trim($explode[0],'.');

				$ps = mysql_query("select * from items where `itemtitle`='$itemtitle'");
				$check = mysql_fetch_assoc($ps);
				
			//if(empty($check)){
			
				$file_upload="true";
				//$file_up_size=$_FILES['file_up']['size'][$key];
				if ($_FILES['images']['size'][$key] > 25000000000){
					$msg=$msg."Your uploaded file size is more than 2500KB
		 			so please reduce the file size and then upload.<BR>";
					$file_upload="false";
				}
				$time++;
			
				$allowtype = array("jpg","png","gif","jpeg");
				if (in_array($type, $allowtype))
				{
					$add = "../itemimages/$id/$filename";
				}
				else
				{
					$msg=$msg."BUT NO PICTURE WAS UPLOADED<BR>";
					$file_upload="false";
				}
				if($file_upload=="true")
				{
					if(!is_dir("../itemimages")){ mkdir("../itemimages"); }
					if(!is_dir("../itemimages/$id")){ mkdir("../itemimages/$id"); }
					
					if(move_uploaded_file ($_FILES['images']['tmp_name'][$key], $add))
					{
						store_uploaded_image($add,358,410);	
				
						$itemcode = uniqid().rand();	  
						//create table
						$id++;
						$sql= "	Create Table if not exists `items`(
						id VARCHAR (100),
						itemtitle VARCHAR(200),
						itemcategory VARCHAR(200),
						standardprice VARCHAR(50),
						discountprice VARCHAR (50),
						quantity VARCHAR(10),
						reviewstar VARCHAR(5),
						imageurl VARCHAR (200),
						status VARCHAR (20),
						description TEXT,
						shipping TEXT,
						userid VARCHAR(30),
						saletime VARCHAR (20),
						time VARCHAR (20),
						PRIMARY KEY ( id )
						)";
						// Execute query
						if (!mysql_query($sql,$conn)) {
									echo "Error creating table: " . mysql_error($conn);
						}
						else
						{
						if(! $conn )
						{
						  die('Could not connect:' . mysql_error());
						}
					
						$newadd = substr($add,3);
						$username = $_SESSION["username"];
						$checkstatus = mysql_query("select * from staffs where username = '$username'");
						$stat = mysql_fetch_assoc($checkstatus);
						if($stat["status"] != "admin"){
							$status = "pending";
						}
						else{
							$status = "confirmed";
						}
						$username = $_SESSION["username"];
						$sql = "INSERT INTO `items` (id, itemtitle, itemcategory, standardprice, discountprice, quantity, reviewstar, status, imageurl, description, shipping, userid, saletime, time) values ('$itemcode', '$itemtitle', '$itemcategory', '$standardprice', '$discountprice', '$quantity', '$reviewstar', '$status', '$newadd', '$description', '$shipping', '$username', '$saletime', '$time')";
						
							$retval = mysql_query($sql);
							$time++;			
							$k = $key + 1;
							// do your coding here to give a thanks message or any other thing.
							echo "<span class='data-reg'>Successfully Uploaded <br/> <img src='$add'>";
							echo $key;
							if(!$retval){
								die(mysql_error());
							}
		
							} // error for table
						}		
				
					else {echo "Failed to upload file Contact Site admin to fix the problem";}
					}
					else{echo $msg;}

           			}//for loop ends
           			if($k > 0){
						header("location: additems.php?success=$id&upload=$k");
					}
  }
	
  
  			
?>

<!DOCTYPE html>
<html>
<body>


<?php 
//echo "insert page" ; 

	echo $_POST['fname'];
	$data = array($_POST['fname'],$_POST['lname'],$_POST['uname'],$_POST['email'],$_POST['pass'],$_POST['pno'],$_POST['bd']) ;

	$user = 'root';
	$pass = '';
	$db = 'a';

	$db_connect = new mysqli('localhost',$user,$pass,$db) or die('unable to connect');

	$qry = " insert into user (First_name,Last_name,User_name,Email,Password,Phone_no,Birth_date)
				VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]')" ;
				
	$res = $db_connect->query($qry) or die('error');

	//echo "Done";


	$qry ="
				select *
				from user
				where User_name = '$data[2]'
	";

	$res = $db_connect->query($qry) or die('bad query');

	$info = $res->fetch_assoc(); 
	?>

            <div>
              <label><b>First Name</b></label>
	<?php echo $info['First_name'] ; ?> 
            </div>

            <div>
              <label><b>Last Name</b></label>
	<?php	echo $info['Last_name'] ;?> 
            </div>

            <div>
              <label><b>User Name</b></label>
	<?php	echo $info['User_name'] ;?> 
            </div>

            <div>
              <label><b>Email</b></label>
	<?php	echo $info['Email'] ;?> 
            </div>

            <div>
              <label><b>Phone Number</b></label>
	<?php echo $info['Phone_no'] ;?>
            </div>

            <div>
              <label><b>Birth Date</b></label>
	<?php echo $info['Birth_date'] ; 
   ?>
            </div>
</body>
</html>
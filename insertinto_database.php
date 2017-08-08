<?php
 // Creating a database connection

    $connection = mysqli_connect("localhost", "root", "", "subscriber_list");
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }

if(isset($_POST)){
	$Name=$_POST['name'];
	$Email=$_POST['email'];

	if(!preg_match("/[A-za-z0-9._-]{3,}@[A-za-z0-9._-]{3,}[.]{1}[A-za-z0-9._-]{2,}/",$Email)){
		echo '<script>window.open("index.html", "_self")</script>';

		 echo '<script>window.open("index.html", "_self")</script>';

	}else{

	$Query="INSERT INTO subscriber(subscriber_name, subscriber_email, whenadded) VALUES ('".$Name."','".$Email."','".date('Y-m-d H:i:s')."')";
	
	$result = mysqli_query($connection, $Query);
	
	if($result)
			{
				echo '<script>window.open("index.html", "_self")</script>';

			}
			else
			{
			echo '<h1>Address Not Added</h1>';
			}
	}
}

?>




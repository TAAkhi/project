
<?php
$connection=mysql_connect("localhost","root","");
if($connection){
	echo "Connect<br>";
	}else{
		echo "Not Connect";
		}

$select=mysql_select_db("recordinfo",$connection);
if($select){
	echo "Selected</br>";
	}else{
		echo "Not Selected";
		}
?>

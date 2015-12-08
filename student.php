<!DOCTYPE HTML>
<HTML>
<body >

<html><p>attendance</p>
<?php



 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attend_roster";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
if($email)
{
$sql = "SELECT comments FROM attendance ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo $row["comments"];
			 
     }
    
} else {
     echo "0 results";
}


}//end if
$conn->close();

?>
<br>
<a href="login.php">Back</a>
</body>
</HTML>


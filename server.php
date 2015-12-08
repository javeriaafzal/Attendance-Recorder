<!DOCTYPE HTML>
<HTML>
<body >
<?php


$email = $_GET["email"];
$pass = $_GET["pwd"];
 
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
$sql = "SELECT pwd,role FROM user where email='".$email. "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
     // output data of each row
     while($row = $result->fetch_assoc()) {
         if ($row["pwd"]== $pass)
		 {echo "User validated";}
		 //if($row["role"]== 'student')
		 //header("location:http://localhost:81/lab11/student.php");
			 
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


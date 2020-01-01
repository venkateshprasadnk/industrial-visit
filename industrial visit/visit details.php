<html>
    <body>
    <?php
// define variables and set to empty values
$nameErr = $cnameErr = $fidErr = $no_of_studentsErr = $dateErr =   "";
$name = $cname = $fid = $no_of_students = $date =   "";
$name1 = $cname1 = $fid1 = $no_of_students1 = $date1  =   "";

    ///////hospital_id start
    
    
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if (empty($_POST["cname"])) {
    $cnameErr = "cname is required";
  } else {
    $cname= test_input($_POST["cname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[ a-zA-z0-9  ]*$/",$cname)) {
      $cnameErr = "cName is in valid"; 
    }else
    	$cname1 = $_POST["cname"];
  }echo "<br>";
  ///hospital_id over
    
    
    ///blood_id start
    
if (empty($_POST["fid"])) {
    $fid = "fid is required";
  } else {
    $fid = test_input($_POST["fid"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[ a-zA-z0-9 ]*$/",$fid)) {
      $fidErr = "fid is in valid"; 
    }else
    	$fid1 = $_POST["fid"];
  }echo "<br>";

  /// blood_id over
    
    
    /// qty start
    

  if (empty($_POST["no_of_students"])) {
    $no_of_studentsErr = "no_of_students is required";
  } else {
    $no_of_students= test_input($_POST["no_of_students"]);
    // check if phone contains only contains letters
    	$no_of_students1 = $_POST["no_of_students"];
       if (!preg_match("/^[ a-zA-z ]*$/",$no_of_students)) {
      $no_of_studentsErr = "In valid no_of_students"; 
    }else
    	$no_of_students = $_POST["no_of_students"];
  }
  	echo "<br>";

    /// qty is over
if (empty($_POST["date"])) {
    $dateErr = "date is required";
  } else {
    $date= test_input($_POST["date"]);
    // check if phone contains only contains letters
    	$date1 = $_POST["date"];
       if (!preg_match("/^[ 0-9 ]*$/",$date)) {
      $dateErr = "In valid date"; 
    }else
    	$date= $_POST["date"];
  }
  	echo "<br>";





    
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

////connection

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "industrial visit";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
        echo "connected successfly";
////
$sql = "INSERT INTO visit_details
VALUES ('$cname1',$fid1,$no_of_students1,'$date1')";
if ($conn->query($sql) == TRUE) {
    include 'v vist details.html';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close()

?>
</body>
</html>

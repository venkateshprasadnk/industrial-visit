<html>
    <body>
    <?php
// define variables and set to empty values
$nameErr = $fnameErr = $fidErr = $deptErr = $phnoErr =   "";
$name = $fname = $fid = $dept = $phno =   "";
$name1 = $fname1 = $fid1 = $dept1 = $phno1 =   "";

    ///////hospital_id start
    
    
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if (empty($_POST["fname"])) {
    $fnameErr = "fname is required";
  } else {
    $fname= test_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[ a-zA-z0-9  ]*$/",$fname)) {
      $fnameErr = "fName is in valid"; 
    }else
    	$fname1 = $_POST["fname"];
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
    

  if (empty($_POST["dept"])) {
    $deptErr = "dept is required";
  } else {
    $dept= test_input($_POST["dept"]);
    // check if phone contains only contains letters
    	$dept1 = $_POST["dept"];
       if (!preg_match("/^[ a-zA-z ]*$/",$dept)) {
      $deptErr = "In valid dept"; 
    }else
    	$dept = $_POST["dept"];
  }
  	echo "<br>";

  
if (empty($_POST["phno"])) {
    $phnoErr = "year is required";
  } else {
    $phno= test_input($_POST["phno"]);
    // check if phone contains only contains letters
    	$phno1 = $_POST["phno"];
       if (!preg_match("/^[ 0-9 ]*$/",$phno)) {
      $phnoErr = "In valid phno"; 
    }else
    	$phno= $_POST["phno"];
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
$sql = "INSERT INTO faculty
VALUES ('$fname1',$fid1,'$dept1',$phno1)";
if ($conn->query($sql) == TRUE) {
    include 'v faculty.html';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close()

?>
</body>
</html>

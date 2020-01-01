<html>
    <body>
    <?php
// define variables and set to empty values
$nameErr = $nameErr = $usnErr = $branchErr = $yearErr = $phnoErr = $cname =  "";
$name = $name = $usn = $branch = $year = $phno = $cname =  "";
$name1 = $name1 = $usn1 = $branch1 = $year1  = $phno1 = $cname1 =  "";

    ///////hospital_id start
    
    
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if (empty($_POST["name"])) {
    $nameErr = "name is required";
  } else {
    $name= test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[ a-zA-z0-9  ]*$/",$name)) {
      $nameErr = "Name is in valid"; 
    }else
    	$name1 = $_POST["name"];
  }echo "<br>";
  ///hospital_id over
    
    
    ///blood_id start
    
  if (empty($_POST["usn"])) {
    $usn = "usn is required";
  } else {
    $usn = test_input($_POST["usn"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[ a-zA-z0-9 ]*$/",$usn)) {
      $usnErr = "usn is in valid"; 
    }else
    	$usn1 = $_POST["usn"];
  }echo "<br>";

  /// blood_id over
    
    
    /// qty start
    

  if (empty($_POST["branch"])) {
    $branchErr = "branch is required";
  } else {
    $branch= test_input($_POST["branch"]);
    // check if phone contains only contains letters
    	$branch1 = $_POST["branch"];
       if (!preg_match("/^[ a-zA-z ]*$/",$branch)) {
      $branchErr = "In valid branch"; 
    }else
    	$branch = $_POST["branch"];
  }
  	echo "<br>";

    /// qty is over
if (empty($_POST["year"])) {
    $yearErr = "year is required";
  } else {
    $year= test_input($_POST["year"]);
    // check if phone contains only contains letters
    	$year1 = $_POST["year"];
       if (!preg_match("/^[ 0-9 ]*$/",$year)) {
      $yearErr = "In valid year"; 
    }else
    	$year= $_POST["year"];
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
    

if (empty($_POST["cname"])) {
    $cnameErr = "company name is required";
  } else {
    $cname= test_input($_POST["cname"]);
    // check if phone contains only contains letters
    	$cname1 = $_POST["cname"];
       if (!preg_match("/^[ a-zA-z ]*$/",$cname)) {
      $cnameErr = "In valid cname"; 
    }else
    	$cname= $_POST["cname"];
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
////
$sql = "INSERT INTO student
VALUES ('$name1','$usn1','$branch1',$year1,$phno1,'$cname1')";
if ($conn->query($sql) == TRUE) {
    include 'v student.html';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close()

?>
</body>
</html>

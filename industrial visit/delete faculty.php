<?php
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

// sql to delete a record

if(isset($_GET["del_id"])){
    $d=$_GET["del_id"];
    $checkid=mysqli_query($conn,"SELECT * FROM faculty WHERE fid=$d");
    if(mysqli_num_rows($checkid)==1){
        if(mysqli_query($conn,"DELETE FROM faculty WHERE fid= $d "))
            header('Location:v faculty.php');
        else 
            echo "Error deleting record: " . $conn->error;
    }
 }
$conn->close();
?>
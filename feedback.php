<?php

$conn = mysqli_connect("localhost", "root", "", "alumniportalx");


//if connection is wrong

if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

if(isset($_POST["submit"])) {
$name =  $_POST['name'];
$subject =  $_POST['subject'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$sql = "INSERT INTO feedback  VALUES ('$name','$email','$subject','$msg')";

if(mysqli_query($conn, $sql)){
    //echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    echo '<script>alert("Feedback has been Sumbitted")
    window.location.replace("index.html");
    </script>';
} else{
    echo "ERROR: Hush! Sorry $sql. "
        .mysqli_error($conn);
}
}
mysqli_close($conn);
 
?>
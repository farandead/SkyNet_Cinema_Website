<?php 



$server = "localhost";
$username = "root";
$password = "";


$con = mysqli_connect($server,$username,$password);

if(!$con){
    die("Connection to the database failed due to".
    mysqli_connect_error());
}
    


$email = $_POST['email'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dateofbirth = $_POST['dateOfB'];
$primarycinema = $_POST['primaryCinema'];
$address = $_POST['address'];



 
$sql= "INSERT INTO `movieticketdatabse`.`user_data` (`sno`, `email`, `password`, `firstname`, `lastname`, `dateofbirth`, `primarycinema`, `address`) VALUES (NULL, '$email', '$password', '$firstname', '$lastname', '$dateofbirth', '$primarycinema', '$address');";

if($con->query($sql) == true){
    echo "<center style='padding-top:10px ; padding-bottom:10px; background-color: #044f9b;'><h5>Successfully signed in to SKYNET</h5></center>";
   include 'mainpage.php';
}
else{
    // echo "Error L: $sql <br> $con->error";
    echo "<script>alert('Please enter correct details')</script>";
    include 'signUpPage.html';
    
}
$con->close();

?>



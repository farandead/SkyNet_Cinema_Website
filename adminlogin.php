

<?php      


$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "movieticketdatabse";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  

$username = $_POST['username'];  
$password = $_POST['password'];  

    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  
    
    $sql = "SELECT email,firstname from `admin_data`  where email = '$username' and password = '$password' ";  
    $result = mysqli_query($con, $sql);  
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
   
      
    if($count == 1){  
      
        $row = mysqli_fetch_assoc($result);
       
        $_SESSION['firstname']= $row["firstname"];
      
     
     
        $_SESSION['email']= $row["email"];
        $_SESSION['password']=$row["password"];
      

        
         
       
        include "admindashboard.php"; 
        
        
    }  
    else{  
        echo "<script>alert('Incorrect Email or Password')</script>";
        include 'loginPage.html';
        
    } 
  



?> 


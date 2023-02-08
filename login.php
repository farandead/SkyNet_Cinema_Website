

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
        
        $sql = "SELECT sno,email,password,firstname,lastname,dateofbirth,primarycinema,address from `user_data`  where email = '$username' and password = '$password' ";  
        $result = mysqli_query($con, $sql);  
        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
       
          
        if($count == 1){  
          
            $row = mysqli_fetch_assoc($result);
            $_SESSION['loggedInuser']= $row["firstname"];
            $_SESSION['firstname']= $row["firstname"];
            $_SESSION['lastname']= $row["lastname"];
            $_SESSION['dateofbirth']= $row["dateofbirth"];
            $_SESSION['primarycinema']= $row["primarycinema"];
            $_SESSION['email']= $row["email"];
            $_SESSION['password']=$row["password"];
            $_SESSION['address']=  $row["address"];

            
             
           
            include "userdahboard.php"; 
            
            
        }  
        else{  
            echo "<script>alert('Incorrect Email or Password')</script>";
            include 'loginPage.html';
            
        } 
      



?> 


<?php      


    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "movieticketdatabse";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

    $movie= $_GET['movie'];  
    
   

        $movie = stripcslashes($movie);  
        
        $movie = mysqli_real_escape_string($con, $movie);  
          
        
        $sql = "SELECT `ID`, `IMG`, `MOVIENAME`, `DIRECTORS`, `CAST`, `SYNOPSIS`, `RELEASEDATE`, `CATAGORY_2`, `trailer` from `movie_data`  where ID = '$movie'";  
        $result = mysqli_query($con, $sql);  
        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
       
          
        if($count == 1){  
            
            $row = mysqli_fetch_assoc($result);
             $IMG =  $row["IMG"];
             
             $MOVIENAME=  $row["MOVIENAME"];
             $CAST=  $row["CAST"];
             
             $DIRECTORS =  $row["DIRECTORS"];
             
             $SYNOPSIS =  $row["SYNOPSIS"];
            
             $RELEASEDATE=  $row["RELEASEDATE"];
             
             
             
             $CATAGORY_2 =  $row["CATAGORY_2"];
             
             $trailer =  $row["trailer"];
            

            
            include "filmDescription.php";
             
           
        
            
        }  
        else{  
            echo "<h1> 404 NOT FOUND</h1>";  
        } 
      



?> 
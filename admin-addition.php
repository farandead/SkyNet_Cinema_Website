<?php


$host = "localhost";
$user = "root";
$password = '';
$db_name = "movieticketdatabse";

$con = mysqli_connect($host, $user, $password, $db_name);
if (mysqli_connect_errno()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}

$movie = $_POST['ID'];
$ID =       $_POST['ID'];
$IMG =      $_POST['IMG'];
$MOVIENAME = $_POST['MOVIENAME'];
$CAST =      $_POST['CAST'];
$DIRECTORS = $_POST['DIRECTORS'];
$SYNOPSIS =  $_POST['SYNOPSIS'];
$CATAGORY =  $_POST['CATAGORY'];
$TRAILER =   $_POST['TRAILER'];
$RELEASEDATE = $_POST['RELEASEDATE'];


$movie = stripcslashes($movie);

$movie = mysqli_real_escape_string($con, $movie);


$sql = "SELECT `ID`, `IMG`, `MOVIENAME`, `DIRECTORS`, `CAST`, `SYNOPSIS`, `RELEASEDATE`, `CATAGORY_2`, `trailer` from `movie_data`  where ID = '$movie'";
$result = mysqli_query($con, $sql);
// $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);


if ($count == 1) {
    $row = mysqli_fetch_assoc($result);


    echo "<center style='padding-top: 8px; padding-bottom:8px;'> The movie ID already exits </center>";
    include 'admin-movieaddition.html';
} else {

        $SQL = "INSERT INTO `movie_data` (`sno`, `ID`, `IMG`, `MOVIENAME`, `DIRECTORS`, `CAST`, `SYNOPSIS`, `RELEASEDATE`,`trailer`) VALUES (NULL, '$ID', '$IMG', '$MOVIENAME', '$DIRECTORS', '$CAST', '$SYNOPSIS', '$RELEASEDATE','$TRAILER');";

    if ($con->query($SQL) == true) {
        echo "<center style='padding-top: 8px; padding-bottom:8px;'> The movie has been successfully added</center>";
        include 'admin-movieaddition.html';
    } else {
    
        include 'admin-movieaddition.php';
    }
}

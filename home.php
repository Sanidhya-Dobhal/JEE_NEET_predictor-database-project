<?php
    session_start();
    $server ="localhost";
    $username = "root";
    $password="";
    $database ="JEE/NEET";
    $con= mysqli_connect($server,$username,$password,$database);
    if(!$con)
    {
        die("Connection failed due to :".mysqli_connect_error());
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTA_Home</title>
    <link rel ="Stylesheet" href ="home_style.css">
</head>
<body>
    <div >
        <div style ="height:0.003vh;">

        </div>
    <p style ="text-align:center; color:rgb(0, 255, 0);font-size:5vh;"><b>Successfully logged in!!</b></p>
    <?php
session_start();
$server ="localhost";
$username = "root";
$password="";
$database ="JEE/NEET";
$con= mysqli_connect($server,$username,$password,$database);
if(!$con)
{
    die("Connection failed due to :".mysqli_connect_error());
}
    $id = $_SESSION['username'];
    $sql ="SELECT f_name from Cand_reg where Reg_num = '$id'";
    $result=mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    echo "<p id ='Greet'style='text-align:center; color:rgb(255,255,255)'><b>welcome  " .$row['f_name'] ." !</b></p>";
    ?>
</div>
    <div id ="parent">
        <div id ="subject_marks">
            <a href = "sub_marks.php"><img src ="BG_marks.png" id ="photo1"></a>
            <p style="text-align:center; color:rgb(255, 255, 255);">Click here to enter/ update marks</p>
        </div>
        <div id ="result">
            <a href ="result.php"><img src = "result_bg.png" id ="photo2"></a>
            <p style="text-align:center;color:rgb(255, 255, 255);">click here to view your final result</p>
        </div>
    </div> 
</body>
</html>
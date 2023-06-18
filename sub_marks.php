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
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title style="margin:0px;">Enter your subject marks</title>
    <link rel ="stylesheet" href ="sub_marks.css">
</head>
<body>
    <div style ="width:90vw; ;margin:auto; height:16vh;">
    
    </div>
    <div id ="formcont">
        <p style ="color:white">Enter your marks subjectwise </p>
    <form action="marksgrat.php" method ="post" id ="formsub">
        <input type ="text" placeholder ="Physics" name="physics" required> 
        <div style="height:10px;">

        </div>
        <input type ="text" placeholder ="Chemistery" name="chem" required> 
        <div style="height:10px;">
            
        </div>
        <input type ="text" placeholder ="Maths/Biology" name="opsub" required maxvalue =2>
        <div style="height:10px;">
            
        </div> 
        <input type="submit" name="Submit" style ="background-color:blue;color:white; height:6vh";>
        <div style="height:20px;">
        </div>

    </form>
</div>
<div id='note'> 
    <p><b>Note: </b>Your marks will be updated only if the total is higher than all the previous totals</p>
</div>
</body>
</html>
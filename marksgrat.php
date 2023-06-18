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
$phy =$_POST['physics'];
$chem =$_POST['chem'];
$opsub =$_POST['opsub'];
$reg =$_SESSION['username'];
$total = $phy+$chem+$opsub;
$sql ="SELECT Exam from Cand_reg where Reg_num = '$reg';";
$result = mysqli_query($con,$sql);
$exam = mysqli_fetch_assoc($result);
if($exam['Exam'] =="JEE")
{
    $sql ="SELECT Count(Reg_num) from JEE_marks where Reg_num = '$reg';" ;
    $result = mysqli_query($con,$sql);
    $num = mysqli_fetch_assoc($result);
    if($num['Count(Reg_num)']==0)
    {
    $sql2 = "INSERT INTO JEE_marks VALUES('$phy','$chem','$opsub','$total','$reg');";
    $result = mysqli_query($con,$sql2);
    echo"
        <div style ='width:90vw; ;margin:auto; height:16vh;'>
    </div>
    <div id ='formcont'>
        <p style ='color:white ;text-align:center;line-height:200%;'>Your marks have been successfully stored</p>
        <a href ='home2.php' style ='color: #40BDFC;'>Home page</a>
        <div style ='height:2vh;'>
    </div>
</div>";
    }
    else
    {
        $sql = "SELECT Total from JEE_marks where Reg_num ='$reg';";
        $result =mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);
        $tot = $row['Total'];
        if($total>$tot)
        {
        $sql = "UPDATE JEE_marks SET Physics ='$phy',Chem='$chem',Maths='$opsub',Total = '$total' WHERE Reg_num = '$reg';";
        $result = mysqli_query($con,$sql);
        echo"
        <div style ='width:90vw; ;margin:auto; height:16vh;'>
    </div>
    <div id ='formcont'>
        <p style ='color:white ;text-align:center;line-height:200%;'>Your marks have been successfully updated</p>
        <a href ='home2.php' style ='color: #40BDFC;'>Home page</a>
        <div style ='height:2vh;'>
    </div>
</div>";
        }
        else
        {
            echo"
        <div style ='width:90vw; ;margin:auto; height:16vh;'>
    </div>
    <div id ='formcont'>
        <p style ='color:white ;text-align:center;line-height:200%;'>Some of your previous attempts have a higher or an equal total and your highest total will be considered for the final result</p>
        <a href ='home2.php' style ='color: #40BDFC;'>Home page</a>
        <div style ='height:2vh;'>
    </div>
</div>";
        }
    }
}
else{
    $sql ="SELECT Count(Reg_num) from NEET_marks where Reg_num = '$reg';" ;
    $result = mysqli_query($con,$sql);
    $num = mysqli_fetch_assoc($result);
    if($num['Count(Reg_num)']==0)
    {
    $sql2 = "INSERT INTO NEET_marks VALUES('$reg','$phy','$chem','$opsub','$total');";
    $result = mysqli_query($con,$sql2);
    echo"
    <div style ='width:90vw; ;margin:auto; height:16vh;'>
</div>
<div id ='formcont'>
    <p style ='color:white ;text-align:center;line-height:200%;'>Your marks have been successfully stored</p>
    <a href ='home2.php' style ='color: #40BDFC;'>Home page</a>
    <div style ='height:2vh;'>
</div>
</div>";
    }
    else
    {
        $sql = "SELECT Total from NEET_marks where Reg_num ='$reg';";
        $result =mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);
        $tot = $row['Total'];
        if($total>$tot)
        {
        $sql = "UPDATE NEET_marks SET Physics ='$phy',Chemistery='$chem',Biology='$opsub',Total = '$total' WHERE Reg_num = '$reg';";
        $result = mysqli_query($con,$sql);
        echo"
        <div style ='width:90vw; ;margin:auto; height:16vh;'>
    </div>
    <div id ='formcont'>
        <p style ='color:white ;text-align:center;line-height:200%'>Your marks have been successfully updated</p>
        <a href ='home2.php' style ='color: #40BDFC;'>Home page</a>
        <div style ='height:2vh;'>
    </div>
</div>";
        }
        else{
            echo"
            <div style ='width:90vw; ;margin:auto; height:16vh;'>
        </div>
        <div id ='formcont'>
            <p style ='color:white ;text-align:center;line-height:200%;'>Some of your previous attempts have a higher or an equal total and your highest total will be considered for the final result</p>
            <a href ='home2.php' style ='color: #40BDFC;'>Home page</a>
            <div style ='height:2vh;'>
        </div>
    </div>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href ="marksgrat.css">
    <title>Marks entered!</title>
</head>
<body>
</body>
</html>
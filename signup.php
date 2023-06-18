<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "JEE/NEET";
    $con = mysqli_connect($server,$username,$password,$database);
    if(!$con)
        echo"Unsuccessful".mysql_connect_error();
    $f_name =$_POST['f_name'];
    $m_name =$_POST['m_name'];
    $l_name =$_POST['l_name'];
    $mail = $_POST['mail'];
    $pass =$_POST['pass'];
    $dob =$_POST['dob'];
    $gender =$_POST['gender'];
    $state =$_POST['state'];
    $phone =$_POST['phone'];
    $exam =$_POST['exam'];
    $sql = "INSERT INTO Cand_reg(f_name,m_name,l_name,mail,password,Dob,Gender,State,Phone_num,Exam) VALUES ('$f_name','$m_name','$l_name','$mail','$pass','$dob','$gender','$state','$phone','$exam');";

    if($con->query($sql)== true)
    {
        echo "
        <div id='cont'><p style='text-align:center; color:rgb(0,98,139);font-size:30px;'>Registration done successfully !</p>";
        echo "<br>";
        $sqls ="SELECT max(Reg_num) from Cand_reg;";
        $result = mysqli_query($con,$sqls);
        $row = mysqli_fetch_assoc($result);
        echo "<p style = 'color:rgb(0,98,139);text-align:center;font-size:21px;'>your registration number is <b>".$row['max(Reg_num)']."</b></p>";
        echo "<br>";
        echo "<a href='index.html' style='display:block;text-align:center;color:#e600ff;font-size:21px;position:relative;top:30px;'>Click here to go back to Login page</a>
        <div style ='height:100px;'>
        </div> </div>" ;
    }
    else{
        echo"Unsuccessful";
    }
    $con->close();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account created successfully!</title>


<style>  
body
{
    background-image:url(cover.png);
    background-repeat:inherit;
    background-size: cover;
    height: 100vh;
    z-index:-1;
}
#cont{
    width:430px;
    background-color:rgba(255, 255, 255, 0.8);
    border:8px inset;
    border-radius: 20px;
    text-align:center;
    position:relative;
    margin-left:auto;
    margin-right:auto;
    animation-name:reload;
    animation-duration:1s;
    animation-timing-function:ease-in-out;
    height:300px;
    top:24.5vh;
}
@keyframes reload
{
    from{opacity:0;}
    to{opacity:1;}
}
@media screen and (max-width: 470px)
{
    #cont{
        width:320px;
    }
}
</style>
</head>
<body>
    
</body>
</html>
<?php
    $server ="localhost";
    $username = "root";
    $password="";
    $database ="JEE/NEET";
    $con= mysqli_connect($server,$username,$password,$database);
    if(!$con)
    {
        die("Connection failed due to :".mysqli_connect_error());
    }
    $reg_no =$_POST['reg_no'];
    $pass =$_POST['pass'];
    $sql ="SELECT * from Cand_reg where Reg_num ='$reg_no' AND password = '$pass';";
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);//counts the number of rows
    if($num == 1)
    {
        echo "Success logging in";
        session_start(); 
        $_SESSION['loggedin']=true;
        $_SESSION['username']=$reg_no;
        header("location: home.php");
    }
    else
    {
        echo "<div id ='form_cont2'>
        <h1 style='text-align:center;'>Log-in</h1>
        <p style ='color:#d93025;'><b>Incorrect credentials, please try again</b></p>
            <div style='height:0.5vh'>
                <p> </p>
            </div>
    <form action = 'index.php' method='post'>
        <input type ='text' id='reg_no'placeholder = 'Registration number' name ='reg_no' required>
        <div style='height:4vh'>
        <p> </p>
    </div>
        <input type ='password' id='pass'placeholder = 'Password' name='pass' required>
        <div style='height:2vh ;text-align:start;'>
            <p> </p>
        </div>
        <input type ='submit' id = 'sub'>
    </form>
    <div style = 'height:25px;'>
</div>
<div>
    <a href ='signup.html' style = 'font-size:15px;color:blue; '>Click here for new registration</a>
</div>
    </div>";
    }
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href ="style.css"/>
</head>
<body>
</body>
</html>

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
    $sq = "SELECT Exam from Cand_reg where Reg_num = '$id'";
    $r = mysqli_query($con,$sq);
    $roo = mysqli_fetch_assoc($r);
    $Exam =$roo['Exam'];
    echo "<div style ='height:20px'>
            </div>";
    //For JEE Students
    if($Exam =="JEE")
    {
    $sql = "Select count(Reg_num) from JEE_marks where Reg_num='$id';";
    $run = mysqli_query($con,$sql);
    $r= mysqli_fetch_assoc($run);
    $nul = $r['count(Reg_num)'];
    if($nul==0)
    {
        echo"<p style ='text-align:center; color:darkred;' class ='quali'>OOPS !! You have not entered your marks</p>";
        echo"<div style = 'position:relative;background-color:darkred;margin-left:auto;margin-right:auto;opacity:0;' id ='line'>
        </div>";
    }
    else{
    $tot_query = "SELECT total from JEE_marks where Reg_num ='$id';"; 
    $res_tot = mysqli_query($con,$tot_query);
    $row = mysqli_fetch_assoc($res_tot);
    $total = $row['total'];
    $sql ="SELECT COUNT(Reg_num) from JEE_marks where total >'$total'; ";
    $res =  mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($res);
    $rank=$row['COUNT(Reg_num)'];//In this code $rank is used to store  rank-1
    $sql2 ="SELECT COUNT(Reg_num) from JEE_marks;";
    $resul =  mysqli_query($con,$sql2);
    $row2 = mysqli_fetch_assoc($resul);
    $tot_cand = $row2['COUNT(Reg_num)'];
    $percentile = (1-($rank/$tot_cand))*100;
    if($percentile<90)
    {
        echo "<p class = 'quali' style ='text-align:center;color:#ab1111;'><b>Sorry, you will not likely qualify JEE</b></p>";
    }
    else
    {
<<<<<<< HEAD
        echo "<p class = 'quali' style ='text-align:center;color:rgb(0,255,0);'><b>Congratulations!! You will likely qualified JEE</b></p>";
=======
        echo "<p class = 'quali' style ='text-align:center;color:rgb(0,255,0);'><b>Congratulations!! You will likely qualify JEE</b></p>";
>>>>>>> origin/master
    }
    echo "<p class  ='percentile'>Your percentile is <b>".$percentile."</b></p>";
    $sql ="SELECT * from JEE_marks where reg_num ='$id';";
    $result =mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $cand_phy=$row['Physics'];
    $cand_chem =$row['Chem'];
    $cand_maths =$row['Maths'];
    $phyranksql ="SELECT count(Physics) from JEE_marks where Physics>'$cand_phy';";
    $resultp = mysqli_query($con,$phyranksql);
    $rowp = mysqli_fetch_assoc($resultp);
    $phyrank=$rowp['count(Physics)'];
    $phy_per = (1-($phyrank/$tot_cand))*100;
    $chemranksql ="SELECT count(Chem) from JEE_marks where Chem>'$cand_chem';";
    $resultc = mysqli_query($con,$chemranksql);
    $rowc = mysqli_fetch_assoc($resultc);
    $chemrank=$rowc['count(Chem)'];
    $chem_per = (1-($chemrank/$tot_cand))*100;
    $mathsranksql ="SELECT count(Maths) from JEE_marks where Maths>'$cand_maths';";
    $resultm = mysqli_query($con,$mathsranksql);
    $rowm = mysqli_fetch_assoc($resultm);
    $mathsrank=$rowm['count(Maths)'];
    $maths_per = (1-($mathsrank/$tot_cand))*100;
    echo"<table style = 'opacity:1; background-color:rgba(0,0,0,0.3);margin-left:auto;margin-right:auto;color:white;border:4px solid black' cellspacing=0px id='tab'>
    <tbody>
        <tr>
            <th style='border:2px solid black; width:20vw;height:50px;'><b><u>Subject</u></b></th>
            <th style='border:2px solid black; width:20vw;height:50px;'><b><u>Percentile</u></b></th>
        </tr>
        <tr>
            <td style='border:2px solid black; width:20vw;text-align:center;height:50px;'>Physics</td>
            <td style='border:2px solid black; width:20vw;text-align:center;height:50px;'>$phy_per</td>
            </tr>
            <tr>
            <td style='border:2px solid black; width:20vw;text-align:center;height:50px;'>Chemistery</td>
            <td style='border:2px solid black; width:20vw;text-align:center;height:50px;'>$chem_per</td>
            </tr>
            <tr>
            <td style='border:2px solid black; width:20vw;text-align:center;height:50px;'>Maths</td>
            <td style='border:2px solid black; width:20vw;text-align:center;height:50px;'>$maths_per</td>
            </tr>
            <tr>
            <td style='border:2px solid black; width:20vw;text-align:center;height:50px;'>Total</td>
            <td style='border:2px solid black; width:20vw;text-align:center;height:50px;'>$percentile</td>
            </tr>
        </tbody>
    </table>";
    }
}

else{
    $sql = "Select count(Reg_num) from NEET_marks where Reg_num='$id';";
    $run = mysqli_query($con,$sql);
    $r= mysqli_fetch_assoc($run);
    $nul = $r['count(Reg_num)'];
    if($nul==0)
    {
        echo"<p style ='text-align:center; color:darkred;' class ='quali'>OOPS !! You have not entered your marks</p>";
        echo"<div style = 'position:relative;background-color:darkred;margin-left:auto;margin-right:auto;opacity:0;' id ='line'>
        </div>";
    }
    else{
    $tot_query = "SELECT total from NEET_marks where Reg_num ='$id';"; 
    $res_tot = mysqli_query($con,$tot_query);
    $row = mysqli_fetch_assoc($res_tot);
    $total = $row['total'];
    $sql ="SELECT COUNT(Reg_num) from NEET_marks where total >'$total'; ";
    $res =  mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($res);
    $rank=$row['COUNT(Reg_num)'];
    $sql2 ="SELECT COUNT(Reg_num) from NEET_marks;";
    $resul =  mysqli_query($con,$sql2);
    $row2 = mysqli_fetch_assoc($resul);
    $tot_cand = $row2['COUNT(Reg_num)'];
    $percentile = (1-($rank/$tot_cand))*100;
    if($percentile<50)
    {
        echo "<p class ='quali' style ='text-align:center;color:#ab1111;'><b>Sorry, you will not likely qualify NEET</b></p>";
    }
    else
    {
        echo "<p class ='quali' style ='text-align:center;color:rgb(0,255,0);'><b>Congratulations!! You will likely qualify NEET</b></p>";
    }
    echo "<p class  ='percentile'>Your percentile is <b>".$percentile."</b></p>";
    $sql ="SELECT * from NEET_marks where reg_num ='$id';";
    $result =mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $cand_phy=$row['Physics'];
    $cand_chem =$row['Chemistery'];
    $cand_bio =$row['Biology'];
    $phyranksql ="SELECT count(Physics) from NEET_marks where Physics>'$cand_phy';";
    $resultp = mysqli_query($con,$phyranksql);
    $rowp = mysqli_fetch_assoc($resultp);
    $phyrank=$rowp['count(Physics)'];
    $phy_per = (1-($phyrank/$tot_cand))*100;
    $chemranksql ="SELECT count(Chemistery) from NEET_marks where Chemistery>'$cand_chem';";
    $resultc = mysqli_query($con,$chemranksql);
    $rowc = mysqli_fetch_assoc($resultc);
    $chemrank=$rowc['count(Chemistery)'];
    $chem_per = (1-($chemrank/$tot_cand))*100;
    $bioranksql ="SELECT count(Biology) from NEET_marks where Biology>'$cand_bio';";
    $resultb = mysqli_query($con,$bioranksql);
    $rowb = mysqli_fetch_assoc($resultb);
    $biorank=$rowb['count(Biology)'];
    $bio_per = (1-($biorank/$tot_cand))*100;
    echo"<table style = 'opacity:1; background-color:rgba(0,0,0,0.3);margin-left:auto;margin-right:auto;color:white;border:4px solid black' cellspacing=0px id='tab'>
    <tbody>
        <tr>
            <th style='border:2px solid black; width:20vw;height:50px;'><b><u>Subject</u></b></th>
            <th style='border:2px solid black; width:20vw;height:50px;'><b><u>Percentile</u></b></th>
        </tr>
        <tr>
            <td style='border:2px solid black; width:20vw;text-align:center;height:50px;'>Physics</td>
            <td style='border:2px solid black; width:20vw;text-align:center;height:50px;'>$phy_per</td>
            </tr>
            <tr>
            <td style='border:2px solid black; width:20vw;text-align:center;height:50px;'>Chemistery</td>
            <td style='border:2px solid black; width:20vw;text-align:center;height:50px;'>$chem_per</td>
            </tr>
            <tr>
            <td style='border:2px solid black; width:20vw;text-align:center;height:50px;'>Biology</td>
            <td style='border:2px solid black; width:20vw;text-align:center;height:50px;'>$bio_per</td>
            </tr>
            <tr>
            <td style='border:2px solid black; width:20vw;text-align:center;height:50px;'>Total</td>
            <td style='border:2px solid black; width:20vw;text-align:center;height:50px;'>$percentile</td>
            </tr>
        </tbody>
    </table>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel ="stylesheet" href ="result.css">
</head>
<body>
    <div style = "height:4.5vh;">
    </div>
    <a href ="home2.php" id = 'reslink'>Click here to go back to the home page</a>
</body>
</html>

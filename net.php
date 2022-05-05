
<?php 
session_start();
include("connection.php");
if(isset($_POST['add'])){
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    $q5 = $_POST['q5'];
    $avg = ($q1 + $q2 + $q3 + $q4 + $q5 ) / 5;
    
    $code = $_SESSION['code'];
    $ins_query="INSERT into feedback1 values('$code','3','3','$avg')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    header('location:cslist.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="fform1.css"> 
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>    
    <title>Networking</title> 

</head>  
<style>
    a,input 
{
    color: white; 
    border: none; 
    text-decoration: none;
    background-color: #f05462; 
    cursor: pointer;
} 
h2{
    color: red; 
    text-align: center;
}
</style>

<body>  
<h2  id="g"></h2>
    <form method="POST" id="MYFORM"name="myform">
        <h3>(م.زانکو طھا)(Network Fundamental) ھەڵسەنگاندن بو </h3>
        <div class="wrapper"> 
     <br> 
        1-لە دەستپێكی خوێندنی بابەتەكەدا، مامۆستا كۆرسبووكی بابەتەكەی پێتان دا و پلانی خوێندنی بابەتەكەی لە هەفتەكانی ساڵی خوێندندا ڕوونكردەوە؟
        <br /> 
        <input type="radio"class="r1"  name="q1" value="1" id="1" required/>1
        <input type="radio"class="r1"  name="q1" value="2" id="1" />2
        <input type="radio"class="r1"  name="q1" value="3" id="1" />3
        <input type="radio"class="r1"  name="q1" value="4" id="1" />4
        <input type="radio"class="r1"  name="q1" value="5" id="1" />5
        <input type="radio"class="r1"  name="q1" value="6" id="1" />6
        <input type="radio"class="r1"  name="q1" value="7" id="1" />7
        <input type="radio"class="r1"  name="q1" value="8" id="1" />8
        <input type="radio"class="r1"  name="q1" value="9" id="1" />9
        <input type="radio"class="r1"  name="q1" value="10"id="1" />10
        <br>
        <br >   <br>   <br>
        2- تاچەند مامۆستا پابەندبووە بە پەیڕەوكردنی ناوەرۆکی بابەتەکەی بەوشێوەیەی، کە لە هەفتەكانی خوێندنی بابەتەكەو سلیبەسی كۆرسبووكی بابەتەكەیدا هەیە؟
        <br />
        <input type="radio"class="r1"  name="q2" value="1" id="2" required/>1
        <input type="radio"class="r1"  name="q2" value="2" id="2"/>2
        <input type="radio"class="r1"  name="q2" value="3" id="2"/>3
        <input type="radio"class="r1"  name="q2" value="4" id="2"/>4
        <input type="radio"class="r1"  name="q2" value="5" id="2"/>5
        <input type="radio"class="r1"  name="q2" value="6" id="2"/>6
        <input type="radio"class="r1"  name="q2" value="7" id="2"/>7
        <input type="radio"class="r1"  name="q2" value="8" id="2"/>8
        <input type="radio"class="r1"  name="q2" value="9" id="2"/>9
        <input type="radio"class="r1"  name="q2" value="10" id="2"/>10
        <br />
        <br>   <br>   <br>
        3-مامۆستای بابەت جگە لەكاتی وانەكان، تا چەند هاوكارو یارمەتیدەری قوتابی دەكرد لە دەرەوەی هۆڵی خوێندن؟
        <br />
        <input type="radio"class="r1"  name="q3" value="1" id="3" required/>1
        <input type="radio"class="r1"  name="q3" value="2" id="3"/>2
        <input type="radio"class="r1"  name="q3" value="3" id="3"/>3
        <input type="radio"class="r1"  name="q3" value="4" id="3"/>4
        <input type="radio"class="r1"  name="q3" value="5" id="3"/>5
        <input type="radio"class="r1"  name="q3" value="6" id="3"/>6
        <input type="radio"class="r1"  name="q3" value="7" id="3"/>7
        <input type="radio"class="r1"  name="q3" value="8" id="3"/>8
        <input type="radio"class="r1"  name="q3" value="9" id="3"/>9
        <input type="radio"class="r1"  name="q3" value="10"id="3" />10
        <br />
        <br>   <br>   <br>
        4-لە كاتی وانە وتنەوەدا مامۆستا هەوڵی دا بنەما و ناوەڕۆك و خاڵە گرنگەكانی بابەتەكە بە ڕوونی و بەسادەیی شیبكاتەوە؟
        <br />
        <input type="radio"class="r1"  name="q4" value="1" id="4" required/>1
        <input type="radio"class="r1"  name="q4" value="2" id="4"/>2
        <input type="radio"class="r1"  name="q4" value="3" id="4"/>3
        <input type="radio"class="r1"  name="q4" value="4" id="4"/>4
        <input type="radio"class="r1"  name="q4" value="5" id="4"/>5
        <input type="radio"class="r1"  name="q4" value="6" id="4"/>6
        <input type="radio"class="r1"  name="q4" value="7" id="4"/>7
        <input type="radio"class="r1"  name="q4" value="8" id="4"/>8
        <input type="radio"class="r1"  name="q4" value="9" id="4"/>9
        <input type="radio"class="r1"  name="q4" value="10" id="4"/>10
        <br />
        <br>   <br>   <br>
        5-شێوازی هەڵسەنگاندن و پرسیارەكانی تاقیكردنەوەی لەبارو گونجاو بوون؟ واتە لە ئاستی ڕوونكردنەوەو شرۆڤەی بابەتەكانی ناو هۆڵی خوێندن بوون؟
        <br />
        <input type="radio"class="r1"  name="q5" value="1" id="5" required/>1
        <input type="radio"class="r1"  name="q5" value="2" id="5"/>2
        <input type="radio"class="r1"  name="q5" value="3" id="5"/>3
        <input type="radio"class="r1"  name="q5" value="4" id="5"/>4
        <input type="radio"class="r1"  name="q5" value="5" id="5"/>5
        <input type="radio"class="r1"  name="q5" value="6" id="5"/>6
        <input type="radio"class="r1"  name="q5" value="7" id="5"/>7
        <input type="radio"class="r1"  name="q5" value="8" id="5"/>8
        <input type="radio"class="r1"  name="q5" value="9" id="5"/>9
        <input type="radio"class="r1"  name="q5" value="10" id="5"/>10
     
        <br>   <br>   <br>
        <br>
       <br>

       <a href="cslist.php"><input type="submit" onclick="check()" id="add" name="add" value="Next"></a>
            <br>
            <br>
</div>
      

   
       
</form> 
    <script> 

    
  function check()
    {    var ele = document.getElementsByClassName('r1');
    for(i = 0; i < ele.length; i++) { 
                if(ele[i].checked) { 
                if(ele[i].value==1||ele[i].value==10){
document.getElementById('g').innerHTML=" dear student you can not take 1 or 10  for all question";  
ele[i].checked = false;

                }}
               
     }
    }
  

 

    </script>
</body>
</html>

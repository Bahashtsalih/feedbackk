<!DOCTYPE html>
<!-- saved from url=(0037)file:///C:/Users/Dc/Downloads/cs.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
  <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');



body {
    background: #ecf0f3
}

.p2{
    font-size: 25px;
    font-weight: 600;
    text-align: center;
    margin: 9% 0 1%;
    color: #000000;
    
}

.r{
    color: rgb(37, 37, 37);
    background-color:#ecf0f3;
    text-decoration: none;
    font-size: 23px;
    font-weight: 600;
    transition: 0.5s;
    position: relative;
    top: 55px;
    left: 30px;
    line-height: 50px;
    text-transform: capitalize;
}
.r:hover{
   color: #ee2a41;
   font-size: 24px;

}
.sp{
    text-transform: capitalize;
    color: #ee2a41;
   position: absolute;
   line-height: 50px;
   top: 148px;
   right: 30px;
   font-size: 18px;
    font-weight: 600;
   
}

.wrapper {
    max-width: 600px;
    height: 550px;
    position: relative;
    top: 50px;
    margin: 20px auto;
    padding: 5px 30px 20px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;
    box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;

}



.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none; 
    margin-top: 40px;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff ;
    
}


@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px
    }
} 

h3
{
    color: #f05264; 
    font-size: 30px; 
    text-align: center;
    padding-top: 60px;
}  



  </style>
</head>
<body> 




    
   
 <?php
    session_start();
    require_once("connection.php");
   $sel_query="SELECT * From student WHERE S_name =  '$_SESSION[name]' ";

   $result = mysqli_query($con,$sel_query);
   while($row = mysqli_fetch_assoc($result)) { ?>

   <h3> Welcome  <?php echo $row["S_name"]; ?> </h3>

   <?php } ?>
    <div class="wrapper">  
       
        <p class="p2">Please select a Lecture then give your feedback </p> 
     
        <a href="biochemst.html" class="r"> 1. Biochemistry.</a>  <br>
        <a href="histology.html" class="r"> 2. Human Histology. </a>  <br>
         <a href="micro.html" class="r"> 3. Microbiology. </a> <br> 
         <a href="rezan.html" class="r"> 4.Medical Parasitology.</a>   <br>
         <a href="bio.html" class="r">  5. Cell Biology.</a>  <br>
         <a href="anatomy.html" class="r">  6. Human Anatomy.</a> <br>
                            
         <div class="sp">
            <span>( Amanj Muhammad)</span> <br>
            <span>( Dr.Lana Sami )</span> <br>
            <span>( Dr.Pakhshan Mahmoud  )</span> <br>  
            <span>( Rezan Zyad)</span> <br>
            <span>( Khidir Muhsen )</span> <br>
            <span>( Dr.Zana Majeed )</span> <br>
         </div>
    

       
    </div>    




</body></html>
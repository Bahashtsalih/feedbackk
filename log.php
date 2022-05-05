
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title> 

    <style>
    



    body {
        background: #ecf0f3;
    }
    
    .wrapper {
        max-width: 350px;
        min-height: 450px;
        margin: 30px auto;
        padding: 10px 30px 30px 30px;
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
    
    .wrapper .form-field .fas {
        color: #555
    }
    
    .wrapper .btn { 
         margin-top: 30px;
        box-shadow: none;
        width: 100%;
        height: 40px; 
        border: none; 
        font-size: 20px;
        background-color: #f05264;
        color: #fff;
        border-radius: 25px;
        box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
        letter-spacing: 1.3px;
    }
    
    .wrapper .btn:hover {
        background-color: #f33e53
    }
    
    .wrapper a {  
    
        text-decoration: none;
        font-size: 20px;
        color: #f05264;
    }
    
    .wrapper a:hover {
        color: #ee2a41; 
        
    }
    
    @media(max-width: 380px) {
        .wrapper {
            margin: 30px 20px;
            padding: 40px 15px 15px 15px
        }
    } 
    h1 
    {
        color: #f05264; 
        text-align: center;
    }
    h3
    {
        color: #f05264; 
        font-size: 30px; 
      text-align: center;
    } 
    #eye 
    {
        font-size: 10px; 
        color: #ee2a41; 
    
    }
    input[type="checkbox"],#sp
    {
        cursor: pointer; 
        color: #666;
    }
    
    </style>

</head> 

<body> 
    <h1>Student Feedback System</h1>
    <div class="wrapper"> 
        <h3>Welcome To Login</h3> 
     
        <form method = "POST" class="p-3 mt-3" autocomplete="on">
      
     
               <?php      
               session_start();
            require_once("connection.php");
            if(isset($_POST['Login'])) {
            $username = mysqli_real_escape_string($con, htmlspecialchars(trim($_POST['user'])));
            $password = mysqli_real_escape_string($con, htmlspecialchars(trim($_POST['pass'])));  
          
            $result = mysqli_query($con, "SELECT * FROM `student` WHERE `S_code` = '$username' AND `S_password` = '$password'");  
        
            while($row = mysqli_fetch_assoc($result)) { 
                                    
                $_SESSION['code'] = $row['S_code'];
                $_SESSION['name'] = $row['S_name'];
  
                }

            if(mysqli_num_rows($result) > 0) { 
                $cs='sscs3';
                if (strpos($username, $cs) !== false) {
                    header("Location:cslist.php");
                }
                else{
                    header("Location:biolist.php");
                }
            } else{  
                echo '<script>alert("Wrong username or password.")</script>'; 
            }


        }
        ?>  
        
            <div class="form-field d-flex align-items-center">
                <input type="text" name="user" id="user" placeholder="Username" required> 
            </div>
            <div class="form-field d-flex align-items-center"> 
                <input type="password" name="pass" id="pass" placeholder="Password" required> 
            </div>
                <input type="checkbox" name="show password" id="show" onclick="passshow()" >
               <label id="sp" for="show">Show Password</label> 
               <input type="submit" value="Login" name="Login" class="btn mt-3" id="btn">


        </form>
        <div class="text-center fs-6"  style="text-align: center;">  <br>
            <a href="#" >Forget password ?</a></div>
    </div>    
    <script >  

   function passshow()
   {
       s=document.getElementById("pass");
    if(document.getElementById('show').checked&& s.type=="password")    
    {  
        s.type="text"; 
    } 
    else{
        s.type="password";
    }

   }
        </script>  

 
</body>
</html>
<?php

 $isLogin = false;
 $isPassword = false;
        if(CheckLogin($_POST['username']) == true)
        {
               echo "We already have that username, please write another";
        }
        else
       {
          $isLogin = true;
       }
        if(strcmp($_POST['password'], $_POST['repassword']) == 0)
        {
             $isPassword = true;
            echo "Passwords are the same"; 
        }
        else
        {
            echo "Passwords are not the same"; 
        }

        if($isLogin == true && $isPassword == true)
        {
            NewUser($_POST['username'], $_POST['password']);
        }
            
?>
   
    <html>
   <title>

   </title>
   <head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
       

       
       
   </head>
    <body>
       <form action="" method="post">
        <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">UserName:</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="username">
</div>

<div class="input-group">
  <input type="text" class="form-control" placeholder="Login" aria-describedby="basic-addon2"
  name="mail">
  <span class="input-group-addon" id="basic-addon2" >@gmail.com</span>
</div>

<div class="input-group">
  <span class="input-group-addon">Password :</span>
  <input type="text" class="form-control" placeholder="********" aria-label="Amount (to the nearest dollar)" name="password">
  <span class="input-group-addon">need more then 6 symbols</span>
</div>
        
        <div class="input-group">
  <span class="input-group-addon">Password Again :</span>
  <input type="text" class="form-control" placeholder="********" aria-label="Amount (to the nearest dollar)" name="repassword">
    
</div>
     <button type="submit">
       Registr
        
     </button>
     </form>
      </body>
</html>
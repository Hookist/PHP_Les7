
<?php
  //$curUser = $_COOKIE['user'];
  //$_POST['username'] = $curUser['username'];
  //$_POST['password'] = $curUser['password'];

 include("function.php");

    //CheckLogin("stas");
   require('pages.php');


$isEst = false;


    if(CheckUser($_POST['username'], $_POST['password']) == true)
      {
        echo "zachlo!";
        $isEst = true;
      }
    else
    {
        echo "zachlo v else!";
    }
 

      
       
   if($isEst)
   {
       echo "Est Takoy";
 
       $title = $mainPage['name'];
       echo $title;
            $link = $mainPage['link'];
       
           $user = array(
        "username" => $_POST['username'],
        "password" => $_POST['password']
        
        );
    
    
   }
    else
    {
        $title = $loginPage['name'];
       echo $title;
            $link = $loginPage['link'];
        include("login.php");
        echo "Net Takogo";
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
  <span class="input-group-addon">Password :</span>
  <input type="text" class="form-control" placeholder="********" aria-label="Amount (to the nearest dollar)" name="password">
  <span class="input-group-addon">need more then 6 symbols</span>
</div>

     <button type="submit">
       AUTORIZE
        
     </button>
            <title>
 
   </title>
             <div id="title">
             <h1>
                 <?=$title?> 
             </h1>
            
           
                 
         </div>
     </form>
        

        
      </body>
</html>
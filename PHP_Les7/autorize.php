<?php
  //$curUser = $_COOKIE['user'];
  //$_POST['username'] = $curUser['username'];
  //$_POST['password'] = $curUser['password'];

 include("function.php");

    //CheckLogin("stas");
   require('pages.php');

    
    $pageid = isset($_GET['id'])?$_GET['id']:0;
    echo "pageid = $pageid" . "<br>";
    $id = isset($_GET['id'])?$_GET['id']:0;
    $page = getPageById($id);
    $menu = getMenu();

$isEst = false;

 session_start();

    if(CheckUser(isset($_POST['username'])?$_POST['username']:null,
                 isset($_POST['password'])?$_POST['password']:null) == true)
      {
        echo "zachlo!";
        $isEst = true;
       
        $_SESSION['isAutorized'] = 0;
        //header("Location: http://127.0.0.1:8080/PHP_Les7/mainform.php");
      }
    else
    {
        echo "zachlo v else!";
    }
 

      
       
   if($isEst)
   {
       echo "Est Takoy";
      //session_start();
       if($_SESSION['isAutorized'] != 1)
       {
           include "login.php";
           die();
       }
//header("Location: http://127.0.0.1:8080/PHP_Les7/mainform.php");
       
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
       

        <link href="mystylesheet.css" rel="stylesheet">
       
   </head>
            
            
    <body>
    
      <div class = "container">
	<div class="wrapper">  
        
       <form action="" method="post" name="Login_Form" class="form-signin">
            <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
            <hr class="colorgraph"/><br>
        <div class="input-group">
  
  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="username" required="" autofocus="">
</div>



<div class="input-group">
  <input type="password" class="form-control" placeholder="Password" aria-label="Amount (to the nearest dollar)" name="password" required="">

</div>

     <button class="btn btn-lg btn-primary btn-block" type="submit" name="Submit">
       AUTORIZE
        
     </button>
            <title>
 
   </title>
             <div id="title">
             <h1>
                 <?=$title?> 
             </h1>
              <div id = "menu">
            <?php
            echo "menu : " . var_dump($menu);
           
                foreach($menu as $m):?>
            <li>
                <a href="/index.php?id="<?  if($menu != null) echo $m['id']?>>
                <? if($menu != null) echo $m['name']?> 
                </a>
            </li>
            <?php endforeach; ?>
            </div>
            <div id='content'>
                <?php
                    if($id == 0): ?>
                   
                    
                <?php 
                    else:
                        include"pages/" . $page['link'];
                    
                    endif;
                    ?>
            </div> 
         </div>
     </form>
          </div>
        </div>

        
      </body>
</html>
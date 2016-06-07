<?php

 include($_SERVER['DOCUMENT_ROOT'] . "/PHP_Les7/function.php");
//   header("content-type: image/jpeg");
   $remoteImage = $_SERVER['DOCUMENT_ROOT'] . "/PHP_Les7/images/MXy17PsqleQ.jpg";
   $imginfo = getimagesize($remoteImage);
   //header("Content-type: {$imginfo['mime']}");
   //readfile($remoteImage);
    session_start();
    
$posts = getPosts();
    
  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
      switch($_POST['action'])
      {
          case "add" :
            //var_dump($_POST['img']);
            var_dump($_SESSION);
             //readfile($remoteImage);
             
              
              break;
      }
      
  }


?>

    <html>
        <head>
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="mystylesheet.css" rel="stylesheet">
            

        </head>
        
        <ul class="nav nav-tabs">
      <li class="<?= isset($id) ? "" : "active" ?>"><a data-toggle="tab" href="#add">Add</a></li>
      <li class="<?= isset($id) ? "active" : "" ?>"><a data-toggle="tab" href="#curToEdit">Edit</a></li>
      
      
</ul>
       
        <div class="tab-content">
       
        
         <form action="" method='post' id="add" class="tab-pane fade in active" enctype="multipart/form-data" >
            Post name : 
            <input type="text" name="postname" required>
             <br>
             Post text :
            <input type="text" name="posttext" required>
            <input type="hidden" name="what" value="what1">
            <input type="file" name="img" src="" accept="image/jpeg,image/png,image/gif">
            
          
             
            <input type="hidden" name="action" value="add">
            <input type="submit">
        </form>
        </div>
        
</html>

//textarea


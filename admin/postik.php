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
            var_dump($_FILES);
           echo "<br>";
            var_dump($_FILES['img']['tmp_name']);
            move_uploaded_file($_FILES['img']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/PHP_Les7/images/".$_FILES['img']['name']);
            var_dump($_SESSION);
             //readfile($remoteImage);
             
              
              break;
      }
      
  }


?>

    <html>
        <head>
            <meta charset="UTF-8"/>
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
              <link href="mystylesheet.css" rel="stylesheet">
              
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            
            
        <script src="/PHP_Les7/js/fileinput.min.js" type="text/javascript"></script>
        <link href="/PHP_Les7/css/fileinput.css" rel="stylesheet">
        
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
 

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
            <input id="file-fr" name="file-fr[]" type="file" multiple>


</script>
            
          
             
            <input type="hidden" name="action" value="add">
            <input type="submit">
        </form>
        </div>
        	<script>
   
	</script>
</html>

//textarea


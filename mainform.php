<?php  require('function.php');
$page = array("id"=>1,
            "name" => "Home",
              "link" => "http:127.0.0.1:8080/PHP_Les7/home.php")
$page = getPageById($_GET['id']);
 
?>
 <html lang="en">
  <head>
   </head>
    <meta charset="utf-8">
       <body>
        <div id='menu'> 
<?php
 include("function.php");
   

    $menus = getMenu();
    echo "<ul>";
    foreach($menus as $m)
    {
        echo "<li><a href=" . "http:127.0.0.1:8080/PHP_Les7/mainform.php?id=" . $m['id'] . ">" . $m['name'] . " </a> </li>"; 
    }
    echo "</ul>";

?>

</div>
<div id="content">
    <?php include "pages/${page['link']}"; ?>
</div>
</body>
</html>
 

 

  


    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
 
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
    <!-- Custom styles for this template -->
   
  </head>

  <body>

    <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
      <a class="navbar-brand" href="#">Main</a>
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </nav>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>
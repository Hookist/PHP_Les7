<?php
 include($_SERVER['DOCUMENT_ROOT'] . "/PHP_Les7/function.php");
    session_start();
 //if($_SESSION['isadmin'] !=1)
 //{
 //    include("PHP_Les7/login.php");
 //    die();
 //}

 $menu = getMenu();

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        switch($_POST['action'])
        {
            case "add" :
                addMenuItem($_POST);
                break;
            case "delete" :
                //$_POST['id'] = $("#menu_to_delete option:selected").text();

                $_POST['id'] = $_POST['menu_to_delete']; 
                deleteMenuItem($_POST);
            break;
            case "curToEdit" :
                if(!isset($id))
                {

                    $id = $_POST['menu_to_edit'];
                    $curr = getPageById($id);
                    break;
                }
                echo "ia v curToEdit";
            case "edit" :
                $_POST['name'] = $_POST['newname'];
                $_POST['link'] = $_POST['newlink'];     

                editMenuItem($_POST);
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
      <li><a data-toggle="tab" href="#delete">Delete</a></li>
      
</ul>
   
   <div class="tab-content">
       
        
         <form action="" method='post' id="add" class="tab-pane fade in active">
            <input type="text" name="name" required>
            <input type="text" name="link" required>
            <input type="hidden" name="action" value="add">
            <input type="submit">
        </form>
       
        
       
        <form action="" method='post' id="delete" class="tab-pane fade">
            <select  name="menu_to_delete">
               <option selected>choose the menu</option>
               <?php foreach($menu as $m): ?>
                <option value="<?= $m[0]?>"> <?=$m[1]?></option>
                
               <?php endforeach;?>
              
            </select>
             <input type="hidden" name="action" value="delete">
            <input type="submit">
        </form>
      
        
       <div id="curToEdit" class="tab-pane fade <?= isset($id) ? "in active" : "" ?>">
       
        <form action="" method='post'>
            <select  name="menu_to_edit">
               <option selected>choose the menu</option>
               <?php foreach($menu as $m): ?>
                <option value="<?= $m[0]?>"> <?=$m[1]?></option>
                
               <?php endforeach;?>
              
            </select>
             <input type="hidden" name="action" value="curToEdit">
            <input type="submit">
            
        </form>
        <?php if(isset($id)): ?>
        <form action="" method='post' id="edit">
                           new name : 

               <input type="text" name="newname" required value="<?= $curr['name']?>">
                new link : 
                <input type="text" name="newlink" required value="<?=$curr['link']?>">
            
             <input type="hidden" name="action" value="edit">
             <input type="hidden" name="id" value="<?=$curr['id']?>">
             
            <input type="submit">
            
            <br>
            
            
            
        </form>
         <?php $_POST['id'] = $id; echo "var_dump : "; var_dump($_POST['id']); endif;  ?>
       </div>
    
      
            
        
        
        
        
    </html>
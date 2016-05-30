<?php
 include($_SERVER['DOCUMENT_ROOT'] . "/PHP_Les7/function.php");
    session_start();
 //if($_SESSION['isadmin'] !=1)
 //{
 //    include("PHP_Les7/login.php");
 //    die();
 //}


    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        switch($_POST['action'])
        {
            case "add" :
            addMenuItem($_POST);
            break;
            case "delete" :
            deleteMenuItem();
            break;
            case "edit" :
            editMenuItem();
            break;
        }
    }

?>


    <html>
    
<ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#add">Add</a></li>
      <li><a data-toggle="tab" href="#edit">Edit</a></li>
      <li><a data-toggle="tab" href="#delete">Delete</a></li>
      
</ul>
   
   <div class="tab-content">
       
        </div>
        <form action="" method='post' id="add">
            <input type="text" name="name" required>
            <input type="text" name="link" required>
            <input type="hidden" name="action" value="add">
            <input type="submit">
        </form>
        
        <form action="" method='post' id="delete">
            <select name="menu_to_delete">
               <option selected>choose the menu</option>
               <?php foreach($menu as $m):?>
                <option value="<?=$m['id']?>"> <?=$m['name']?></option>
                
               <?php endforeach;?>
   
            </select>
            <input type="hidden" value="delete">
            <input type="sumbit" value="delete">
        </form>
        
    </html>
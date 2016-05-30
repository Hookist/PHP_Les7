<?php
  include("function.php");

    CheckLogin("stas");
    
    $pageId = $_GET['id'];
    
    $id = isset($_GET["id"]?$_GET['id'] : "0");

    $page = getPageById($id);
    $menu = getMenu();


?>


    <html>
        <body>
            <div id = "menu">
            <?php
                foreach($menu as $m):?>
            <li>
                <a href="/index.php?id="<?=$m['id']?>>
                <?=$m['name']?> 
                </a>
            </li>
            <?php endforeach: ?>
            </div>
            <div id='content'>
                <?php
                    if($id == 0): ?>
                   
                    
                <?php 
                    else:
                        include"pages/" . $page['link'];
                    
                    endif:
                    ?>
            </div>
        </body>
    </html>
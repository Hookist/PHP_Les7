<?php


    function CheckLogin($login)
    {
        $res = doQuery("SELECT `UserName` FROM `User` WHERE `UserName`= '$login';");

        $count = (mysqli_num_rows($res));
        if($count > 0)
        {
            return true;
        }
        else
            return false;
    }

    function CheckUser($login, $password)
    {
        $link = mysqli_connect("127.0.0.1","root", "", "mydb");

        echo " login : " . $login . "<br>";
        echo " password : " . $password . "<br>";
        $res = mysqli_query($link, "SELECT * FROM `User` WHERE `UserName` = '$login' AND `Password` = '$password';");
        
        echo "Numbers of column : " . mysqli_num_rows($res);
        if(mysqli_num_rows($res) > 0)
        {
            return true;
        }
        else 
            return false;
    }
    

    function CheckString($someString)
    {
        if(strripos($someString, " ") != false)
        {
            return true;
        }
        else
            return false;
    }
    
    function NewUser($username, $password)
    {
         $link = mysqli_connect("127.0.0.1","root", "", "mydb");
         echo "New username : " . $username . "<br>";
         echo "New password : " . $password . "<br>";
        
            $res = mysqli_query($link, "INSERT INTO `user` (`UserName`, `Password`)
VALUES ('$username', '$password');");
        
        if($res == true)
        {
            echo "Dobavilosia " . "<br>";
        }
        else
             echo " Ne dobavilosia " . "<br>";

    }

    function getMenu()
    {
       
         $res = doQuery("SELECT * FROM `pages`;");
         if($res != false)
         {
             echo "zachlo";
             $arr = mysqli_fetch_all($res, MYSQLI_NUM);
             return $arr;
         }
    }

    function getPageById($id)
    {
         $res = doQuery("SELECT * FROM `pages` WHERE `id` = '$id';");
         if($res)
         {
             $arr = mysqli_fetch_assoc($res);
             return $arr;
         }
    }
    
    function addMenuItem($post)
    {
        return doQuery("INSERT INTO `pages`(`name`, `link`)  values('${post['name']}', '${post['link']}')");
    }
       
    function deleteMenuItem($post)
    {
        
       return doQuery("DELETE FROM `pages`
                                WHERE `id` = '".$post['id']."'; ");
        
    }

    function editMenuItem($post)
    {
        return doQuery("UPDATE `pages`
                        SET `name` = '" . $post['name'] ."', `link` = '".$post['link']."'
                        WHERE `id` = '".$post['id']."'; "); 
    }

    function doQuery($query)
    {
         $link = mysqli_connect("127.0.0.1", "root", "", "mydb");
        
        $q = mysqli_query($link, $query);
         return $q;
    }

    function addPost($post)
    {
        return doQuery("INSERT INTO `post` (`PostName`, `User_id`) 
                        VALUES('". $post['postName'] ."', '". $post['userId'] ."')");
    }  

    function deletePost($post)
    {
         return doQuery(" ");
    }

    

    
    
?>
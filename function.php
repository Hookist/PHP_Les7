<?php


    function CheckLogin($login)
    {
        $link = mysqli_connect("127.0.0.1","root", "", "mydb");

        
        $res = mysqli_query($link, "SELECT `UserName` FROM `User` WHERE `UserName`= '$login';");

        var_dump((mysqli_num_rows($res)));
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
         $link = mysqli_connect("127.0.0.1","root", "", "mydb");
         $res = mysqli_query($link, "SELECT * FROM `page`;");
         if($res != false)
         {
             $arr = mysqli_fetch_all($res, MYSQLI_ASSOC);
             return $arr;
         }
    }

    function getPageById($id)
    {
         $link = mysqli_connect("127.0.0.1","root", "", "mydb");
         $res = mysqli_query($link, "SELECT * FROM `page` WHERE `id` = '$id';");
         if($res != false)
         {
             $arr = mysqli_fetch_all($res, MYSQLI_ASSOC);
             return $arr;
         }
    }
    
    function addMenuItem($post)
    {
        $link = mysqli_connect("127.0.0.1", "root", "", "mydb");
        
        $q = mysqli_query($link, "INSERT INTO `page`(`name`, `link`)  values('${post['name']}', '${post['link']}')");
         return $q;
    }
       
    
    
?>
<?php
    function doRegister($login, $password)
    {
        if(CheckLogin($login));
    }

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

        echo "\n login : " . $login;
        echo "\n password : " . $password;
        $res = mysqli_query($link, "SELECT * FROM `User` WHERE UserName= '$login' AND Password = '$password';");
        
        echo "Numbers of column : " . mysqli_num_rows($res);
        if(mysqli_num_rows($res) > 0)
        {
            return true;
        }
        else 
            return false;
    }
    

    
    
?>
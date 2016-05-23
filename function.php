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
    }
    
    
?>
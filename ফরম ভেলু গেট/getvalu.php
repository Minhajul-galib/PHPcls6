<?php
        if( isset($_GET['submit'])){
        $name =  $_GET['name'];          
        $email =  $_GET['email'];
        $pass =  $_GET['pass'];          
        $phone =  $_GET['phone'];          
            echo "$name <hr>";
            echo "$email<hr>";
            echo md5($pass);
            echo "<hr>";            
            echo "$phone<hr>";

        }
        ?>
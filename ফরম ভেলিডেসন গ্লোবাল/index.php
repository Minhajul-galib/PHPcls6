<!DOCTYPE html>

    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <section class="myform">
        <div class="container">
        <h1 style="color:white;">ফরম ভেলিডেসন গ্লোবাল</h1>
        <form action="validetionget.php" method="GET" enctype="multipart/form-data">
            <input name="name" type="text" placeholder="NAME">
            <input name="email" type="email" placeholder="EMAIL">
            <input name="pass" type="password" placeholder="PASSWORD">
            <input name="phone" type="tel" placeholder="PHONE">
            <input name="submit" type="submit" value="SUBMIT">

        </form>
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
        
        if(empty($name) || empty($email) || empty($pass) || empty($phone)){
            echo "<spna style='color:red;'>ALL fields are requre !";
        }else{
            echo"<span style='color:green;'>Data is okay</span>";
        }

        }
        ?>
    </div>
    </section>
    </body>
</html>
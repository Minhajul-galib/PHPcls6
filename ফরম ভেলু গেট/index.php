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
        <h1 style="color:white;">ফরম ভেলু গেট</h1>
        <form action="getvalu.php" method="GET" enctype="multipart/form-data">
            <input name="name" type="text" placeholder="NAME" required>
            <input name="email" type="email" placeholder="EMAIL" required>
            <input name="pass" type="password" placeholder="PASSWORD" required>
            <input name="phone" type="tel" placeholder="PHONE" required>
            <input name="submit" type="submit" value="SUBMIT">

        </form>

        <?php
        if( isset($_GET['submit'])){
        $name =  $_GET['name'];          
        $email =  $_GET['email'];
        $pass =  $_GET['pass'];          
        $phone =  $_GET['phone'];          
            echo "$name <hr>";
            echo md5($email);
            echo "$pass<hr>";
            echo "$phone<hr>";
           
        }
        ?>

    </div>
    </section>
    </body>
</html>
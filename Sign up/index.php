<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="font/font-awesome/css/all.css">

</head>
<body>
<section class="myform">
    <?php
    
    // Student data form
    if( isset($_POST['submit'])){
        // form value get
    
    echo $name = $_POST['name'] . "<hr>";
    echo $email = $_POST['email'] . "<hr>";
    echo $captcha =$_POST['capcha'] . "<hr>";
    echo $age = $_POST['age'] . "<hr>";

        if(empty($name)){
            $err['name'] ="<p style='color:red;'>* Required</p>";
           
        }
        if(empty($email)){
            $err['email'] ="<p style='color:red;'>* Required</p>";
            
        }
        if(empty($captcha)){
            $err['capcha'] ="<p style='color:red;'>* Required</p>";
            
        }
        if(empty($age)){
            $err['age'] ="<p style='color:red;'>* Required</p>";
            
        }
// form call
        if(empty($name) || empty($email) || empty($captcha) || empty($age)){

            $msg = "<p style='color:red;'>All fields are required !!<button class='close' data-toggle='alert'>&times;</button><p>";
        }
        else if($captcha !=11){

            $msg = "<p style='color:red;'>Put the right value<button class='close' data-toggle='alert'>&times;</button></p>";
        }
        else{
            $msg = "<p style='color:green;'>Data stable</p>";
        }
         
    }


    ?>
    <div class="container">
        <div class="forform">
            
            <form action="" method="POST" enctype="multipart/form-data">
            <h1 style="font-size:25px; text-align:center; margin-bottom:10px;">ADD</h1>

            <?php
            
            if( isset($msg)){
                echo $msg;

            }
            
            ?>
            <div class="name">
                <label>Name<br>
                    <input name="name" type="text"></label>
            <?php
            
            if( isset($err['name'])){
                echo $err['name'];
                
            }
            ?>    
                
            </div>
            <div class="email">
                <label>Email<br>
                    <input name="email" type="email"></label>
            
            <?php
            
            if( isset($err['email'])){
                echo $err['email'];
                
            }
            ?>  
                    
            </div>

            <div class="year">                
                <label>Age<br>
                    <input name="age" type="number"></label>
            
            <?php
            
            if( isset($err['age'])){
                echo $err['age'];
                
            }
            ?>  
            <div class="captcha"> 
            <?php
            echo "5+6= ";
            if( isset($err['capcha'])){
                echo $err['capcha'];
                
            }
            ?>
            <label><br>
            <input name="capcha" type="number"></label>

            </div>
            </div>

            <div class="submit">
                <input name="submit" type="submit" value="SEND">
            </div>

        </div>
    </div>
</section>
</body>
<script src="js/jquery-3.5.1.min.js">
	

</script>
<script>

</script>


  
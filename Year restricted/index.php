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
    echo $phone = $_POST['phone'] . "<hr>";
    echo $age = $_POST['age'] . "<hr>";

    // Check Email
    $email_arr= explode('@', $email);                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         

        $inst_mail= end($email_arr);
    // CELL CHECKING
    $cell_start =substr($phone, 0, 3);

        if(empty($name)){
            $err['name'] ="<p style='color:red;'>* Required</p>";
           
        }
        if(empty($email)){
            $err['email'] ="<p style='color:red;'>* Required</p>";
            
        }
        if(empty($phone)){
            $err['phone'] ="<p style='color:red;'>* Required</p>";
            
        }
        if(empty($age)){
            $err['age'] ="<p style='color:red;'>* Required</p>";
            
        }
// form call
        if(empty($name) || empty($email) || empty($phone) || empty($age)){

            $msg = "<p style='color:red;'>All fields are required !!<button class='close' data-toggle='alert'>&times;</button><p>";
        }
        else if(filter_var($email_arr, FILTER_VALIDATE_EMAIL)== false){
            $msg = "<p style='color:red;'>Invalit email address!! 
            <button class ='close' data-dismiss='alert'>&times;</button></p>";

        }
        else if($inst_mail !='migalib.com'){

            $msg ="<p style='color:red;'> 
            Email should be our Institued email!! <button class='close' data-dismiss='alert'>&times;</button></p>";}

        else if( in_array($cell_start, ['017','018','019','015','016','014','013'])==false ){

            $msg = "<p style='color:red;'>Please check your phone number <button class='close' data-dismiss='alert'>&times;</button></p>";
        } 
        else if($age>=18 & $age <=40){

            $msg = "<p style='color:red;'>Only those people are allowed whose age is 18-40
             <button class='close' data-dismiss='alert'>&times;</button></p>";
        }
        else{
            $msg = "<p style='color:green;'>Data stable !!<button class='close' data-toggle='alert'>&times;</button><p>";
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
            <div class="phone">                
                <label>Phone<br>
                    <input name="phone" type="tel"></label>
                    <?php
            
            if( isset($err['phone'])){
                echo $err['phone'];
                
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


  
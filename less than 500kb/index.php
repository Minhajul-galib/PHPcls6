<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="font/font-awesome/css/all.css">

</head>
<body>
<section class="myform">

<?php
    if( isset($_POST['upload'])){

       $file= $_FILES['profile_photo'];

    //  FLIE NAME
    $file_name = $file['name'];
    $file_tmpname = $file['tmp_name'];
    $file_size = $file['size'];
    $size_in_kb = ($file_size/1024);

    // GET EXTEN
    $file_arr = explode('.', $file_name);
    echo $extension = end($file_arr);

    // UNIQUE file name
    $unique_name =time() .rand(1, 99999999) . '.' . $extension;

    }
    if( empty($file_name)){
        $msg ="<p class='alert alert-danger'> Please select a file!<button class='close' data-dismiss='alert'>&times;</button></p>";
    }
    else if( in_array($extension, ['jpg' , 'png' , 'gif' ,'jpeg' ,'webp']) ==false){

        $msg = "<p class=\"alert alert-warning\"> Invalid file formate!<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
    }
    else if( $size_in_kb > 500){
        $msg ="<p class='alert alert-info'> Image size is too large
        <button class='close' data-dismiss='alert'>&times;</button></p>";
    }
    else{
        move_uploaded_file($file_tmpname, 'photos/' . $unique_name);
        $msg = "<p class=\"alert alert-success\">File Uploaded!<button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";

    }

    ?>
     
    <div class="container">
        <div class="forform">

        <?php
        if( isset($msg)){
            echo $msg;

        }
        ?>
            
            <form action="" method="POST" enctype="multipart/form-data">
            <h1 style="font-size:25px; text-align:center; margin-bottom:10px;">ADD</h1>


            <div class="name">
                <label>Name<br>
                    <input name="name" type="text"></label>
            <?php
            
            if( isset($name['name'])){
                echo $name['name'];
                
            }
            ?>    
                
            </div>
            <div class="photo">
            <label for="file_upload"><img data-toggle="tooltip" 
            data-placement="top" data-toggle="tooltip" title="Profile Photo" 
            style='width:80px;' src="img/cam.png" alt=""><br></label>
            <input name="profile_photo" type="file" id="file_upload">
            </div>

            <div class="submit">
                <input name="upload" type="submit" v\alue="Upload">
            </div>

        </div>
    </div>
</section>
</body>
<script src="js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js">  </script>
<script src="assets/js/bootstrap.min.js">  </script>
<script>
    $(function (){
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>


  
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

    // UNIQUE file name
    $unique_name =time() .rand(1, 99999999) . $file_name;

        move_uploaded_file($file_tmpname, 'photos/' . $unique_name);

    }
    ?>
     
    <div class="container">
        <div class="forform">
            
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


  
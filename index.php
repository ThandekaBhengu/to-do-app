<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Make The Pots</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <?php require('functions.php'); ?>
   
   <?php 
   if(isset($_POST['submit'])) {
        add_the_things($_POST['submit']);
    } ?>

    

    
    <div class="container">
    <h1 class="text-center" >The app that will make you do the pots</h1>
    <form action="" method="post">
    <?php if(!empty($_SESSION['thingstobedone'])) { ?>
    <div class="form-group">
    <ul class="list-group"> 
    <?php foreach ($_SESSION['thingstobedone'] as $things) { ?>

    <li class="list-group-item list-group-item-<?php echo $things['thethings'] ?>"></li><?php }?>
    </ul>
    <?php } ?>
    
    <label for="exampleFormControlTextarea1">Add to list</label>
    </div>
    <input type="text" class="form-control" name="thingstobedone" id="exampleFormControlTextarea1" rows="3">
    
    
    <button type="submit" name="submit" class="btn btn-outline-primary" value="make the things">Make the things</button>
    
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
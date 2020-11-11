<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Numbers Game - Michel Kodjo</title>
    <!-- MDB icon -->
    <link rel="icon"
        href="https://icons.iconarchive.com/icons/google/noto-emoji-activities/256/52761-video-game-icon.png"
        type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Start your project here-->
    <div class="view">
        <div class="title">
            <h4>Numbers Game</h4>
        </div>
        <div class="flex-center flex-column">
            <form class="text-center" style="color: #757575;" method="post" action="./php/controller.php">

                <div class="md-form">
                    <input type="text" id="number" name="number" class="form-control">
                    <label for="number">Enter a number</label>
                </div>
                <button class="btn purple-gradient" type="submit">Find next greater number</button>
            </form>
            <hr />
            <?php

if(isset($_GET['n']) AND trim($_GET['n']) !== ''){
  if($_GET['n'] !== '0'){
    if(isset($_GET['v'])){
?>
            <div>
                <h1 class="home-text-color">
                    <?= $_GET['v']; ?>
                </h1>
            </div>
            <i class="fas fa-long-arrow-alt-down fa-5x"></i>
            <?php
    }

    ?>
            <div>
                <h1 class="home-text-color animation-style">
                    <?= $_GET['n']; ?>
                </h1>
            </div>
            <?php

  }else{
    ?>
            <div class="alert alert-danger" role="alert">
                No Next Greater Number Found <i class="far fa-sad-cry"></i>
            </div>
            <?php
  }

}

?>


        </div>
    </div>
    <!-- End your project here-->

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>

</body>

</html>
<?php
session_start();

if (isset($_POST['submit']) ){
    $_SESSION['note'][]=htmlentities($_POST['note']);
    header('location:Home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Note</title>
    <link rel="stylesheet" href="https://gharbiyasmine.github.io/Atelier-PHP/bootstrap.css">

    <script src="https://kit.fontawesome.com/ce61b18206.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">  <i class="fa-solid fa-bars"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse coll" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Note.php"><i class="fa-solid fa-pen"></i> Write A Note</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Home.php"><i class="fa-solid fa-note-sticky"></i> My Notes</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<h3 style="text-align:center;color: #4986c1;"> <i class="fa-solid fa-note-sticky"></i> Place A Note  </h3>
<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
    <div class="container">

        <br>
        <div class="row txt">
            <textarea class="form-control note" rows="5" name="note" placeholder="Note..."></textarea>
            <button type="submit" class="btn btn-outline-secondary " name="submit"><i class="fa-solid fa-thumbtack"></i>
            </button>
        </div>
    </div>
</form>
</body>
</html>
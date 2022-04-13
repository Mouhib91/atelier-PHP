<?php
session_start();
if (isset($_POST['trash'])){
    $key=$_POST['key'];
    unset($_SESSION['note'][$key]);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Notes</title>
    <link rel="stylesheet" href="https://github.com/Mouhib91/atelier-PHP/blob/main/bootstrap.csss">

    <script src="https://kit.fontawesome.com/ce61b18206.js" crossorigin="anonymous"></script>
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
                    <a class="nav-link " href="Note.php"><i class="fa-solid fa-pen"></i> Write A Note</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Home.php"><i class="fa-solid fa-note-sticky"></i> My Notes</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<h3 style="text-align:center;color: #4986c1;">My Notes </h3>
<br>

<?php
if (isset($_SESSION['note'])){
    foreach ($_SESSION['note'] as $his=>$value) {

        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post" style="display: inline-block">
            <div class="card" style="width: 18rem; display: inline-block">
                <div class="card-body">
                    <h5 class="card-title">Note <?=$his?></h5>
                    <p class="card-text"><?=$value?></p>
                    <input type="hidden" name="key" value="<?=$his?>">
                    <button name="trash" type="submit" ><i class="fa-solid fa-trash-can"></i></button>

                </div>
            </div>
        </form>
        <?php
    }
//onclick="this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode)"
}
?>

</body>
</html>

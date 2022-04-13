<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Evaluation</title>
    <link rel="stylesheet" href="https://github.com/Mouhib91/atelier-PHP/blob/main/bootstrap.csss">
    <script src="https://kit.fontawesome.com/ce61b18206.js" crossorigin="anonymous"></script>

</head>
<body>
<?php
if (isset($_POST['submit']))
{  if (!isset($_COOKIE[$_POST['user']]))
{setcookie($_POST['user'],$_POST['eval'],time()+120);
    ?>
    <div class="alert alert-success" role="alert"> <?='Form submitted - Thank you'?></div>
    <?php

}
else {

    <div class="alert alert-warning" role="alert"> <?='answer already submitted '.$_POST['user'].' : '.$_COOKIE[$_POST['user']]?></div>
    <?php
}
}
?>

</body>
</html>



<?php
$name=strip_tags($_POST['name']);
$lastname=strip_tags($_POST['lastName']);
$num=strip_tags($_POST['num']);
$type=strip_tags($_POST['type']);
if (isset($_POST['include'])) {
    $include = strip_tags($_POST['include']);
}
if (isset($_FILES['fichier'])){

    if (!file_exists(__DIR__.'/uploads/'.$_FILES['fichier']['name'])){
        move_uploaded_file($_FILES['fichier']['tmp_name'],__DIR__.'/uploads/'.uniqid().$_FILES['fichier']['name']);
    }
}
$price=4;
$total= $price*$num;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>recap</title>
    <link rel="stylesheet" href="https://gharbiyasmine.github.io/Atelier-PHP/bootstrap.css">
    <script src="https://kit.fontawesome.com/ce61b18206.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <h2 style="text-align:center;color: #4986c1;"><i class="fa-solid fa-clipboard-check"></i> Recap Of The Order</h2>
    <ul class="list-group list-group-flush " >
        <li class="list-group-item ">Name : <?=$name ?></li>
        <li class="list-group-item ">Last Name: <?=$lastname ?></li>
        <li class="list-group-item ">Num of Sandwichs : <?= $num ?></li>
        <li class="list-group-item ">Type : <?=$type ?></li>
        <li class="list-group-item ">Include :
            <?php
            if (!isset($include))
            {echo "not specified";}
            else
            {
                $N = count($include);
                for($i=0; $i < $N; $i++)
                {
                    echo($include[$i] . " -");
                }
            }
            ?></li>
        <li class="list-group-item "> Your Total :
            <?php
            if ($num>=10)
            {
                $remise = ($total*10)/100;
                $total=$total-$remise;
                echo $total ."DT - you got 10% discount";
            }
            else
            {echo $total;}

            ?>
        </li>


</div>
</body>
</html>
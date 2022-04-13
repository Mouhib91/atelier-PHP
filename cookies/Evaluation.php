<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Evaluation</title>
    <link rel="stylesheet" href="https://gharbiyasmine.github.io/Atelier-PHP/bootstrap.css">


</head>
<body>
<form action="eval-process.php" method="post">
    <h3 style="text-align:center;color: #4986c1;">Evaluer le contenue du cours PHP : </h3>
    <br>
    <div class="container">
        Username: <input type="text" name="user" class="form-control" placeholder="Enter Username">
        <br>
        Bon :   <input type="radio" name="eval" value="Bon">
        <br>
        Moyen :   <input type="radio" name="eval" value="Moyen">
        <br>
        Mauvais :   <input type="radio" name="eval" value="Mauvais">
        <br><br>
        <input type="submit" name="submit" class="btn btn-primary" >
    </div>
</form>

</body>
</html>
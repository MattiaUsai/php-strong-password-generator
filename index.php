<?php 

include 'logic.php';





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <input type="number" name="password_length">
        <button type="submit">Genera</button>

    </form>
    
   
    <hr>
    <?php echo $password;?>

</body>
</html>
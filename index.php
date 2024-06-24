<?php 

include 'logic.php';





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container-md py-5 text-center" >
        <form  action="index.php" method="get">
            <div class="input-group flex-nowrap mx-auto w-25">
                <span class="input-group-text" id="addon-wrapping">NUM</span>
                <input  type="number" class="form-control" placeholder="Inserisci un numero" aria-label="Username" aria-describedby="addon-wrapping" name="password_length">
                
            </div>
            
            <button class="btn btn-secondary my-5" type="submit">Genera</button>

        </form>
        
    
        <hr>
        <h2>La tua password è</h2>
        <p><?php echo $password;?></p>
        
    </div>

</body>
</html>
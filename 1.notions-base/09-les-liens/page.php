
<?php $job = $_GET['job']?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
   


<h1>Vous etes <?php echo $job ?></h1>

<!-- nous pouvons écrire de cette maniere ?= represente echo -->
<h1>Vous etes <?=  $job; ?></h1>


</body>
</html>
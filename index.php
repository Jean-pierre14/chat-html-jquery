<?php

$Name = "Grace BISIMWA";

function Select($noVari, ...$variadic){
    global $Name;

    echo $Name;
}

function Cool(){
    global $Name;
    echo "Cool ${Name} ";
}

if(isset($_POST['cool'])){
    Cool();
}

Select(1,2,3,4,5);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <button type="submit" name="cool">Cool</button>
    </form>
</body>
</html>
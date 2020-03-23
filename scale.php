<!DOCTYPE html>

<html>

<head>
    <title>Arsh Butt</title>
</head>


<body>

    <form method="post">

        <input type="number" name="value1">
        <input type="number" name="value2">
        <input type="submit" value="Test" name="submit">

    </form>

</body>
    
    
    
</html>




<?php

if(isset($_POST["submit"])){
    
    $value1 = $_POST["value1"];
    $value2 = $_POST["value2"];
    
    
    if($value1 == $value2){

        echo "het is in balans";
        
    } else{
        echo "het is niet in balans";
    }
    
}

?>

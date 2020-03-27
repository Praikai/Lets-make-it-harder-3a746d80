<!DOCTYPE html>

<html>

<head>
    <title>Arsh Butt</title>
</head>


<body>

    <form method="post">

        <input type="number" name="value1">
        <input type="number" name="value2">
        <input type="number" name="value3">
        <input type="submit" value="Test" name="submit">

    </form>

</body>



</html>



<?php

class Balans
{

public $gewicht1;
public $gewicht2;

    public function checkgewicht()
    {
        if(isset($_POST["submit"])){

        $gewicht1 = $_POST["value1"];
        $gewicht2 = $_POST["value2"];


        if($gewicht1 == $gewicht2){

        echo "het is in balans";

        } else{
        echo "het is niet in balans";
        }

    }
}



}

$gewicht = new Balans();


echo $gewicht->checkgewicht();




?>

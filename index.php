<h1>How many bottles of beers you got on your wall?</h1>
<?php

require './wall.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $wall = new Wall();
    $beers = strip_tags($_POST['beers']);

    if ($wall->validate($beers)) {
        $wall->bottles($beers);
        echo $wall->howManyBottles();
    } else {
        echo 'Please enter valid value';
    }
}

?>
<form action="/" method="post">
    <input id="beers" type="number" name="beers">
    <input type="submit" value="Sing to me!">
</form>
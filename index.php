<?php

require './bottles.php';

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
    <label for="beers">How many beers you got?</label>
    <input id="beers" type="number" name="beers">
    <input type="submit" name="submit">
</form>
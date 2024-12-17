<?php
include "Database.php";
include "functions.php";

$config = require("config.php");

$db = new database ($config["database"]);

$gifts = $db->query("SELECT * FROM gifts")->fetchAll(PDO::FETCH_ASSOC);



//dabūt rezultātu


//dd($post[0]["content"]);
echo "<ol>";
foreach ($gifts as $gift){
    echo "<li>" .  $gift["name"] . " " .$gift["count_available"] . "</li>";
}
echo "</ol>";

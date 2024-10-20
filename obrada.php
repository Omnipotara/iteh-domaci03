<?php
require "dbBroker.php";
require "model/prijava.php";
require "handler/delete.php";
require "handler/add.php";
require "handler/update.php";



// Redirekcija na home.php nakon obrade
header("Location: home.php");
?>

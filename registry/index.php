<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

require "Registry.php";

// Values
$reg = Registry::instance();
$reg->set("name", "SET DOO");
print($reg->get("name"));
print("<BR>");

// Objects
$conf = $reg->conf()->set('treedir', '.');
print($reg->treeBuilder()->getTree());

// Test mode
Registry::testMode();
$mockreg = Registry::instance();

?>

</body>
</html>
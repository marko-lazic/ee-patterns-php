<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
require "Registry.php";

$reg = Registry::instance();
$reg->set("name", "SET DOO");
print($reg->get("name"));

?>

</body>
</html>
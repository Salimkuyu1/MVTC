
<?php

$class_id = $_GET['class_id'];

$sql = "SELECT name FROM class
       WHERE id =:id";

$query = $dtb->prepare($sql);
$query->bindParam(":id", $class_id, PDO::PARAM_STR);

$query->execute();
$className = $query->fetchColumn();

return json_encode($className);
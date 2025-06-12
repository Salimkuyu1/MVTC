<?php

$query =  "SELECT name, id, PNo FROM teachers";
$sql = $dtb->prepare($query);
$sql->execute();

$response = $sql->fetchAll();
return json_encode($response);
<!--used to fetch all the teachers in the database table "teachers" -->

<?php

include __DIR__ . "/../../fxn/config.php";

$query = "SELECT  * FROM teachers";

$sql = $dtb->prepare($query);

$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

return json_encode($result);
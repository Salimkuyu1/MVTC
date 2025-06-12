<!--used to fetch all the students in the database table "students" -->

<?php

include __DIR__ . "/../../fxn/config.php";

$query = "SELECT  * FROM Students";

$sql = $dtb->prepare($query);

$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

return json_encode($result);
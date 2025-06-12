<!--used to fetch all the subjects in the database table "subjects;
" -->

<?php

include __DIR__ . "/../../fxn/config.php";

$query = "SELECT  * FROM subjects";

$sql = $dtb->prepare($query);

$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

return json_encode($result);
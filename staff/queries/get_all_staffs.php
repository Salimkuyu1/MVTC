<!--used to fetch all the support staffs in the database table "support_staff" -->

<?php

include __DIR__ . "/../../fxn/config.php";

$query = "SELECT  * FROM support_staff";

$sql = $dtb->prepare($query);

$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

return json_encode($result);



        
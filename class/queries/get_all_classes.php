<!--used to fetch all the classes in the database table "classes" -->

<?php

include __DIR__ . "/../../fxn/config.php";

$query = "SELECT  c.name, c.time, c.CreationDate,
 t.name AS classteacher, c.id,
                    c.class_code, 
                  c.maxno, c.subjectsNo
          FROM class c
          LEFT JOIN teachers t
         ON t.id=c.classteacher ";

$sql = $dtb->prepare($query);

$sql->execute();

$result = $sql->fetchAll(PDO::FETCH_ASSOC);

return json_encode($result);
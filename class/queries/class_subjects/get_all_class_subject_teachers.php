<?php

$class_id = $_GET['class_id'];

//TEACHER, SUBJECT
$sql = "SELECT t.name AS teacher, 
                subjectName AS subject 
                FROM class_subjects AS cs
        LEFT JOIN teachers AS t
        ON cs.teacher_id = t.id
        LEFT JOIN subjects AS s
        ON cs.subject_id = s.id
        WHERE cs.class_id =" .$class_id;

$query = $dtb->prepare($sql);
$query->execute();

$teachers = $query->fetchAll(PDO::FETCH_ASSOC);

return json_encode($teachers);
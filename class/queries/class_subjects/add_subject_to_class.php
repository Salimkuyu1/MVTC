<?php

require_once __DIR__. "/../../../fxn/config.php";
//require_once __DIR__. ""

$TeacherName = $_POST['name'];
$subjectName = $_POST['subjects'];
$class_id = $_POST['class_id'];


//used to be sent back to the caller.
$data = array();

try{
    
    //we have removed id column because it is auto_increament.
    $query = "INSERT INTO `class_subjects`(`class_id`, `subject_id`, `teacher_id`)
    VALUE (:class_id, :subjects_id, :teachers_id)";

    $sql =$dtb->prepare($query);

    /** we have two binds: 1. PARAM_STR - which binds to string characters. 
     * 2. PARAM_INT - which binds to an interger.
    */

    $sql->bindparam(":class_id", $class_id, PDO::PARAM_STR);
    $sql->bindparam(":subjects_id", $subjectName, PDO::PARAM_INT);
    $sql->bindparam(":teachers_id", $TeacherName, PDO::PARAM_STR);
    
    $sql->execute();

    $data['success'] = true;
    $data['message'] = "teacher assigned a class subject";

}catch(Exception $e){
    $data['success'] = false;
    $data['message'] = $e->getMessage();

}

echo json_encode($data);
header("/../../pages/class_subjects.php");



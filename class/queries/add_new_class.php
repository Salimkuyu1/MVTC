<?php

// we are includimg the config file.
//include _DIR_"";

include __DIR__."/../../fxn/config.php";


//This are our variables that are sent / served (received) from the frontend / html /js source.
$name = htmlentities($_POST['name']);
$time = htmlentities($_POST['time']);
$CreationDate = htmlentities($_POST['CreationDate']);
$classteacher = htmlentities($_POST['classteacher']);
$class_code = htmlentities($_POST['class_code']);
$subjectsNo = htmlentities($_POST['subjectsNo']);
$maxno = htmlentities($_POST['maxno']);

//used to be sent back to the caller.
$data = array();

try{
    // if either of this is empty or the phonenumber is less thsn 10, we throw an errotr that will be caught
    //  by the catch statement.
    if(empty($name) || empty($maxno) )
    throw new Exception("There are empty fields in your document");

    //we have removed id column because it is auto_increament.
    $query = "INSERT INTO `class`(`name`, `time`, `CreationDate`, `maxno`,`subjectsNo` ,`classteacher`, `class_code`)
    VALUE (:name, :time, :CreationDate, :maxno, :subjectsNo, :classteacher, :class_code)";

    $sql =$dtb->prepare($query);

    /** we have two binds: 1. PARAM_STR - which binds to string characters. 
     * 2. PARAM_INT - which binds to an interger.
    */

    $sql->bindparam(":name", $name, PDO::PARAM_STR);
    $sql->bindparam(":time", $time, PDO::PARAM_STR);
    $sql->bindparam(":CreationDate", $CreationDate, PDO::PARAM_STR);
    $sql->bindparam(":maxno", $maxno, PDO::PARAM_INT);
    $sql->bindparam(":subjectsNo", $subjectsNo, PDO::PARAM_INT);
    $sql->bindparam(":classteacher", $classteacher, PDO::PARAM_STR);
    $sql->bindparam(":class_code", $class_code, PDO::PARAM_STR);

    $sql->execute();

    $data['success'] = true;
    $data['message'] = "class added successfully";

}catch(Exception $e){
    $data['success'] = false;
    $data['message'] = $e->getMessage();

}

echo json_encode($data);

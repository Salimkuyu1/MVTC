<?php

// we are includimg the config file.
//include _DIR_"";

include __DIR__."/../../fxn/config.php";


//This are our variables that are sent / served (received) from the frontend / html /js source.
$subjectName = htmlentities($_POST['subjectName']);
$subjectCode = htmlentities($_POST['subjectCode']);

//used to be sent back to the caller.
$data = array();

try{
    // if either of this is empty or the ** is less than -, we throw an errorr that will be caught
    //  by the catch statement.
    //if(empty($subjectName) || empty($subjectCode) ||  <10)
    //throw new Exception("There are empty fields in your document");

    //we have removed id column because it is auto_increament.
    $query = "INSERT INTO `subjects`(`subjectName`, `subjectCode`)
              VALUE (:subjectName, :subjectCode)";

    $sql =$dtb->prepare($query);

    /** we have two binds: 1. PARAM_STR - which binds to string characters. 
     * 2. PARAM_INT - which binds to an interger.
    */

    $sql->bindparam(":subjectName", $subjectName, PDO::PARAM_STR);
    $sql->bindparam(":subjectCode", $subjectCode, PDO::PARAM_INT);
    

    $sql->execute();

    $data['success'] = true;
    $data['message'] = "subject added successfully";

}catch(Exception $e){
    $data['success'] = false;
    $data['message'] = $e->getMessage();

}

echo json_encode($data);

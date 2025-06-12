<?php

// we are includimg the config file.
//include _DIR_"";

include __DIR__."/../../fxn/config.php";


//This are our variables that are sent / served (received) from the frontend / html /js source.
$StudentName = htmlentities($_POST['StudentName']);
$AdmNo = htmlentities($_POST['AdmNo']);
$Gender = htmlentities($_POST['Gender']);
$DateOfBirth = htmlentities($_POST['DateOfBirth']);
$PhoneNumber = htmlentities($_POST['PhoneNumber']);

//used to be sent back to the caller.
$data = array();

try{
    // if either of this is empty or the phonenumber is less thsn 10, we throw an errotr that will be caught
    //  by the catch statement.
    if(empty($StudentName) || empty($Gender) || $PhoneNumber <10)
    throw new Exception("There are empty fields in your document");

    //we have removed id column because it is auto_increament.
    $query = "INSERT INTO `Students`(`name`, `id`, `gender`, `DoB`,`PhoneNumber`)
    VALUE (:StudentName, :AdmNo, :Gender, :DateOfBirth, :PhoneNumber)";

    $sql =$dtb->prepare($query);

    /** we have two binds: 1. PARAM_STR - which binds to string characters. 
     * 2. PARAM_INT - which binds to an interger.
    */

    $sql->bindparam(":StudentName", $StudentName, PDO::PARAM_STR);
    $sql->bindparam(":AdmNo", $AdmNo, PDO::PARAM_STR);
    $sql->bindparam(":Gender", $Gender, PDO::PARAM_STR);
    $sql->bindparam(":DateOfBirth", $DateOfBirth, PDO::PARAM_STR);
    $sql->bindparam(":PhoneNumber", $PhoneNumber, PDO::PARAM_STR);

    $sql->execute();

    $data['success'] = true;
    $data['message'] = "student added successfully";

}catch(Exception $e){
    $data['success'] = false;
    $data['message'] = $e->getMessage();

}

echo json_encode($data);

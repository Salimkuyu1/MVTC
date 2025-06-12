<?php

// we are includimg the config file.
//include _DIR_"";

include __DIR__."/../../fxn/config.php";


//This are our variables that are sent / served (received) from the frontend / html /js source.
$staffname = htmlentities($_POST['staffname']);
$Residence = htmlentities($_POST['Residence']);
$JobType = htmlentities($_POST['JobType']);
$PhoneNumber = htmlentities($_POST['PhoneNumber']);

//used to be sent back to the caller.
$data = array();

try{
    // if either of this is empty or the phonenumber is less than 10, we throw an errotr that will be caught
    //  by the catch statement.
    //if(empty($staffname) || empty($JobType) || $PhoneNumber <20)
    //throw new Exception("There are empty fields in your document");

    //we have removed id column because it is auto_increament.
    $query = "INSERT INTO `support_staff`(`staffname`, `Residence`, `JobType`, `PhoneNumber`)
    VALUE (:staffname, :Residence, :JobType, :PhoneNumber)";

    $sql =$dtb->prepare($query);

    /** we have two binds: 1. PARAM_STR - which binds to string characters. 
     * 2. PARAM_INT - which binds to an interger.
    */

    $sql->bindparam(":staffname", $staffname, PDO::PARAM_STR);
    $sql->bindparam(":Residence", $Residence, PDO::PARAM_STR);
    $sql->bindparam(":JobType", $JobType, PDO::PARAM_STR);
    $sql->bindparam(":PhoneNumber", $PhoneNumber, PDO::PARAM_INT);

    $sql->execute();

    $data['success'] = true;
    $data['message'] = "staff added successfully";

}catch(Exception $e){
    $data['success'] = false;
    $data['message'] = $e->getMessage();

}

echo json_encode($data);

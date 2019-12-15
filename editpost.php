<?php 
    require_once 'db/conn.php';

   
    //Get values from post operation
   if(isset($_POST['submit'])){
        //extract values from the $_POST array
        $id = $_POST['id'];
        $fname = $_POST['firstName'];
        $mname = $_POST['middleName'];
        $lname = $_POST['lastName'];
        $alias = $_POST['alias'];
        $dob = $_POST['dob'];
        $h_address = $_POST['h_address'];
        $offence = $_POST['offence'];
        $occupation = $_POST['occupation'];
        $gender = $_POST['gender'];
        $idNo = $_POST['idNo'];
        $idType = $_POST['idType'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $regNo = $_POST['regNo'];
        //Call Crud function

        //die(var_dump($_POST));
        //exit();
        $result = $crud->editCriminals($id, $fname, $mname, $lname, $alias, $dob, $gender, $h_address, $offence, $occupation, $idNo, $idType, $email, $contact, $regNo);
        // Redirect to viewrecords.php

        echo $result;

        if($result){
            header("Location: viewrecords.php");
        }
        else{
            include 'includes/errormessage.php';
        }
    }
    else{
        include 'includes/errormessage.php';
    }

    

?>
<?php
    $title = 'Success'; 
    require_once 'includes/header.php';
   
    require_once 'db/conn.php';
    require_once 'sendemail.php';

    if(isset($_POST['submit'])){
        //extract values from the $_POST array
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
        
        
        $orig_file = $_FILES["ava"]["tmp_name"];
        $ext = pathinfo($_FILES["ava"]["name"],PATHINFO_EXTENSION);
        $target_dir = 'uploads/';
        $destination = "$target_dir$idNo.$ext";
        move_uploaded_file($orig_file, $destination);

       // exit();
        
        //Call function to insert and track if success or not
        $isSuccess = $crud->insertCriminals($fname, $mname, $lname, $alias, $dob, $gender, $h_address, $offence, $occupation,  $idNo, $idType, $email, $contact, $regNo, $destination);
        $specialtyName = $crud->getIdTypeById($idType);
       
        if($isSuccess){
            SendEmail::SendMail($email,'Welcome to crime management system','You have successfully registered a criminal or suspect');
            include 'includes/successmessage.php';
        }
        else{
            include 'includes/errormessage.php';
        }

    }
?>
    
    <!-- This prints out values that were passed to the action page using method="get" -->
    <!-- <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php //echo $_GET['firstname'] . ' ' . $_GET['lastname'];  ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php //echo $_GET['specialty'];  ?>    
            </h6>
            <p class="card-text">
                Date Of Birth: <?php //echo $_GET['dob'];  ?>
            </p>
            <p class="card-text">
                Email Adress: <?php //echo $_GET['email'];  ?>
            </p>
            <p class="card-text">
                Contact Number: <?php //echo $_GET['phone'];  ?>
            </p>
    
        </div>
    </div> -->

    <!-- This prints out values that were passed to the action page using method="post" -->
    <img src="<?php echo $destination; ?>" style="margin: 1px; width: 18rem; "  />
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h6 class="card-title">   
                <?php echo $_POST['firstName'] .' '. $_POST['middleName'].' '. $_POST['lastName'];  ?>
            </h6>
            
            <p class="card-text">
                O/C: <?php echo $_POST['alias'];  ?>
            </p>

            <p class="card-subtitle mb-2 text-muted">
               Id type:   <?php echo $_POST['idType'];  ?>    
            </p>

            <p class="card-text">
               ID number: <?php echo $_POST['idNo'];  ?>
            </p>

            <p class="card-text">
                Address: <?php echo $_POST['h_address'];  ?>
            </p>

            <p class="card-text">
                Occupation: <?php echo $_POST['occupation'];  ?>
            </p>
            <p class="card-text">
                Offence: <?php echo $_POST['email'];  ?>
            </p>

            <p class="card-text">
                Gender: <?php echo $_POST['gender'];  ?>
            </p>

           
            <p class="card-text">
                Email Address: <?php echo $_POST['email'];  ?>
            </p>
            <p class="card-text">
                Contact Number for police officer: <?php echo $_POST['phone'];  ?>
            </p>
            <p class="card-text">
               Regulation Number: <?php echo $_POST['regNo'];  ?>
            </p>
        </div>
    </div>
    

<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
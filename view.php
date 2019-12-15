<?php
    $title = 'View Record'; 

    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php'; 

    // Get criminal_tb by id
    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
        
    } else{
        $id = $_GET['id'];
        $result = $crud->getCriminalsDetails($id);
        
    
    
?>
<img src="<?php echo empty($result['ava_path']) ? "uploads/blank.jpg" : $result['ava_path']; ?>" style="margin: 1px; width: 18rem; "  />
<div class="card" style="width: 18rem;">
        <div class="card-body">
            <h6 class="card-title">

            <h6>Criminal/suspect's info</h6>
            <br>            


                <?php echo $result['firstName'] .' '. $result['middleName'].' '. $result['lastName'];  ?>
            </h6>
            
            <p class="card-subtitle mb-2 text-muted">
               O/C:   <?php echo $result['alias'];  ?>    
            </p>

            <p class="card-text">
                Gender: <?php echo $result['gender'];  ?>
            </p>

            <p class="card-text">
                Last Known Address: <?php echo $result['h_address'];  ?>
            </p>
            
            <p class=""card-text"">
               ID Type:   <?php echo $result['name'];  ?>    
            </p>

            <p class="card-text">
               ID number: <?php echo $result['idNo'];  ?>
            </p>

            
            <p class="card-text">
                Occupation: <?php echo $result['occupation'];  ?>
            </p>
            <p class="card-text">
                Offence: <?php echo $result['email'];  ?>
            </p>            

            <h6>Police officer's Details</h6>
            <br>
            
           
            <p class="card-text">
                Email Address: <?php echo $result['email'];  ?>
            </p>
            <p class="card-text">
                Contact Number for police officer: <?php echo $result['phone'];  ?>
            </p>
            <p class="card-text">
               Regulation Number: <?php echo $result['regNo'];  ?>
            </p>
        </div>
    </div>
<br/>
        <a href="viewrecords.php" class="btn btn-info">Back to List</a>
        <a href="edit.php?id=<?php echo $result['criminal_tb_id'] ?>" class="btn btn-warning">Edit</a>
        <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $result['criminal_tb_id'] ?>" class="btn btn-danger">Delete</a>
    <?php } ?>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
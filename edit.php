    
<?php
    $title = 'Edit Record'; 

    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php'; 

    $results = $crud->getIdType();

    if(!isset($_GET['id']))
    {
        //echo 'error';
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }
    else{
        $id = $_GET['id'];
        $criminal_tb = $crud->getCriminalsDetails($id);
    

    
?>

    <h1 class="text-center">Edit Record </h1>

    <form method="post" action="editpost.php">
        <input type="hidden" name="id" value="<?php echo $criminal_tb['criminal_tb_id'] ?>" />
       
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" value="<?php echo $criminal_tb['firstName'] ?>" id="firstName" name="firstName">
        </div>

        <div class="form-group">
            <label for="middleName">Middle Name</label>
            <input type="text" class="form-control" value="<?php echo $criminal_tb['middleName'] ?>" id="middleName" name="middleName">
        </div>

        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" value="<?php echo $criminal_tb['lastName'] ?>" id="lastName" name="lastName">
        </div>

        <div class="form-group">
            <label for="alias">Alias</label>
            <input type="text" class="form-control" value="<?php echo $criminal_tb['alias'] ?>" id="alias" name="alias">
        </div>


        <div class="form-group">
            <label for="dob">Date Of Birth</label>
            <input type="text" class="form-control" value="<?php echo $criminal_tb['dob'] ?>" id="dob" name="dob">
        </div>

        <label class="radio-inline">
        <input type="radio"  name="gender" id="male" value="male"  <?php if($criminal_tb['gender'] == 'male') echo 'checked' ?>> Male
        </label>
        
        <label class="radio-inline">
        <input type="radio"  name="gender" id="female" value="female" <?php if($criminal_tb['gender'] == 'female') echo 'checked' ?>> Female
        </label>

        
        <div class="form-group">
            <label for="idType">ID Type</label>
            <select class="form-control" id="idType" name="idType">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                   <option value="<?php echo $r['idType_id'] ?>" <?php if($r['idType_id'] == $criminal_tb['idType_id']) echo 'selected' ?>>
                        <?php echo $r['name']; ?>
                   </option>
                <?php }?>
            </select>
        </div>

        <div class="form-group">
            <label for="idNo">ID Number</label>
            <input required type="text" class="form-control" value="<?php echo $criminal_tb['idNo'] ?>" id="idNo" name="idNo">
        </div>


        <div class="form-group">
            <label for="h_address">Home Address</label>
            <input required type="text" class="form-control" value="<?php echo $criminal_tb['h_address'] ?>" id="h_address" name="h_address">
        </div>

        <div class="form-group">
            <label for="offence">Offence/Suspicion</label>
            <input required type="text" class="form-control" value="<?php echo $criminal_tb['offence'] ?>" id="offence" name="offence">
        </div>

        <div class="form-group">
            <label for="occupation">Occupation</label>
            <input required type="text" class="form-control" value="<?php echo $criminal_tb['occupation'] ?>" id="occupation" name="occupation">
        </div>    

         <div class="form-group">
            <label for="email">Email address</label>
            <input required type="email" class="form-control" value="<?php echo $criminal_tb['email'] ?>" id="email"  name="email" aria-describedby="emailHelp" >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
            <label for="phone">Police officer's contact number</label>
            <input type="text" class="form-control" value="<?php echo $criminal_tb['phone'] ?>" id="phone" name="phone" aria-describedby="phoneHelp" >
            <small id="phoneHelp" class="form-text text-muted">Your contact number will be confidential</small>
        </div>
           
           
        <div class="form-group">
            <label for="regNo">Reporting officer's regulation number</label>
            <input required type="text" class="form-control" value="<?php echo $criminal_tb['regNo'] ?>" id="regNo" name="regNo">
        </div>

          

        
        <a href="viewrecords.php" class="btn btn-default">Back To List</a>
        <button type="submit" name="submit" class="btn btn-success">Save Changes</button>
    </form>

<?php } ?>
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
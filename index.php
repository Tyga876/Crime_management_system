    
<?php
    $title = 'Index'; 

    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 

    $results = $crud->getIdType();

?>
    <!-- 
        - First name
        - Middle name
        - Last Name
        - alias
        - gender
        - idType
        - idNo
        - Date of Birth (Use DatePicker)
        - Occupation
        - Offence
        - email
    
        - Address 
        - phone
        - regNo   
     -->

    <h1 class="text-center">Registration of Crime Producers </h1>

    <!--enctype="multipart/form-data -->

    <form method="post" action="success.php" enctype="multipart/form-data">
       
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input required type="text" class="form-control" id="firstName" name="firstName">
        </div>
        

        <div class="form-group">
            <label for="middleName">Middle Name</label>
            <input required type="text" class="form-control" id="middleName" name="middleName">
        </div>

        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input required type="text" class="form-control" id="lastName" name="lastName">
        </div>

        <form method="post" action="success.php">
        <div class="form-group">
            <label for="alias">Alias</label>
            <input required type="text" class="form-control" id="alias" name="alias">
        </div>

        <div class="form-group">
            <label for="dob">Date Of Birth</label>
            <input type="text" class="form-control" id="dob" name="dob">
        </div>

        <!--<div class="form-group">
            <label for="gender">Gender</label>
            <input required type="text" class="form-control" id="lastname" name="lastname">
        </div>
        -->
        <h6>Please select gender </h6>
        <p>
        
        <label class="radio-inline">
        <input type="radio"  name="gender" id="male" value="male"> Male
        </label>
        <label class="radio-inline">
        <input type="radio"  name="gender" id="female" value="female"> Female
        </label>

        </P>

        <div class="form-group">
            <label for="h_address">Home Address</label>
            <input required type="text" class="form-control" id="h_address" name="h_address">
        </div>

        <div class="form-group">
            <label for="offence">Offence/Suspicion</label>
            <input required type="text" class="form-control" id="offence" name="offence" placeholder="eg. shooting with intent/suspected for committing simple larceny">
        </div>

        <div class="form-group">
            <label for="occupation">Occupation</label>
            <input required type="text" class="form-control" id="occupation" name="occupation">
        </div>       
           
        

        <div class="form-group">
            <label for="idNo">ID Number</label>
            <input required type="text" class="form-control" id="idNo" name="idNo">
        </div>

     <!--  
        <div class="form-group">
            <label for="idType">ID Type</label>
            <select class="form-control" id="idType" name="idType">           
               <option value="1">Passport</option>
               <option value="3">Drivers Licence</option>
               <option value="5">National ID</option>
               <option value="7">Birth Certificate</option>
            </select>
        </div>     

        -->
        <div class="form-group">
            <label for="idType">Id Type</label>
            <select class="form-control" id="idType" name="idType">           
            <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                   <option value="<?php  echo $r['idType_id'] ?>"><?php  echo $r['name']; ?></option>
                <?php  }?>
            </select>

            

        <div class="form-group">
            <label for="email">Email address</label>
            <input required type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp" >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="phone">Police officer's contact number</label>
            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" >
            <small id="phoneHelp" class="form-text text-muted">Your contact number will be confidential</small>
        </div>
        
        <div class="form-group">
            <label for="regNo">Reporting officer's regulation number</label>
            <input required type="text" class="form-control" id="regNo" name="regNo">
        </div>

        <div class="custom-file">
            <input type="file" accept="image/*" class="custom-file-input" id="ava" name="ava" >
            <label class="custom-file-label" for="ava">choose image file</label>
            <small id="ava" class="form-text text-muted">file upload is optional</small>
        </div>

        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
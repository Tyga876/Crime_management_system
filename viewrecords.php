<?php
    $title = 'View Records'; 

    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php'; 

    // Get all attendees
    $results = $crud->getCriminals();
?>


    <table class="table table-striped table-dark">
        <tr>
            <th>Ref#</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Alias</th>
            <th>Date Of Birth</th>
            <th>Gender</th>
            <th>Home Address</th>
            <th>Offence</th>
            <th>Occupation</th>
            <th>ID Number</th>
            <th>ID Type</th>
            <th>Email Address</th>
            <th>Telephone Number</th>
            <th>Police Officer Regulation Number</th>
            <th>Action</th>
           
        </tr>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
           <tr>
                <td><?php echo $r['criminal_tb_id'] ?></td>
                <td><?php echo $r['firstName'] ?></td>
                <td><?php echo $r['middleName'] ?></td>
                <td><?php echo $r['lastName'] ?></td>
                <td><?php echo $r['alias'] ?></td>
                <td><?php echo $r['dob'] ?></td>
                <td><?php echo $r['gender'] ?></td>
                <td><?php echo $r['h_address'] ?></td>
                <td><?php echo $r['offence'] ?></td>
                <td><?php echo $r['occupation'] ?></td>
                <td><?php echo $r['idNo'] ?></td>
                <td><?php echo $r['name'] ?></td>
                <td><?php echo $r['email'] ?></td>
                <td><?php echo $r['phone'] ?></td>
                <td><?php echo $r['regNo'] ?></td>
               
                <?php   if($_SESSION ['username']=='user'){ ?>
   
                <td>
                <a href="view.php?id=<?php echo $r['criminal_tb_id'] ?>" class="btn btn-primary">View</a>
                <a href="edit.php?id=<?php echo $r['criminal_tb_id'] ?>" class="btn btn-secondary btn-lg disabled">Edit</a>
                <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $r['criminal_tb_id'] ?>" class="btn btn-secondary btn-lg disabled">Delete </a>
                </td>
                <?php }?>
                

                <?php   if($_SESSION ['username']=='admin'){ ?>
   
                    <td>
                    <a href="view.php?id=<?php echo $r['criminal_tb_id'] ?>" class="btn btn-primary">View</a>
                    <a href="edit.php?id=<?php echo $r['criminal_tb_id'] ?>" class="btn btn-warning">Edit</a>            
                    <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $r['criminal_tb_id'] ?>" class="btn btn-danger">Delete </a>
                </td>
                <?php }?>
   

               
           </tr> 
        <?php }?>
    </table>

<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
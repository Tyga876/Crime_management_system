

<?php 
//prevent users from typing in url to bypass login

if(!isset ($_SESSION['userid'])){
    header("Location: login.php");
}

/*
if($_SESSION ['username']=='user'){
    header("Location: login.php");

}

*/

/*
<?
if(S_SESSION['userType'] == 'Admin') {
    //Show
}
if(S_SESSION['userType'] == 'User') {
    //Hide
}
?>

*/
?>
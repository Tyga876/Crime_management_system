 
<?php 
//this is to resume the session on this page
include_once 'includes/session.php' ?>

<!--session destroy() get rid of the session, header() then redirects to home page -->
<?php session_destroy();
      header('Location: index.php');
?>
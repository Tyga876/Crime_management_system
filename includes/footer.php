
<?php

include_once 'includes/session.php'


?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


    
        <div id="footer">
            <?php echo 'Tyrone Taylor Project-1600210214 ' . date('y'); ?>
        </div>
    </div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    /* Style the sidebar - fixed full height */
.sidebar {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 16px;
}

/* Style sidebar links */
.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

/* Style links on mouse-over */
.sidebar a:hover {
  color: #f1f1f1;
}

/* Style the main content */
.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

/* Add media queries for small screens (when the height of the screen is less than 450px, add a smaller padding and font-size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>

<body>
    <script>

    
        $( function() {
            $( "#dob" ).datepicker( {
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0",
                dateFormat: "yy-mm-dd"
            });
        } );
     </script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- The sidebar -->
<div class="sidebar">
<div align="right">
<h5 style="color:white">Follow us at:</h5>
<a href="https://www.facebook.com/search/top/?q=jcf%20page&ref=eyJzaWQiOiIwLjkzOTcyMjUyMjczMjYzMTEiLCJxcyI6IkpUVkNKVEl5YW1ObUpUSXdjR0ZuWlNVeU1pVTFSQSIsImd2IjoiYmVlMDlmOTNmYTczMmNmYTU5YTFjYjZkOWY0NTBkMzg5MjQyNGU0OSIsImVudF9pZHMiOltdLCJic2lkIjoiNDNmZTJhOGNhYTYyMTU3MjE4OGJkNDJhNDY2MDg5ZjkiLCJwcmVsb2FkZWRfZW50aXR5X2lkcyI6bnVsbCwicHJlbG9hZGVkX2VudGl0eV90eXBlIjpudWxsLCJyZWYiOiJicl90ZiIsImNzaWQiOm51bGwsImhpZ2hfY29uZmlkZW5jZV9hcmd1bWVudCI6bnVsbCwiY2xpZW50X3RpbWVfbXMiOjE1NzY1MTY1MDc1MDR9&epa=SEARCH_BOX"><img border="0" alt="W3Schools" src="img/facebook.png" width="60" height="50"></a>
<a href="https://www.instagram.com/jamaicaconstabularyforce/"><img border="0" alt="W3Schools" src="img/instagram.png" width="75" height="50"></a>
<a href="https://www.twitter.com"><img border="0" alt="W3Schools" src="img/twitter.png" width="60" height="50"></a>
  
  </div>
</div>

   
    </body>
</html>
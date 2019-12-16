<?php
    $title = 'home'; 

    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 
    require_once 'includes/footer.php'; 
    
    
   

    $results = $crud->getIdType();

?>

<!DOCTYPE html>
<html>
<head>
<style> 
#example1 {
 /* background-image: url(img.gif), url(paper.gif); */
  background-position: right bottom, left top;
  background-repeat: no-repeat, repeat;
  padding: 15px;
}

body {
  color: blue;
}

h1 {
  color:white;
}

h4 {
  color:white;
}

p {
  color:white;
}

h3 {
  color:white;
}

li {
  color:white;
}

body {
  background-image: url('img/bullett.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;


}
</style>
</head>
<body>





<h1 style="color:white">The Jamaica Constabulary force</h1>
<br>
<br>
<h4 style="color:white" >To serve, To protect, To reassure:</h4>


<br>
<br>
<br>
<h4 style="color:white">The national roles of the JCF are:</h4>

<ul>
  <li>To maintain law and order</li>
  <li>To assist in the prevention and detection of crime</li>
  <li>To investigate alleged crimes</li>
  <li>To protect life and property</li>
  <li>To enforce all criminal laws as defined by the Jamaican penal code</li>
  <li>To provide general assistance to the public</li>
</ul>




  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="color:white">Solving Crime Pays</h4>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/commish.jpg" alt="commish" style="width:70%;">
        <div class="carousel-caption">
        <h3 style="color:green">Police Commissioner Major General Anderson</h3>
        <p style="color:red">TO Serve and protect<p>
      </div>
      </div>

      <div class="item">
        <img src="img/policegirl.jpg" alt="policegirl" style="width:70%;">
        <div class="carousel-caption">
        <h3 style="color:green">Cons Taylor</h3>
        <p style="color:red">Lets work for a cause, not for applause<p>
      </div>
      </div>
    
      <div class="item">
        <img src="img/swat.jpg" alt="swat" style="width:70%;">
        <div class="carousel-caption">
        </div>
      </div>

     
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
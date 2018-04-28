<!DOCTYPE html>
<html>
<head>
<title>Job Inquiry</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js//jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
width: 25%;
margin: auto;
}
#pics{
background-image: url(jobimages/J2.jpg);
  color: black;
  text-decoration: bold;
    border: 5px solid black;
}
h3{
  color: black;
  text-decoration: bold;
}
p{
  color: black;
  text-decoration: bold;
}
.navbar-inverse{
    border-color:black;
  color: black;
  text-decoration: bold;
background-color: rgba(0,0,0,.0001)
}
#tx{
  color: black;
  text-decoration: bold;
}
body{
    background-image: url("jobimages/J12.jpg");
    background-repeat: no-repeat;
    background-position: center; top;
    background-attachment: fixed;
}
</style>
</head>
<body>

<?php include 'nav.php'; ?>

<div class="container" style="margin-top: 300px">
<br>
<div id="myCarousel" class="carousel slide" data-ride="carousel" style=" background-image: url(jobimages/J13.jpg);">
<!-- Indicators -->
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
<li data-target="#myCarousel" data-slide-to="3"></li>
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">

<div class="item active" id="pics">
<img src="jobimages/J9.png" alt="Chania" width="460" height="345">
</div>

<div class="item" id="pics">
<img src="jobimages/J7.jpg" alt="Chania" width="460" height="345">
</div>

<div class="item" id="pics">
<img src="jobimages/J8.jpg" alt="Flower" width="460" height="345">
</div>
<div class="item" id="pics">
<img src="jobimages/J11.jpg" alt="Flower" width="460" height="345">
</div>
</div>
</div>


<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
<title>Job Inquiry</title>
<link rel="shortcut icon" type="image/x-icon" href="herbalimages/11.jpg">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#b1").click(function(){
        $("#div1").fadeToggle("slow");
        $("#div1-2").fadeToggle(3000);
        
    });
});
$(document).ready(function(){
$("#b2").click(function(){
        $("#div2").fadeToggle("slow");
    });
});
</script>
<style>
body{
    background-image: url("jobimages/J12.jpg");
    background-repeat: no-repeat;
    background-position: center; top;
    background-attachment: fixed;
}
#b1{
    height: 50px;
    background-color: #B0C4DE;
    color: black;
    margin: auto;
    width: 100%;
    padding: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
	#div1{
    background-color: #B0C4DE;
    color: black;
    margin: auto;
    padding: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    display: none;
	}
	#div1-2{
    background-color: #B0C4DE;
    color: black;
    margin-top: 20px;
    padding: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    display: none;
	}
	#b2{
    height: 50px;
    background-color: #B0C4DE;
    color: black;
    margin-top: 20px;
    width: 100%;
    padding: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
	#div2{
    background-color: #B0C4DE;
    color: black;
    margin: auto;
    padding: 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    display: none;
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
.adjust
{
    position: relative;
    top: 70px;
}
p
{
    color: white;
}
</style>

</head>
<body>

<?php include 'nav.php'; ?>

<div class="container adjust">
<center><button id="b1"><strong>Introduction</strong></button></center>
	<div class="well" id="div1">
<h1><strong><center>Introduction</center></strong></h1>
<p>Job inquiry sites or system are used to give information on job seekers. This can be very helpful in many ways, especially to those job seekers who don’t want to waste their money for transportation, effort and time. Nowadays, we already have some sites or application that can use as a job reference but it may differ of usability and security.</p>
<h5><strong>Why we have chosen it?</strong></h5>
<p>We chose to developed this system because we know that someday we will be able to used or inneed of this kind of sites. So us, even we are still a student at this time we want to grab this oppurtunity to explore on how this sites are made and also we want to show the features that we are expecting to used on the time that we(the future user) will be the user.</p>


	</div>
	<div class="well" id="div1-2">
		<h5><strong>Our Possible Clients</strong></h5>
<p>The possible clients that will benefit this system are all companies that has a problem on how they will inform the public/Job seekers on their job vacancies</p>
<p>The companies should give their full details (e.g job vacancies, job details, company address, contact information, time when the applicants may come). This will be our requirements before posting the job vacancies the company have.</p>
	</div>

<center><button id="b2"><strong>Objectives and Features</strong></button></center>
	<div class="well" id="div2">
<h1><strong><center>Objectives and Features</center></strong></h1>
<h5>Expected features of Websites</h5>
<p>As we mention, we developed this system because we want to provide the feautures that we are expecting when the time come that we will be the user of this site</p>
<ul style="list-style-type: disc">
<li>Reduced time to hire</li>
<li>Wider reach for employers and candidates</li>
<li>Job details</li>
<li>Usability</li>
</ul>
<p>The user whose the job seekers are the subject of beneficiaries of our system because this will be theyre way to prevent inconvenience to them.</p>


	</div>
</div>

</body>
</html>

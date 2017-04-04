<!DOCTYPE html>
<?php require("includes/lang_system.php"); ?>

<html lang="en">
<head>
<title>Computer Science</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="home.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="scrol.js"></script>
<script src="hamburger.js"></script>

</head>
<body onLoad="checkSize()">

<button type="button" id="menuopen" onClick="slideOut()"><span class="glyphicon glyphicon-menu-hamburger"></span></button>

<div class="jumbotron">
<div class="container-fluid">
<div class="row">
  <div class="col-sm-9">
  <img src="Images\headercw.png" class="img-responsive" style="padding-left: 5%; width:80%;" alt="Image">
</div>
<div class="col-sm-3">
<div class="center-block">
  <div class="flag" id="staticflag"><a href="includes/lang_switch.php"><img src="Images\dflag.png" class="img-responsive img-thumbnail" alt="Image"></a></div>
  <div class="input-group" style="margin-right: 5%;">
          <input type="text" class="form-control img-responsive" placeholder="search...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>
        </div>
      </div>
      </div>
</div>
</div>
</div>
<button type="button" id="backtotop" class="btn btn-default btn-lg btn-block" style="vertical-align:middle"><span>Back to top</span></button>

<div id="slidermenu" >
<button type="button" id="menuclose" onClick="doMoreThings()"><span class="glyphicon glyphicon-remove"></span></button>
<div id="hidable">
<button type="button" onClick="document.getElementById('curriculum').scrollIntoView();" class="menubtn tuefont">Curriculum</button>
<button type="button" onClick="document.getElementById('exams').scrollIntoView();" class="menubtn tuefont">Exams</button>
<button type="button" onClick="document.getElementById('deadlines').scrollIntoView();" class="menubtn tuefont">Deadlines</button>
<button type="button" onClick="document.getElementById('contant').scrollIntoView();" class="menubtn tuefont">Contact</button>
</div>
</div>

<nav class="navbar navbar-default text-black">
<button type=""button class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
Show Menu<span class="caret"></span>
</button>
<div class="collapse navbar-collapse" id="myNavbar">
  <ul class="nav navbar-nav tuefont">
  <li><a href="home.html">Home</a></li>
  <li><a href="bachelor.php">Bachelor</a></li>
  <li><a href="pre-master.php">Pre-Master</a></li>
  <li><a href="master.php">Master</a></li>
  <li><a href="post-master.php">Post-Master</a></li>
</ul>
</div>
</nav>
<div class="container-fluid">
<div class="row">
<div class="col-sm-3"  id="more">
<div class="center-block tuefont sidemenu" id="fixedmenu">
    <button type="button" onClick="document.getElementById('curriculum').scrollIntoView();" class="btn btn-default btn-lg btn-block" style="vertical-align:middle"><span>Curriculum</span></button>
    <button type="button" onClick="document.getElementById('exams').scrollIntoView();" class="btn btn-default btn-lg btn-block" style="vertical-align:middle"><span>Exams</span></button>
    <button type="button" onClick="document.getElementById('deadlines').scrollIntoView();" class="btn btn-default btn-lg btn-block" style="vertical-align:middle"><span>Deadlines</span></button>
    <button type="button" onClick="document.getElementById('contact').scrollIntoView();" class="btn btn-default btn-lg btn-block" style="vertical-align:middle"><span>Contact</span></button>
</div>
</div>
<div class="col-sm-9 tuefont" id="fixedcontent">

  <?php ls('premasterhti'); ?>

</div>


<footer>
<div id="footercontact">
<div class="container-fluid text-left tuefont">
<div class="col">
  <h2>Contact</h2>
  <h3>Adress</h3> <h3>Postal Adress</h3> <br>
  <h4>De Zaale, Eindhoven   </h4> <h4>PO Box 513</h4> <br>
  <h4>T: +31 (0)40 247 9111</h4> <h4>5600 MB Eindhoven</h4> <br>
  <h4>E: info@tue.nl</h4>
</div>

<div class="col"> <h2>Social Media</h2>
  <a href="https://www.facebook.com/TU.Eindhoven" class="fa fa-facebook fa-lg"></a>
  <a href="https://twitter.com/TUeindhoven" class="fa fa-twitter fa-lg"></a>
  <a href="https://plus.google.com/+tueindhoven" class="fa fa-google-plus fa-lg"></a>
  <a href="https://www.linkedin.com/edu/school?id=15446" class="fa fa-linkedin fa-lg"></a>
  <a href="https://www.youtube.com/user/tueindhoven" class="fa fa-youtube fa-lg"></a>
</div>

<div class= "col">
<h2> Where innovation starts <br><br> © 2017 TU/e</h2>
</div>

</div>
</div>
</footer>
</body>
</html>

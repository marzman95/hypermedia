<!DOCTYPE html>
<?php require("../includes/lang_system.php"); ?>

<html lang="en">
<head>
  <title>Enrollment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="../scrol.js"></script>
  <script src="../hamburger.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body onLoad="checkSize()">

  <button type="button" id="menuopen" onClick="slideOut()"><span class="glyphicon glyphicon-menu-hamburger"></span></button>

  <div class="jumbotron">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-9">
          <img src="../Images/headercw.png" class="img-responsive" style="padding-left: 5%; width:80%;" alt="Image">
        </div>
        <div class="col-sm-3">
          <div class="center-block">
            <div class="flag" id="staticflag"><a href="../includes/lang_switch.php"><img src="../Images/dflag.png" class="img-responsive img-thumbnail" alt="Image"></a></div>
            <div class="input-group" style="margin-right: 5%;">
              <form action="../search.php" method="POST">
                <input type="text" name="searchField" class="form-control img-responsive" placeholder="search...">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                  </button>
                </span>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-default text-black">
    <button type=""button class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      Menu<span class="caret"></span>
    </button>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav tuefont">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../bachelor.php">Bachelor</a></li>
        <li><a href="../pre_master.php">Pre-Master</a></li>
        <li><a href="../master.php">Master</a></li>
        <li><a href="../post_master.php">Post-Master</a></li>
      </ul>
    </div>
  </nav>

  <div id="slidermenu" >
  	<button type="button" id="menuclose" onClick="doMoreThings()"><span class="glyphicon glyphicon-remove"></span></button>
      <div id="hidable">
      <a href="enrollment.php"><button type="button" class="menubtn tuefont">Enrollment</button></a>
  		<a href="https://www.tue.nl/en/education/studying-at-tue/study-costs-scholarships-and-grants/tuition-fees-2016-2017/"><button type="button" class="menubtn tuefont">Tuition Fees</button></a>
      <a href="students_statute.php"><button type="button" class="menubtn tuefont">Students Statute</button></a>
  		<a href="https://www.tue.nl/en/university/about-the-university/organization/support-services/ict-services/"><button type="button" class="menubtn tuefont">ICT Services</button></a>
      <a href="http://mytue.tue.nl"><button type="button" class="menubtn tuefont">MyTue</button></a>
      <a href="timeslots.php"><button type="button" class="menubtn tuefont">Timeslots</button></a>
	  <a href="agenda.php"><button type="button" class="menubtn tuefont">Acedemic Year Agenda</button></a>
	  <a href="https://www.tue.nl/"><button type="button" class="menubtn tuefont">Future Students</button></a>
      </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3" id="more">
        <div class="center-block tuefont sidemenu" id="fixedmenu">
          <a href="enrollment.php" role="button" class="btn btn-default btn-lg btn-block font-smaller" style="vertical-align:middle"><span>Enrollment</span></a>
          <a href="https://www.tue.nl/en/education/studying-at-tue/study-costs-scholarships-and-grants/tuition-fees-2016-2017/" role="button" class="btn btn-default btn-lg btn-block font-smaller" style="vertical-align:middle"><span>Tuition fees</span></a>
          <a href="students_statute.php" role="button" class="btn btn-default btn-lg btn-block font-smaller" style="vertical-align:middle"><span>Students Statute</span></a>
          <a href="https://www.tue.nl/en/university/about-the-university/organization/support-services/ict-services/" role="button" class="btn btn-default btn-lg btn-block font-smaller" style="vertical-align:middle"><span>ICT Services</span></a>
          <a href="http://mytue.tue.nl" role="button" class="btn btn-default btn-lg btn-block font-smaller" style="vertical-align:middle"><span>MyTue</span></a>
          <a href="timeslots.php" role="button" class="btn btn-default btn-lg btn-block font-smaller" style="vertical-align:middle"><span>Timeslots</span></a>
          <a href="agenda.php" role="button" class="btn btn-default btn-lg btn-block font-smaller" style="vertical-align:middle"><span>Academic Year Agenda</span></a>
          <a href="https://www.tue.nl/" role="button" class="btn btn-default btn-lg btn-block font-smaller" style="vertical-align:middle"><span>Future Students</span></a>
        </div>
      </div>

      <div class="col-sm-9 tuefont" id="fixedcontent">
        <div class="row">

          <?php ls('enrolling'); ?>

        </div>
      </div>
    </div>
  </div>

  <br>
  <br>

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

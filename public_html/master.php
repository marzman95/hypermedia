<!DOCTYPE html>
<?php require("includes/lang_system.php"); ?>
<html lang="en">
<head>
  <title>Masters</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="scrol.js"></script>
  <script src="hamburger.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body onLoad="checkSize()">

  <button type="button" id="menuopen" onClick="slideOut()"><span class="glyphicon glyphicon-menu-hamburger"></span></button>

  <div class="jumbotron">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-9">
          <img src="Images/headercw.png" class="img-responsive" style="padding-left: 50px; width:80%;" alt="Image">
        </div>
        <div class="col-sm-3">
          <div class="center-block">
            <div class="flag" id="staticflag"><a href="includes/lang_switch.php"><img src="Images/dflag.png" class="img-responsive img-thumbnail" alt="Image"></a></div>
            <form action="search.php" method="POST">
              <div class="input-group" style="margin-right: 5%;">
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
        <li><a href="index.php">Home</a></li>
        <li><a href="bachelor.php">Bachelor</a></li>
        <li><a href="pre_master.php">Pre-Master</a></li>
        <li><a href="master.php">Master</a></li>
        <li><a href="post_master.php">Post-Master</a></li>
      </ul>
    </div>
  </nav>

  <div id="slidermenu" >
    <button type="button" id="menuclose" onClick="doMoreThings()"><span class="glyphicon glyphicon-remove"></span></button>
    <div id="hidable">
      <a href="master/prof_skills.php"><button type="button" class="menubtn tuefont">Professional skills</button></a>
      <a href="master/exchange.php"><button type="button" class="menubtn tuefont">Exchange options</button></a>
      <a href="master/coaching.php"><button type="button" class="menubtn tuefont">Coaching</button></a>
      <a href="master/honors.php"><button type="button" class="menubtn tuefont">Master's honors</button></a>
      <a href="https://www.tue.nl/en/education/tue-graduate-school/masters-programs/"><button type="button" class="menubtn tuefont">Future students</button></a>
      <a href="master/regulations.php"><button type="button" class="menubtn tuefont">Regulations</button></a>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3" id="more">
        <div class="center-block tuefont sidemenu" id="fixedmenu">
          <a href="master/prof_skills.php" role="button" class="btn btn-default btn-lg btn-block font-smaller" style="vertical-align:middle"><span>Professional skills</span></a>
          <a href="master/exchange.php" role="button" class="btn btn-default btn-lg btn-block font-smaller" style="vertical-align:middle"><span>Exchange options</span></a>
          <a href="master/coaching.php" role="button" class="btn btn-default btn-lg btn-block font-smaller" style="vertical-align:middle"><span>Coaching</span></a>
          <a href="master/honors.php" role="button" class="btn btn-default btn-lg btn-block font-smaller" style="vertical-align:middle"><span>Master's Honors</span></a>
          <a href="https://www.tue.nl/en/education/tue-graduate-school/masters-programs/" role="button" class="btn btn-default btn-lg btn-block font-smaller" style="vertical-align:middle"><span>Future Students</span></a>
          <a href="master/regulations.php" role="button" class="btn btn-default btn-lg btn-block font-smaller" style="vertical-align:middle"><span>Regulations</span></a>
        </div>
      </div>

      <div class="col-sm-9 tuefont" id="fixedcontent">

        <?php ls('master_home'); ?>

        <br>
        <br>

        <div class="row">
          <div class="col-md-2">
            <a href="#"><div class="bachelor-block center-block"><span class="fa fa-calculator fa-2x"></span><br>Applied Mathematics</div></a>
          </div>
          <div class="col-md-2">
            <a href="#"><div class="bachelor-block center-block"><span class="fa fa-rocket fa-2x"></span><br>Applied Physics</div></a>
          </div>
          <div class="col-md-2">
            <a href="#"><div class="bachelor-block center-block"><span class="fa fa-building-o fa-2x"></span><br>Architecture, Urbanism &amp; Building Sciences</div></a>
          </div>
          <div class="col-md-2">
            <a href="#"><div class="bachelor-block center-block"><span class="fa fa-car fa-2x"></span><br>Automotive Technology</div></a>
          </div>
          <div class="col-md-2">
            <a href="#"><div class="bachelor-block center-block"><span class="fa fa-heartbeat fa-2x"></span><br>Biomedical Engineering</div></a>
          </div>
          <div class="col-md-2">
            <a href="#"><div class="bachelor-block center-block"><span class="fa fa-thermometer-full fa-2x"></span><br>Chemical Engineering &amp; Chemistry</div></a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <a href="master/cs.php"><div class="bachelor-block center-block"><span class="fa fa-laptop fa-2x"></span><br>Computer Science &amp; Engineering</div></a>
          </div>
          <div class="col-md-2">
            <a href="#"><div class="bachelor-block center-block"><span class="fa fa-floppy-o fa-2x"></span><br>Data Science</div></a>
          </div>
          <div class="col-md-2">
            <a href="#"><div class="bachelor-block center-block"><span class="fa fa-lightbulb-o fa-2x"></span><br>Electrical Engineering</div></a>
          </div>
          <div class="col-md-2">
            <a href="#"><div class="bachelor-block center-block"><span class="fa fa-industry fa-2x"></span><br>Industrial Design</div></a>
          </div>
          <div class="col-md-2">
            <a href="#"><div class="bachelor-block center-block"><span class="fa fa-eur fa-2x"></span><br>Industrial Engineering</div></a>
          </div>
          <div class="col-md-2">
            <a href="#"><div class="bachelor-block center-block"><span class="fa fa-wrench fa-2x"></span><br>Mechanical Engineering</div></a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <a href="#"><div class="bachelor-block center-block"><span class="fa fa-stethoscope fa-2x"></span><br>Medical Sciences &amp; Technology</div></a>
          </div>
          <div class="col-md-2">
            <a href="master/hti.php"><div class="bachelor-block center-block"><span class="fa fa-users fa-2x"></span><br>Human-Technology Interaction</div></a>
          </div>
          <div class="col-md-2">
            <a href="#"><div class="bachelor-block center-block"><span class="fa fa-sun-o fa-2x"></span><br>Sustainable Innovation</div></a>
          </div>
          <div class="col-md-6">
          </div>
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

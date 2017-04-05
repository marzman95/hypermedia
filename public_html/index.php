<!DOCTYPE html>
<html lang="en">
<head>
  <title>Education guide</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="home.js"></script>
</head>
<body class="backgroundimg" onLoad="checkSize()">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-9">
        <img src="Images/headercw.png" class="img-responsive" style="padding-left: 50px; width:80%;" alt="Image">
      </div>
      <div class="col-sm-3">
        <div class="center-block">
          <div class="flag" id="staticflag"><img src="Images/dflag.png" class="img-responsive img-thumbnail" alt="Image"></div>
          <div class="input-group" style="margin-right: 5%;">
            <form action="search.php" method="POST">
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

  <div id="mainblocks">
    <div class="container-fluid home-blocks tuefont">
      <div class="row">
        <div class="col-sm-3">
          <div class="panel panelbachelor">
            <button type="button" onclick="location.href='bachelor.php';" class="mainbtn">
              <div class="panel-heading">Bachelor</div>
              <div class="panel-body"><img src="Images\bachelor.jpg" class="img-responsive img-thumbnail" style="width:100%" alt="Image"></div>
              <div class="panel-footer">Learn more about the bachelor programs</div>
            </button>
          </div>
        </div>

        <div class="col-sm-3">
          <div class="panel panelpre">
            <button type="button" onclick="location.href='pre_master.php';" class="mainbtn">
              <div class="panel-heading">Pre-master</div>
              <div class="panel-body"><img src="Images\pre-master.jpg" class="img-responsive img-thumbnail" style="width:100%" alt="Image"></div>
              <div class="panel-footer">Learn more about the pre-master's programs</div>
            </button>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="panel panelmaster">
            <button type="button" onclick="location.href='master.php';" class="mainbtn">
              <div class="panel-heading">Master</div>
              <div class="panel-body"><img src="Images\master.jpg" class="img-responsive img-thumbnail" style="width:100%" alt="Image"></div>
              <div class="panel-footer">Learn more about the master's programs</div>
            </button>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="panel panelpost">
            <button type="button" onclick="location.href='post_master.php';" class="mainbtn">
              <div class="panel-heading">Post-master</div>
              <div class="panel-body"><img src="Images\post-master.jpg" class="img-responsive img-thumbnail" style="width:100%" alt="Image"></div>
              <div class="panel-footer">Learn more about the post-master's programs</div>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="mainblocksmobile">
    <div class="container-fluid tuefont">
      <div class="row">
        <div class="col-xs-6">
          <div class="panel">
            <button type="button" onclick="location.href='bachelor.php';" id="bachelorbtnmobile">
              <div class="panel-heading">Bachelor</div>
              <div class="panel-footer">Learn more about the<br>bachelor programs</div>
            </button>
          </div>
        </div>
        <div class="col-xs-6">
          <div class="panel">
            <button type="button" onclick="location.href='pre_master.php';" id="prebtnmobile">
              <div class="panel-heading">Pre-master</div>
              <div class="panel-footer">Learn more about the<br>pre-master's programs</div>
            </button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6">
          <div class="panel">
            <button type="button" onclick="location.href='master.php';" id="masterbtnmobile">
              <div class="panel-heading">Master</div>
              <div class="panel-footer">Learn more about the<br>master's programs</div>
            </button>
          </div>
        </div>
        <div class="col-xs-6">
          <div class="panel">
            <button type="button" onclick="location.href='post_master.php';" id="postbtnmobile">
              <div class="panel-heading">Post-master</div>
              <div class="panel-footer">Learn more about the<br>post-master's programs</div>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <nav class="navbar navbar-default text-black" id="footermenu">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="caret"></span></span>
      </button>
      <div id="menuname">
        <h5>More information:</h5>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav tuefont">
          <li><a href="general/enrollment.php">Enrollment</a></li>
          <li><a href="https://www.tue.nl/en/education/studying-at-tue/study-costs-scholarships-and-grants/tuition-fees-2016-2017/">Tuition Fees</a></li>
          <li><a href="general/students_statute.php">Students Statute</a></li>
          <li><a href="https://www.tue.nl/en/university/about-the-university/organization/support-services/ict-services/">ICT Services</a></li>
          <li><a href="http://mytue.tue.nl">MyDay</a></li>
          <li><a href="general/timeslots.php">Timeslots</a></li>
          <li><a href="general/agenda.php">Academic Year Agenda</a></li>
          <li><a href="http://tue.nl">Future Students</a></li>
        </ul>
      </div>
    </nav>

    <div id="footerlinks">
      <div class="tuefont">
        <h5>More information:</h5>
        <div class="btn-group btn-group-justified" role="group" aria-label="...">
          <div class="btn-group" role="group">
            <button type="button" onclick="location.href='general/enrollment.php';" class="btn btn-default"><span>Enrollment</span></button>
          </div>
          <div class="btn-group" role="group">
            <button type="button" onclick="location.href='https://www.tue.nl/en/education/studying-at-tue/study-costs-scholarships-and-grants/tuition-fees-2016-2017/';" class="btn btn-default"><span>Tuition Fees</span></button>
          </div>
          <div class="btn-group" role="group">
            <button type="button" onclick="location.href='general/students_statute.php';" class="btn btn-default"><span>Students Statute</span></button>
          </div>
          <div class="btn-group" role="group">
            <button type="button" onclick="location.href='https://www.tue.nl/en/university/about-the-university/organization/support-services/ict-services/';" class="btn btn-default"><span>ICT Services</span></button>
          </div>
        </div>
        <div class="btn-group btn-group-justified" role="group" aria-label="...">
          <div class="btn-group" role="group">
            <button type="button" onclick="location.href='http://mytue.tue.nl';" class="btn btn-default"><span>MyDay</span></button>
          </div>
          <div class="btn-group" role="group">
            <button type="button" onclick="location.href='general/timeslots.php';" class="btn btn-default"><span>Timeslots</span></button>
          </div>
          <div class="btn-group" role="group">
            <button type="button" onclick="location.href='general/agenda.php';" class="btn btn-default"><span>Academic Year Agenda</span></button>
          </div>
          <div class="btn-group" role="group">
            <button type="button" onclick="location.href='https://www.tue.nl/';" class="btn btn-default"><span>Future Students</span></button>
          </div>
        </div>
      </div>
    </div>

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

<?php
  include('../Join/register.php');
  include('playerregister.php');
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Player Registration Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dongle&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../Landing Page/css/Landingstyle.css">
  <link rel="stylesheet" type="text/css" href="css/Playerstyle.css">
  <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
</head>



<body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="../Landing Page/homepage.php"><img src="../Landing Page/img/cricketlogo.png" alt=""></a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse-man">
        <ul class="nav navbar-nav navbar-right">
          <li><a class="active" href="../Player Registration Form/playerRegistration.php">PLAYER</a></li>
          <li><a href="../Team Information Form/teamInfoForm.php">TEAM</a></li>
          <!-- <li><a href="../Contract Form/contractForm.php">CONTRACT</a></li> -->
          <li><a href="../Club Registration Form/clubRegistration.php">CLUB</a></li>
          
          <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="glyphicon glyphicon-cog"></i></a>
                <ul class="dropdown-menu" role="menu">
                   <li class="divider"></li>
                   <li><a href="../Profile/profile.php"><i class="glyphicon glyphicon-user"></i>&nbsp; Profile</a></li>
                   <li class="divider"></li>
                   <li><a href="../Profile/logout.php"><i class="glyphicon glyphicon-log-out"></i>&nbsp; Logout</a></li>
                </ul>
            </li>
        </ul>
      </div>
    </div>
  </nav>



  <section>
    <div class="container-fluid">
      <div class="container">
        <div class="formBox">
          <form action="playerRegistration.php" method="post" role="form">
            <div class="row">
              <div class="col-sm-12">
                <h1>Player Registration Form</h1>
              </div>

              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">First Name:</div>
                  <input type="text" name="firstname" class="input" required>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Middle Name:</div>
                  <input type="text" name="middlename" class="input">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Last Name:</div>
                  <input type="text" name="lastname" class="input">
                </div>
              </div>

              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Father's Name:</div>
                  <input type="text" name="fathername" class="input">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Mother's Name:</div>
                  <input type="text" name="mothername" class="input">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Age:</div>
                  <input type="text" name="dob" class="input">
                </div>
              </div>


              <!--   PRESENT ADDRESS   --->
              <div class="col-sm-12">
                <h4>Present Address</h4>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">House No.</div>
                  <input type="text" name="pr_house" class="input">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Location</div>
                  <input type="text" name="pr_location" class="input">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Village/Street</div>
                  <input type="text" name="pr_village" class="input">
                </div>
              </div>

              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Thana</div>
                  <input type="text" name="pr_thana" class="input">
                </div>
              </div>

              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">District</div>
                  <input type="text" name="pr_district" class="input">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Post code</div>
                  <input type="text" name="pr_postcode" class="input">
                </div>
              </div>


              <!--   PERMANENT ADDRESS   --->
              <div class="col-sm-12">
                <h4>Permanent Address</h4>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">House No.</div>
                  <input type="text" name="per_house" class="input">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Location</div>
                  <input type="text" name="per_location" class="input">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Village/Street</div>
                  <input type="text" name="per_village" class="input">
                </div>
              </div>

              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Thana</div>
                  <input type="text" name="per_thana" class="input">
                </div>
              </div>

              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">District</div>
                  <input type="text" name="per_district" class="input">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="inputBox">
                  <div class="inputText">Post code</div>
                  <input type="text" name="per_postcode" class="input">
                </div>
              </div>
              

              <div class="col-sm-12">
                <input type="submit" name="player-reg-button" class="player-reg-button" value="Submit">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

<!--   <div class="copyright">
    <p>©2021 | All right reserved by Soma Charan Sai</p>
  </div> -->

  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript">
    $(".input").focus(function() {
      $(this).parent().addClass("focus")
    }).blur(function() {
      if ($(this).val() === '') {
        $(this).parent().removeClass("focus");
      }
    })
  </script>

</body>

</html>

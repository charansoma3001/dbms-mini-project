<?php
  $db = mysqli_connect('localhost', 'root', '', 'teaminfo');
  require_once("../includes.html");

  $clubid = '';
  $playerid = '';
  $tfdate = '';
  $eventname = '';
  $teamleaderid = '';
  $playername = '';
  $coachid = '';
  $coachname = '';

  $playerid_01 = '';
  $playername_01 = '';
  $playerid_02 = '';
  $playername_02 = '';
  $playerid_03 = '';
  $playername_03 = '';


  if(isset($_POST['team-reg-btn'])){
    $clubid = mysqli_real_escape_string($db, $_POST['clubid']);
    $playerid = mysqli_real_escape_string($db, $_POST['playerid']);
    $tfdate = mysqli_real_escape_string($db, $_POST['tfdate']);
    $eventname = mysqli_real_escape_string($db, $_POST['eventname']);
    $teamleaderid = mysqli_real_escape_string($db, $_POST['teamleaderid']);
    $playername = mysqli_real_escape_string($db, $_POST['playername']);
    $coachid = mysqli_real_escape_string($db, $_POST['coachid']);
    $coachname = mysqli_real_escape_string($db, $_POST['coachname']);


    // $playerid_01 = mysqli_real_escape_string($db, $_POST['playerid_01']);
    // $playername_01 = mysqli_real_escape_string($db, $_POST['playername_01']);


    $sql = "INSERT INTO teamreg (clubid, playerid, teamleaderid, tfdate, event_id, playername, coachid, coachname) VALUES ('$clubid', '$playerid', '$teamleaderid', '$tfdate', '$eventname', '$playername', '$coachid', '$coachname')";
    

    try {
      $query = mysqli_query($db, $sql);

      if($query == 1){

         $sql_01 = "INSERT INTO teamplayer (clubid, teamleaderid, coachid, playerid, playername) VALUES ('$clubid', '$teamleaderid', '$coachid', '$playerid_01', '$playername_01')";
         $query_01 = mysqli_query($db, $sql_01);
         
       }
       echo "<script>
    swal({ 
        title: 'Successful!!',
        text: 'Welcome!',
        type: 'success' 
        },
        function(){
            window.location.href = 'teamInfoForm.php';
            });
            </script>";
    }

    catch (mysqli_sql_exception) {
      echo "<script>
      swal({ 
          title: 'Invalid IDs!',
          text: 'Please enter only numeric values in place of IDs!',
          type: 'error' 
          },
          function(){
              window.location.href = 'teamInfoForm.php';
              });
              </script>";
    }
    
  }
 ?>

<?php
  session_start();
   $db = mysqli_connect('localhost', 'root', '', 'registration');
   require_once("../includes.html");

  $clubname = '';
  $estdate = '';
  $house = '';
  $location = '';
  $village = '';
  $thana = '';
  $district = '';
  $postcode = '';
  $president = '';


  if(isset($_POST['club-reg-button'])){
    $clubname = mysqli_real_escape_string($db, $_POST['clubname']);
    $estdate = mysqli_real_escape_string($db, $_POST['estdate']);
    $house = mysqli_real_escape_string($db, $_POST['house']);
    $location = mysqli_real_escape_string($db, $_POST['location']);
    $village = mysqli_real_escape_string($db, $_POST['village']);
    $thana = mysqli_real_escape_string($db, $_POST['thana']);
    $district = mysqli_real_escape_string($db, $_POST['district']);
    $postcode = mysqli_real_escape_string($db, $_POST['postcode']);
    $president = mysqli_real_escape_string($db, $_POST['president']);

       $sql = "INSERT INTO clubreg (clubname, estdate, house, location, village, thana, district, postcode, president) VALUES ('$clubname', '$estdate', '$house', '$location', '$village', '$thana', '$district', '$postcode', '$president')";
      mysqli_query($db, $sql);

      echo "<script>
    swal({ 
        title: 'Successful!!',
        text: 'Welcome!',
        type: 'success' 
        },
        function(){
            window.location.href = 'clubRegistration.php';
            });
            </script>";

  }
 ?>

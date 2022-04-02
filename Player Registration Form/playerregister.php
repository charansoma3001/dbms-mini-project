<?php
   $db = mysqli_connect('localhost', 'root', '', 'player');
   require_once("../includes.html");

  $firstname = '';
  $middlename = '';
  $lastname = '';
  $fathername = '';
  $mothername = '';

  $pr_house = '';
  $pr_location = '';
  $pr_village = '';
  $pr_thana = '';
  $pr_district = '';
  $pr_postcode = '';

  $per_house = '';
  $per_location = '';
  $per_village = '';
  $per_thana = '';
  $per_district = '';
  $per_postcode = '';
  $dob = '';



  // PREVIOUS HISTORY

  $player_id = '';
  $clubname = '';
  $clubfrom = '';
  $clubto = '';
  $run = '';
  $wicket = '';
  $teamleader = '';


  if(isset($_POST['player-reg-button'])){
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $middlename = mysqli_real_escape_string($db, $_POST['middlename']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $fathername = mysqli_real_escape_string($db, $_POST['fathername']);
    $mothername = mysqli_real_escape_string($db, $_POST['mothername']);

    $pr_house = mysqli_real_escape_string($db, $_POST['pr_house']);
    $pr_location = mysqli_real_escape_string($db, $_POST['pr_location']);
    $pr_village = mysqli_real_escape_string($db, $_POST['pr_village']);
    $pr_thana = mysqli_real_escape_string($db, $_POST['pr_thana']);
    $pr_district = mysqli_real_escape_string($db, $_POST['pr_district']);
    $pr_postcode = mysqli_real_escape_string($db, $_POST['pr_postcode']);

    $per_house = mysqli_real_escape_string($db, $_POST['per_house']);
    $per_location = mysqli_real_escape_string($db, $_POST['per_location']);
    $per_village = mysqli_real_escape_string($db, $_POST['per_village']);
    $per_thana = mysqli_real_escape_string($db, $_POST['per_thana']);
    $per_district = mysqli_real_escape_string($db, $_POST['per_district']);
    $per_postcode = mysqli_real_escape_string($db, $_POST['per_postcode']);
    $dob = mysqli_real_escape_string($db, $_POST['dob']);


       $sql = "INSERT INTO playerreg (firstname, middlename, lastname, fathername, mothername, pr_house, pr_location, pr_village, pr_thana, pr_district, pr_postcode, per_house, per_location, per_village, per_thana, per_district, per_postcode, dob) VALUES ('$firstname', '$middlename', '$lastname', '$fathername', '$mothername', '$pr_house', '$pr_location', '$pr_village', '$pr_thana', '$pr_district', '$pr_postcode', '$per_house', '$per_location', '$per_village', '$per_thana', '$per_district', '$per_postcode', '$dob')";
       try{
         $query = mysqli_query($db, $sql);

         echo "<script>
    swal({ 
        title: 'Successful!!',
        text: 'Welcome!',
        type: 'success' 
        },
        function(){
            window.location.href = 'playerRegistration.php';
            });
            </script>";
       }
       
       

       catch (mysqli_sql_exception) {
         echo "<script>
         swal({ 
             title: 'Invalid Age!',
             text: 'Please register if only above 18 years!',
             type: 'error' 
             },
             function(){
                 window.location.href = 'playerRegistration.php';
                 });
                 </script>";
       }
       

  }
 ?>

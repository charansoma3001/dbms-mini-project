<?php
  require_once("../includes.html");


  echo "<script>
    swal({ 
        title: 'You have been logged out!!',
        text: 'See you soon!',
        type: 'success' 
        },
        function(){
          window.location.href = '../Landing Page/landingpage.php';
            });
            </script>";
  session_start();
  session_unset();
  
  // header('location:../Landing Page/landingpage.php');
 ?>

<?php 
   error_reporting(E_ALL);

  

   if (isset($_POST['submit'])) {



       $server = 'localhost';
      $user = 'root';
      $password = '';
      $dbname = 'emma_work';

      $conn = new mysqli($server, $user, $password, $dbname);
      if ($conn->connect_error) {
         die("please contact your admin" . $conn->connect_error);
      }




      $mydate = $_POST['mydate'];
      $ptitle = $_POST['ptitle'];
      $client = $_POST['client'];
      $noofdays = $_POST['noofdays'];
      $noofpersonnel = $_POST['noofpersonnel'];
      $act = $_POST['act'];
      $nextplan = $_POST['nextplan'];
      $tools = $_POST['tools'];
      $observations = $_POST['observations'];


    $sql = "INSERT INTO daily_site_report(`report_date`, `title`, `client`, `nosof_days_onsite`, `nosof_personnel`, `activities`, `next_plan`, `listof_tools`, `observation`) VALUES ('$mydate','$ptitle','$client','$noofdays','$noofpersonnel','$act','$nextplan','$tools','$observations')";


      //  var_dump($sql);
      // exit();

      if ($conn->query($sql) === TRUE) {
         echo "
         <script>
            alert('data successfully submitted');
         </script>";

      }else{
      echo "
      <script>
         alert('please re-submit your details');
      </script>
      ";
   }
   
      
     
   }
?>



 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DAILY SITE REPORT</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">


     <style type="text/css">
        .form-control{
         border: 2px solid #000;
        }

        body{
         background-image: url('assets/img/contract.jpg');
         background-repeat: no-repeat;
        }
     </style>
 </head>
 <body>
     <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <!--<h1><a href="index.html">TECHINSTANT</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html"><img src="assets/img/logo.jpg" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="Daily Report.php">Daily Report</a></li>
          <li><a class="nav-link scrollto" href="Daily SIte Report.php">Daily Site Report</a></li>
          <li><a class="nav-link scrollto " href="project report.php">project Report</a></li>
          <li><a class="nav-link scrollto" href="Project weekly Report.php">Project weekly Report</a></li>
          <!--<li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>--------->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

   <!--===============header====================-->

   <div class="container">
      
      <div class="row text-center">
         <div class="col-sm-8">
            <h3>TORCH ENERGY SERVICES</h3>
         </div>
      </div>
      <div class="row text-center">
         <div class="col-sm-8">
            <h5>DAILY SITE REPORT</h5>

         </div>
      </div>
   </div>
   <form action="" method="post" role="form">

      <div class="container">
      <br>
      <div class="row"> 
          <div class="form-group col-sm-4">
            <input type="date" name="mydate" class="form-control" required />
          </div>

          <div class="form-group col-sm-4">
            <input type="text" name="ptitle" class="form-control" placeholder="Project title" required />
          </div>
      </div>

      <div class="row">
         <div class="form-group col-sm-4">
            <input type="text" class="form-control" name="client" placeholder="Client" required />
         </div>

         <div class="form-group col-sm-4">
            <input type="number" class="form-control" name="noofdays" placeholder="Number of days on Site" required />
         </div>
      </div>

      <div class="row">
          <div class="form-group col-sm-4">
            <input type="number" class="form-control" name="noofpersonnel" placeholder="Number of personnel" required />
         </div>
      </div>
      <div class="row"> 
         <div class="form-group col-sm-8">
            <textarea class="form-control" name="act" rows="4" cols="8" placeholder="Activities Performed" required></textarea>
         </div>
      </div>

      <div class="row">
         <div class="form-group col-sm-4">
            <textarea class="form-control" name="nextplan" rows="2" placeholder="Next Plan" required></textarea>
          </div>

          <div class="form-group col-sm-4">
            <textarea class="form-control" name="tools" rows="2" placeholder="List of equipment/Tools" required></textarea>
          </div>
      </div>

      <div class="row"> 
         <div class="form-group col-sm-8">
            <textarea class="form-control" name="observations" rows="2" placeholder="Observation Challenges/Challenges On site" required></textarea>
         </div>
      </div>
      <div class="row"> 
         <div class="col-sm-4">
            <button type="submit" name="submit">Submit data</button>
         </div>

      </div>
   
   </div>


   
    


  </form>
 </body>
 </html>

 

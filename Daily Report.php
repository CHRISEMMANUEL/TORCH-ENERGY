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


      $client = $_POST['client'];
      $contract = $_POST['contract'];
      $project_name = $_POST['project_name'];
      $dailyreport_no = $_POST['dailyreport_no'];
      $dailyreport_day = $_POST['dailyreport_day'];
      $dailyreport_date = $_POST['dailyreport_date'];
      $general_activities = $_POST['general_activities'];
      $activities_performed_today = $_POST['activities_performed_today'];
      $activities_planned_tomorrow = $_POST['activities_planned_tomorrow'];
      $torch_qty = $_POST['torch_qty'];
      $client_qty = $_POST['client_qty'];
      $sub_contractor_qty = $_POST['sub_contractor_qty'];
      $community_qty = $_POST['community_qty'];
      $equipment_1 = $_POST['equipment_1'];
      $equipment_2 = $_POST['equipment_2'];
      $equipment_3 = $_POST['equipment_3'];
      $equipment_4 = $_POST['equipment_4'];
      $equipment_5 = $_POST['equipment_5'];
      $equipment_6 = $_POST['equipment_6'];
      $equipment_1_qty = $_POST['equipment_1_qty'];
      $equipment_2_qty = $_POST['equipment_2_qty'];
      $equipment_3_qty = $_POST['equipment_3_qty'];
      $equipment_4_qty = $_POST['equipment_4_qty'];
      $equipment_5_qty = $_POST['equipment_5_qty'];
      $equipment_6_qty = $_POST['equipment_6_qty'];
      $unsafe_act = $_POST['unsafe_act'];
      $unsafe_condition = $_POST['unsafe_condition'];
      $accident = $_POST['accident'];
      $environmental_condition = $_POST['environmental_condition'];
      $others = $_POST['others'];
      $miscellaneous_report = $_POST['miscellaneous_report'];
      $name_reportby = $_POST['name_reportby'];
      $name_approvedby = $_POST['name_approvedby'];
      $reportedby_date = $_POST['reportedby_date'];
      $approvedby_date = $_POST['approvedby_date'];
      

      

    $sql = "INSERT INTO `daily_report`( `client`, `contract`, `project_name`, `dailyreport_no`, `dailyreport_day`, `dailyreport_date`, `general_activities`, `activities_performed_today`, `activities_planned_tomorrow`, `torch_qty`, `client_qty`, `sub_contractor_qty`, `community_qty`, `equipment_1`, `equipment_2`, `equipment_3`, `equipment_4`, `equipment_5`, `equipment_6`, `equipment_1_qty`, `equipment_2_qty`, `equipment_3_qty`, `equipment_4_qty`, `equipment_5_qty`, `equipment_6_qty`, `unsafe_act`, `unsafe_condition`, `accident`, `environmental_condition`, `others`, `miscellaneous_report`, `name_reportby`, `name_approvedby`, `reportedby_date`, `approvedby_date`) VALUES ('$client','$contract','$project_name','$dailyreport_no','$dailyreport_day','$dailyreport_date','$general_activities','$activities_performed_today','$activities_planned_tomorrow','$torch_qty','$client_qty','$sub_contractor_qty','$community_qty','$equipment_1','$equipment_2','$equipment_3','$equipment_4','$equipment_5','$equipment_6','$equipment_1_qty','$equipment_2_qty','$equipment_3_qty','$equipment_4_qty','$equipment_5_qty','$equipment_6_qty','$unsafe_act','$unsafe_condition','$accident','$environmental_condition','$others','$miscellaneous_report','$name_reportby','$name_approvedby','$reportedby_date','$approvedby_date')";


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
     </style>
 </head>
 <body>

   <!--===============header====================-->
   <br>
   <div class="container">
      
      <div class="row text-center">
         <div class="col-sm-8">
            <h3>TORCH ENERGY SERVICES</h3>
         </div>
      </div>
      <div class="row text-center">
         <div class="col-sm-8">
            <h5>DAILY REPORT</h5>

         </div>
      </div>
   </div>
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

   <!---=====================body========================-->

   <form action="" method="post" role="form">

      <div class="container">
         <table width="90%">
            <tr>
               <td colspan="7">TORCH</td>
               
               <td style="float: right;"><b><u>DAILY REPORT</u></b></td>
            </tr>
            <tr>
               <td colspan="5"></td>
               <td>NO:</td>
               <td colspan="2"><input type="number" name="dailyreport_no" class="form-control"></td>
            </tr>
           <tr>
               <td>CLIENT:</td> 
               <td><input type="text" name="client" class="form-control" required></td>
               <td>CONTRACT:</td>
               <td colspan="2"><input type="text" name="contract" class="form-control" ></td>
               <td>DAY:</td>
               <td colspan="2"><input type="text" name="dailyreport_day" class="form-control" ></td>
            </tr>
            <tr>
               <td>PROJECT NAME:</td> 
               <td colspan="4"><input type="text" name="project_name" class="form-control" required></td>
               <td>DATE:</td>
               <td colspan="2"><input type="date" name="dailyreport_date" class="form-control" ></td>
            </tr>
            <tr>
               <td></td>
            </tr>
            <tr>
               <td colspan="8" style="background-color: #000;"><u></u></td>
            </tr>
            <tr>
               <td></td>
            </tr>
            <tr>
               <td colspan="8"><b><i>1: ACTIVITIES</i></b></td>
            </tr>
            <tr>
               <td></td>
            </tr>
            <tr>
               <td colspan="8" style="background-color: #000;"><u></u></td>
            </tr>
            <tr>
               <td></td>
            </tr>
            <tr>
               <td><b><i>A: GENERAL</i></b></td>
               <td colspan="7"><textarea class="form-control" name="general_activities" rows="4" required></textarea></td>
            </tr>
            <tr>
               <td><b><i>B: ACTIVITIES PERFORMED TODAY</i></b></td>
               <td colspan="7"><textarea class="form-control" name="activities_performed_today" rows="4" required></textarea></td>
            </tr>
            <tr>
               <td><b><i>B: ACTIVITIES PLANNED TOMORROW</i></b></td>
               <td colspan="7"><textarea class="form-control" name="activities_planned_tomorrow" rows="4" required></textarea></td>
            </tr>
            <tr>
               <td></td>
            </tr>
            <tr>
               <td colspan="8" style="background-color: #000;"><u></u></td>
            </tr>
            <tr>
               <td></td>
            </tr>
            <tr>
               <td colspan="8"><b><i>2: PERSONNEL</i></b></td>
            </tr>
            <tr>
               <td></td>
            </tr>
            <tr>
               <td colspan="8" style="background-color: #000;"><u></u></td>
            </tr>
            <tr>
               <td></td>
            </tr>
            <tr>
               <td>TORCH</td>
               <td>ND.</td>
               <td>QTY:</td>
               <td colspan="2"><input type="number" name="torch_qty" class="form-control" required></td>
               <td>CLIENT</td>
               <td>QTY:</td>
               <td><input type="number" name="client_qty" class="form-control" required></td>
            </tr>
              <tr>
               <td>SUB-CONTRACTOR(S):</td>
               <td>ND.</td>
               <td>QTY:</td>
               <td colspan="2"><input type="number" name="sub_contractor_qty" class="form-control" required></td>
               <td>COMMUNITY</td>
               <td>QTY:</td>
               <td><input type="number" name="community_qty" class="form-control" required></td>
            </tr>
             <tr>
               <td></td>
            </tr>
            <tr>
               <td colspan="8" style="background-color: #000;"><u></u></td>
            </tr>
            <tr>
               <td></td>
            </tr>
            <tr>
               <td colspan="8"><b><i>3: EQUIPMENT</i></b></td>
            </tr>
            <tr>
               <td></td>
            </tr>
            <tr>
               <td colspan="8" style="background-color: #000;"><u></u></td>
            </tr>
            <tr>
               <td></td>
            </tr>
            <tr>
               <td>1. TYPE:</td>
                <td><input type="text" name="equipment_1" class="form-control" required></td>
               <td>QTY</td>
               <td><input type="number" name="equipment_1_qty" class="form-control" required></td>
               <td>4. TYPE:</td>
                <td><input type="text" name="equipment_4" class="form-control" required></td>
               <td>QTY:</td>
               <td><input type="number" name="equipment_4_qty" class="form-control" required></td>
            </tr>
              <tr>
               <td>2. TYPE:</td>
                <td><input type="text" name="equipment_2" class="form-control" required></td>
               <td>QTY</td>
               <td><input type="number" name="equipment_2_qty" class="form-control" required></td>
               <td>5. TYPE:</td>
                <td><input type="text" name="equipment_5" class="form-control" required></td>
               <td>QTY:</td>
               <td><input type="number" name="equipment_5_qty" class="form-control" required></td>
            </tr>
            <tr>
               <td>3. TYPE:</td>
                <td><input type="text" name="equipment_3" class="form-control" required></td>
               <td>QTY</td>
               <td><input type="number" name="equipment_3_qty" class="form-control" required></td>
               <td>6. TYPE:</td>
                <td><input type="text" name="equipment_6" class="form-control" required></td>
               <td>QTY:</td>
               <td><input type="number" name="equipment_6_qty" class="form-control" required></td>
            </tr>
            <tr>
               <td></td>
            </tr>
            <tr>
               <td colspan="8" style="background-color: #000;"><u></u></td>
            </tr>
            <tr>
               <td></td>
            </tr>
            <tr>
               <td colspan="8"><b><i>4: SITE HEALTH, SAFETY AND ENVIRONMENT</i></b></td>
            </tr>
            <tr>
               <td></td>
            </tr>
            <tr>
               <td colspan="8" style="background-color: #000;"><u></u></td>
            </tr>
            <tr>
               <td></td>
            </tr>
            <tr>
               <td>UNSAFE ACTS:</td>
                <td><input type="text" name="unsafe_act" class="form-control" required></td>
               <td colspan="3">UNSAFE CONDITIONS:</td>
               <td><input type="text" name="unsafe_condition" class="form-control" required></td>
               <td>ACCIDENTS:</td>
                <td><input type="text" name="accident" class="form-control" required></td>
            </tr>
            <tr>
               <td colspan="2">ENVIRONMENTAL CONDITIONS:</td>
                <td colspan="6"><input type="text" name="environmental_condition" class="form-control" required></td>
            </tr>
            <tr>
               <td>OTHERS:</td>
                <td colspan="7"><input type="text" name="others" class="form-control" required></td>
            </tr>
            <tr>
               <td></td>
            </tr>
            <tr>
               <td colspan="8" style="background-color: #000;"><u></u></td>
            </tr>
            <tr>
               <td></td>
            </tr>
            <tr>
               <td colspan="8"><b><i>5: MISCELLANEOUS REPORTS</i></b></td>
            </tr>
            <tr>
               <td></td>
            </tr>
            <tr>
               <td colspan="8" style="background-color: #000;"><u></u></td>
            </tr>
            <tr>
               <td></td>
            </tr>
            <tr>
               <td colspan="8"><textarea class="form-control" name="miscellaneous_report" rows="4" required></textarea></td>
            </tr>
            <tr>
               <td></td>
            </tr>
            <tr>
               <td colspan="8" style="background-color: #000;"><u></u></td>
            </tr>
            <tr>
               <td></td>
            </tr>
            <tr>
               <td colspan="4"><b>REPORTED BY:</b></td>
               <td colspan="4"><b>APPROVED BY:</b></td>
            </tr>
            <tr>
               <td>NAME:</td>
               <td colspan="3"><input type="text" name="name_reportby" class="form-control" required></td>
               <td>NAME:</td>
               <td colspan="3"><input type="text" name="name_approvedby" class="form-control" required></td>
            </tr>
            <tr>
               <td>DATE:</td>
               <td colspan="3"><input type="date" name="reportedby_date" class="form-control" required></td>
               <td>DATE:</td>
               <td colspan="3"><input type="date" name="approvedby_date" class="form-control" required></td>
            </tr>
         </table>
         
      <div class="row" style="margin-top: 20px;"> 
         <div class="col-sm-4"><button type="submit" name="submit" title="Send Message">Send Message</button></div>

      </div>
   
   </div>

  </form>
 </body>
 </html>

 

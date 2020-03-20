

<!-- HEADER HERE -->
<?php
include 'layouts/header.php';
$doctorsName=getDoctorName($conn);
$reg_no=getRegistrationNumber($conn);
?>
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar-scroll">
        <div id="sidebar" class="nav-collapse collapse">

         <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
         <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
               <input type="text" class="search-query" placeholder="Search" />
            </form>
         </div>
         <!-- END RESPONSIVE QUICK SEARCH FORM -->
        <!-- SIDEBAR HERE -->
        <?php
include 'layouts/sidebar.php';
?>
      </div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN THEME CUSTOMIZER-->
                   <div id="theme-change" class="hidden-phone">
                       <i class="icon-cogs"></i>
                        <span class="settings">
                            <span class="text">Theme Color:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-green" data-style="green"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-red" data-style="red"></span>
                            </span>
                        </span>
                   </div>
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Appointment
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">Metro Lab</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           make appointment
                       </li>
                       <li class="pull-right search-wrap">
                           <form action="search_result.html" class="hidden-phone">
                               <div class="input-append search-input-area">
                                   <input class="" id="appendedInputButton" type="text">
                                   <button class="btn" type="button"><i class="icon-search"></i> </button>
                               </div>
                           </form>
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            



            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="widget yellow">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Form Validation</h4>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->

                            <form class="cmxform form-horizontal" id="commentForm" method="POST" action="">
                            <div class="control-group ">
                                    <label for="cemail" class="control-label">Registration number (required)</label>
                                    <div class="controls">
                                        <!-- <input class="span6 " id="cemail" type="text" name="reg_no" required /> -->
                                        <select class="span6" name="reg_no" onchange="fetchPatientName(this.value)">
                                        <option>Registration number</option>
                                        <?php
                                        foreach($reg_no as $key){
                                        ?>
                                        <option value="<?php echo $key['reg_no'];?>"><?php echo $key['reg_no'];?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                
                                <div class="control-group ">
                                    <label for="pname" class="control-label">Patient Name (required)</label>
                                    <div class="controls">
                                        <!-- <input class="span6 " id="pname" name="patient_name" minlength="2" type="text" required /> -->
                                        <select id="pname" class="span6 " name="patient_name" required>
                                        <option value=""></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label for="cname" class="control-label">Doctor Name (required)</label>
                                    <div class="controls">
                                    
                                        <!-- <input class="span6 " id="cname" name="doctor_name" minlength="2" type="text" required /> -->
                                        <select id="cname" class="span6" name="doctor_name" required>
                                        <option value="">Select Doctor to visit</option>
                                        <?php
                                        foreach($doctorsName as $key){
                                        ?>
                                        <option value="<?php echo $key['name'];?>"><?php echo $key['name'];?></option>
                                        <?php } ?>
                                        </select>
                                        
                                    </div>
                                </div>
                                
                                
                                <div class="form-actions">
                                    <button class="btn btn-success" name="submitbtn" type="submit">Save</button>
                                    <button class="btn" type="button">Cancel</button>
                                </div>


                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END VALIDATION STATES-->
                </div>
            </div>







            

            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
   <div id="footer">
       2013 &copy; Metro Lab Dashboard.
   </div>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="js/jquery-1.8.3.min.js"></script>
   <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
   <script type="text/javascript" src="assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
   <script type="text/javascript" src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
   <script src="assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>

   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->

   <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
   <script src="js/jquery.sparkline.js" type="text/javascript"></script>
   <script src="assets/chart-master/Chart.js"></script>
   <script src="js/jquery.scrollTo.min.js"></script>


   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>

   <!--script for this page only-->

   <script src="js/easy-pie-chart.js"></script>
   <script src="js/sparkline-chart.js"></script>
   <script src="js/home-page-calender.js"></script>
   <script src="js/home-chartjs.js"></script>

   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>
<?php

if(isset($_POST['submitbtn'])){
    if(addAppointment($conn,$_POST)){
        echo '<script language="javascript">';
        echo 'alert("Appointment Taken successfully")';
        echo '</script>';
    }else{
        echo '<script language="javascript">';
        echo 'alert("Failed to get Appointment ")';
        echo '</script>';
    }
}


?>
<script>

function fetchPatientName(value){
    // send request to cities.php
var req=new XMLHttpRequest();
req.open("GET","http://localhost:8080/HospitalSystem/admin/ReceptionPanel/FetchPatientName.php?state="+value,true);
req.send();
 

// response handle from cities.php
req.onreadystatechange=function(){
if(req.readyState==4 && req.status==200){
    document.getElementById("pname").innerHTML=req.responseText;
}
};

    
}

</script>
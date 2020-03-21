

<!-- HEADER HERE -->
<?php




include 'layouts/header.php';
$ref=$_GET['ref'];
$leaveDetails=getDetailsOfLeaveRequest($conn,$ref);
// print_r($leaveDetails);

// session_start();
// 	if(!checkUserLogin()){ 
// 	Redirect('loginReceptionist.php');
// } 
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
                    Doctor Dashboard
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
                        Doctor Dashboard
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
                    <!-- BEGIN  widget-->
                    <div class="widget yellow">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> CKEditor</h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                           </span>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                            <form action="#" method="POST" class="form-horizontal">
                                <div class="control-group">
                                    
                                    <label class="control-label">CKEditor</label>
                                    <div class="control-group ">
                                    <div class="controls">
                                        <input class="span6 " id="cemail" type="hidden" name="doctor_name" value="<?php echo $leaveDetails['doctor_name']; ?>"  readonly />
                                    </div>
                                </div>

                                <div class="control-group ">
                                    <label for="cemail" class="control-label">Date for leave</label>
                                    <div class="controls">
                                        <input class="span6 " id="cemail" type="date" value="<?php echo $leaveDetails['date_for_leave']; ?>"  name="date_for_leave" required/>
                                    </div>
                                </div>

                                    <div class="controls">
                                        <textarea class="span12 ckeditor" name="application" rows="6"><?php echo $leaveDetails['application'];?></textarea>
                                        <div class="form-actions">
                                    <button class="btn btn-success" name="acceptbtn" type="submit">Accept Application</button>
                                    <button class="btn btn-warning" name="rejectbtn" type="submit">Decline Application</button>
                                </div>
                                    </div>
                                    
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END EXTRAS widget-->
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
   <script src="../ReceptionPanel/js/jquery-1.8.3.min.js"></script>
   <script src="../ReceptionPanel/js/jquery.nicescroll.js" type="text/javascript"></script>
   <script type="text/javascript" src="../ReceptionPanel/assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
   <script type="text/javascript" src="../ReceptionPanel/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
   <script src="../ReceptionPanel/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
   <script src="../ReceptionPanel/assets/bootstrap/js/bootstrap.min.js"></script>

   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->

   <script src="../ReceptionPanel/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
   <script src="../ReceptionPanel/js/jquery.sparkline.js" type="text/javascript"></script>
   <script src="../ReceptionPanel/assets/chart-master/Chart.js"></script>
   <script src="../ReceptionPanel/js/jquery.scrollTo.min.js"></script>


   <!--common script for all pages-->
   <script src="../ReceptionPanel/js/common-scripts.js"></script>

   <!--script for this page only-->

   <script src="../ReceptionPanel/js/easy-pie-chart.js"></script>
   <script src="../ReceptionPanel/js/sparkline-chart.js"></script>
   <script src="../ReceptionPanel/js/home-page-calender.js"></script>
   <script src="../ReceptionPanel/js/home-chartjs.js"></script>

   <!-- END JAVASCRIPTS -->   



   <!-- EDITOR JAVASCRIPT -->
   <!-- <script src="js/jquery-1.8.2.min.js"></script> -->
   <script type="text/javascript" src="../ReceptionPanel/assets/ckeditor/ckeditor.js"></script>
   <!-- <script type="text/javascript" src="assets/bootstrap/js/bootstrap-fileupload.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
   <script src="js/jQuery.dualListBox-1.3.js" language="javascript" type="text/javascript"></script> -->


   <!-- <script src="js/form-component.js"></script> -->

   <script language="javascript" type="text/javascript">

       $(function() {

           $.configureBoxes();

       });

   </script>


   <!-- END EDITOR JAVASCRIPT -->
</body>
<!-- END BODY -->
</html>
<?php
if(isset($_POST['acceptbtn'])){
    if(LeaveApplicationGranted($conn,$_POST)){
        delete_leave_application_request($conn,$ref);

        echo '<script language="javascript">';
        echo 'alert("Leave Application Granted")';
        echo '</script>';
    }
}
if(isset($_POST['rejectbtn'])){
    if(LeaveApplicationRejected($conn,$_POST)){
        delete_leave_application_request($conn,$ref);
        
        echo '<script language="javascript">';
        echo 'alert("Leave Application Rejected")';
        echo '</script>';
    }
}


?>
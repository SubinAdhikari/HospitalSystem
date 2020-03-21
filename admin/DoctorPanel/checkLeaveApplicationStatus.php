

<!-- HEADER HERE -->
<?php
include 'layouts/header.php';

if(isset($_POST['searchbtn'])){
    $todayDate=$_POST['date_for_leave'];
   $acceptedRequest=ViewAcceptedLeaveRequestForDoctorPanel($conn,$todayDate,$_SESSION['doctor']['name']);
//    print_r($acceptedRequest);
   $rejectedRequest=ViewRejectedLeaveRequestForDoctorPanel($conn,$todayDate,$_SESSION['doctor']['name']);
}


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
                   View Application Status
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
                       View Application Status
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
            
           



           
                            <form method="POST">
                                 <div class="control-group ">
                                    <label for="curl" class="control-label">Date For Leave</label>
                                    <div class="controls">
                                        <input class="span6 " id="curl" type="date" name="date_for_leave" required/>
                                        <button class="btn btn-success" name="searchbtn" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>




<!-- BEGIN ADVANCED TABLE widget-->
<div class="row-fluid">
                <div class="span12">
                <!-- BEGIN EXAMPLE TABLE widget-->
                <div class="widget red">
                    <div class="widget-title">
                        <h4><i class="icon-reorder"></i>Leave Application Status</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                    </div>
                    <div class="widget-body">
                        <table class="table table-striped table-bordered" id="sample_1">
                            <thead>
                            <tr>
                                <th class="hidden-phone">Patient name</th>
                                <th class="hidden-phone">Date For Leave</th>
                                <th class="hidden-phone">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(isset($acceptedRequest)){

                                       if($acceptedRequest>0){ 
                                ?>
                                
                            <tr class="odd gradeX">
                                <td class="hidden-phone"><?php echo $acceptedRequest['doctor_name']; ?></td>
                                <td class="hidden-phone"><?php echo $acceptedRequest['date_for_leave']; ?></td>

                                <td class="hidden-phone"><span class="label label-success">Accepted</span></td>
                            </tr>
                                <?php } }
                                if(isset($rejectedRequest)){
                                    if($rejectedRequest>0){
                                    ?>
<tr class="odd gradeX">
                                <td class="hidden-phone"><?php echo $rejectedRequest['doctor_name']; ?></td>
                                <td class="hidden-phone"><?php echo $rejectedRequest['date_for_leave']; ?></td>

                                <td class="hidden-phone"><span class="label label-danger">Rejected</span></td>
                            </tr>

                                <?php
                                }
                            }
                               ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE widget-->
                </div>
            </div>

            <!-- END ADVANCED TABLE widget-->






            

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
   
   

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="../ReceptionPanel/js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="../ReceptionPanel/assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="../ReceptionPanel/assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="../ReceptionPanel/assets/data-tables/DT_bootstrap.js"></script>


   <!--common script for all pages-->

   <!--script for this page only-->
   <script src="../ReceptionPanel/js/dynamic-table.js"></script>

   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>

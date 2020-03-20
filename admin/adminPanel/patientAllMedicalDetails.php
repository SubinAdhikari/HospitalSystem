

<!-- HEADER HERE -->
<?php
include 'layouts/header.php';
$ref=$_GET['ref'];
$oldPatientDetails=getPatientDetails($conn,$ref);
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
                   View Patient Details
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
                           View Patient Details
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
            
         
            <?php foreach($oldPatientDetails as $key){ ?>

<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="widget yellow">
            <div class="widget-title">
                <h4><i class="icon-reorder"></i> View Previous Medical Details</h4>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#portlet-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                </div>
            </div>
            <div class="widget-body form">
                <!-- BEGIN FORM-->

                <form class="cmxform form-horizontal" id="commentForm"  action="">
                <div class="control-group ">
                        <label for="cname" class="control-label">Date of check</label>
                        <div class="controls">
                            <input class="span6 " id="cname" name="name" value="<?php echo $key['date_of_check']; ?>"  type="text" readonly />
                        </div>
                    </div>
                    <div class="control-group ">
                        <label for="cemail" class="control-label">Name of Doctor</label>
                        <div class="controls">
                            <input class="span6 " id="cemail" type="email" value="<?php echo $key['name_of_doctor']; ?>"  readonly />
                        </div>
                    </div>
                    <div class="control-group ">
                        <label for="cemail" class="control-label">Work Done By doctors</label>
                        <div class="controls">
                        <textarea class="span6" readonly><?php echo $key['work_done_by_doctor']; ?></textarea>
                            
                        </div>
                    </div>
                    <div class="control-group ">
                        <label for="cemail" class="control-label">Medicine Prescribed</label>
                        <div class="controls">
                        <textarea class="span6" readonly><?php echo $key['medicine_prescribed']; ?></textarea>
                            <!-- <input class="span6 " id="cemail" type="text" value="<?php echo $key['medicine_prescribed']; ?>"  readonly /> -->
                        </div>
                    </div>


                </form>


                <!-- END FORM-->
            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>
</div>



<?php } ?>


            

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
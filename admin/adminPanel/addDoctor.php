

<!-- HEADER HERE -->
<?php
include 'layouts/header.php';
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
                     Add Doctor
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
                           Add Doctor
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
                                    <label for="cname" class="control-label">Name (required)</label>
                                    <div class="controls">
                                        <input class="span6 " id="cname" name="name" minlength="2" type="text" required />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="cemail" class="control-label">E-Mail (required)</label>
                                    <div class="controls">
                                        <input class="span6 " id="cemail" type="email" name="email" required />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="cemail" class="control-label">Password (required)</label>
                                    <div class="controls">
                                        <input class="span6 " id="cemail" type="password" name="password" required />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="cemail" class="control-label">Address (required)</label>
                                    <div class="controls">
                                        <input class="span6 " id="cemail" type="text" name="address" required />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="cemail" class="control-label">Phone-no (required)</label>
                                    <div class="controls">
                                        <input class="span6 " id="cemail" type="text" name="phoneno" required />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="cemail" class="control-label">Doctor Field (required)</label>
                                    <div class="controls">
                                        <input class="span6 " id="cemail" type="text" name="doctor_field" required />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="cemail" class="control-label">Certificate Number (required)</label>
                                    <div class="controls">
                                        <input class="span6 " id="cemail" type="text" name="certificate_number" required />
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
</body>
<!-- END BODY -->
</html>
<?php

if(isset($_POST['submitbtn'])){
    if(addDoctor($conn,$_POST)){
        echo '<script language="javascript">';
    echo 'alert("successfully Inserted")';
    echo '</script>';
    }else{
        echo '<script language="javascript">';
        echo 'alert("Failed Inserting data")';
        echo '</script>';
    }
}


?>
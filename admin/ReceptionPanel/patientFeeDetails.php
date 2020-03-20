

<!-- HEADER HERE -->
<?php
include 'layouts/header.php';
$ref=$_GET['ref'];
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
                     Patient Details
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
                           Patient Details
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
            
    <?php
    // Select Fee that has been already paid
    $feePaidAlready=0;
    $selectFeeAlreadyPaid=selectFeePaidAlready($conn,$ref);
    foreach($selectFeeAlreadyPaid as $key){
        $feePaidAlready=$feePaidAlready+$key['fees_paid'];
    }

    // echo $feePaidAlready;


    // Select Fees to be paid
    $sum=0;
    $FeeToBePaidByPatient=selectFeeOfPatient($conn,$ref);
    // print_r($FeeToBePaidByPatient);

    foreach($FeeToBePaidByPatient as $key){
        $sum=$sum+$key['price_of_checkup'];
    }
 
    ?>









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
                                    <label for="cname" class="control-label">Patient Registration number</label>
                                    <div class="controls">
                                        <input class="span6 " id="cname" value="<?php echo $ref; ?>" type="text" name="reg_no" readonly />
                                    </div>
                                    </div>
                                <div class="control-group ">
                                    <label for="cname" class="control-label">Fee To Be Paid</label>
                                    <div class="controls">
                                        <input class="span6 " id="cname" value="<?php echo $sum-$feePaidAlready; ?>" type="text" readonly />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="cemail" class="control-label">Fees being Paid</label>
                                    <div class="controls">
                                        <input class="span6 " id="cemail" type="text" name="fees_paid" required />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="cemail" class="control-label">Collected By</label>
                                    <div class="controls">
                                        <input class="span6 " id="cemail" type="text" value="<?php echo $_SESSION['rec']['email']; ?>" name="collected_by"  readonly />
                                    </div>
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
    if(FeePaidByPatient($conn,$_POST)){
        echo '<script language="javascript">';
        echo 'alert("Fee Paid successfully")';
        echo '</script>';
    }else{
        echo '<script language="javascript">';
        echo 'alert("Failed to pay Fee")';
        echo '</script>';
    }
}
?>
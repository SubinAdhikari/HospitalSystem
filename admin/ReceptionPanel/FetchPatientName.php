<?php
 include '../../app/call.php';
 $value=$_GET['state'];
 

 
 $array=FetchPatientName($conn,$value);

if(isset($array)){
foreach($array as $row => $value){
    foreach($value as $key){
    echo "<option value=$key>$key</option>";
    }
}
}
?>
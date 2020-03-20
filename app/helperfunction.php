<?php
function Redirect($path){
    header('Location:'.$path); 
}
function checkUserLogin()
{
	if(isset($_SESSION['rec'] ['email'])){
        return true;
    }
else{
    return false;
}
}
function checkAdminLogin()
{
	if(isset($_SESSION['admin'] ['email'])){
        return true;
    }
else{
    return false;
}
}
function checkDoctorLogin()
{
	if(isset($_SESSION['doctor'] ['email'])){
        return true;
    }
else{
    return false;
}
}
?>
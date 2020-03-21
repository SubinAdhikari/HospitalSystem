<?php
function credientialAuthenticate($conn,$data){
    $data['password']=md5($data['password']);
    $stmtSelect=$conn->prepare("SELECT * FROM receptionist_table WHERE email=:email && password=:password");
    $stmtSelect->bindParam(':email',$_POST['email']);
    $stmtSelect->bindParam(':password',$data['password']);
    $stmtSelect->execute();
    $stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
    return $stmtSelect->fetch();
}
function credientialAuthenticateAdmin($conn,$data){
    $data['password']=md5($data['password']);
    $stmtSelect=$conn->prepare("SELECT * FROM admin_table WHERE email=:email && password=:password");
    $stmtSelect->bindParam(':email',$_POST['email']);
    $stmtSelect->bindParam(':password',$data['password']);
    $stmtSelect->execute();
    $stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
    return $stmtSelect->fetch();
}
function credientialAuthenticateDoctor($conn,$data){
    $data['password']=md5($data['password']);
    $stmtSelect=$conn->prepare("SELECT * FROM doctor_table WHERE name=:name1 && password=:password1");
    $stmtSelect->bindParam(':name1',$data['name']);
    $stmtSelect->bindParam(':password1',$data['password']);
    $stmtSelect->execute();
    $stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
    return $stmtSelect->fetch();
}
function addReceptionist($conn,$data){
    $data['password']=md5($data['password']);
    $stmtinsert=$conn->prepare("INSERT INTO receptionist_table (`name`,`email`,`password`,`address`,`phoneno`) VALUES (:name, :email, :password, :address,:phoneno)");
    $stmtinsert->bindParam(':name', $data['name']);
	$stmtinsert->bindParam(':email', $data['email']);
    $stmtinsert->bindParam(':password', $data['password']);
    $stmtinsert->bindParam(':address', $data['address']);
    $stmtinsert->bindParam(':phoneno', $data['phoneno']);
	if ($stmtinsert->execute()) {
		return true;
	}
	return false;

}
function addDoctor($conn,$data){
    $data['password']=md5($data['password']);
    $stmtinsert=$conn->prepare("INSERT INTO doctor_table (`name`,`email`,`password`,`address`,`phoneno`,`doctor_field`,`certificate_number`) VALUES (:name, :email, :password, :address,:phoneno,:doctor_field,:certificate_number)");
    $stmtinsert->bindParam(':name', $data['name']);
	$stmtinsert->bindParam(':email', $data['email']);
    $stmtinsert->bindParam(':password', $data['password']);
    $stmtinsert->bindParam(':address', $data['address']);
    $stmtinsert->bindParam(':phoneno', $data['phoneno']);
    $stmtinsert->bindParam(':doctor_field', $data['doctor_field']);
    $stmtinsert->bindParam(':certificate_number', $data['certificate_number']);
	if ($stmtinsert->execute()) {
		return true;
	}
	return false;

}
function addPatient($conn,$data){
    $data['password']=md5($data['password']);
    $stmtinsert=$conn->prepare("INSERT INTO patient_table (`name`,`address`,`phoneno`) VALUES (:name,:address,:phoneno)");
    $stmtinsert->bindParam(':name', $data['name']);
    $stmtinsert->bindParam(':address', $data['address']);
    $stmtinsert->bindParam(':phoneno', $data['phoneno']);
	if ($stmtinsert->execute()) {
		return true;
	}
	return false;
 
}
function addAppointment($conn,$data){
    $stmtinsert=$conn->prepare("INSERT INTO appointment_table (`patient_reg_no`,`patient_name`,`doctor_to_visit`) VALUES (:reg_no,:patient_name,:doctor_name)");
    $stmtinsert->bindParam(':reg_no', $data['reg_no']);
    $stmtinsert->bindParam(':doctor_name', $data['doctor_name']);
    $stmtinsert->bindParam(':patient_name', $data['patient_name']);
	if ($stmtinsert->execute()) {
		return true;
	}
	return false;

}
function selectAppointment($conn,$data){
    $stmtSelect=$conn->prepare("SELECT * FROM appointment_table WHERE doctor_to_visit=:email");
    $stmtSelect->bindParam(':email',$data);
    $stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
}
function fetchPatientData($conn,$ref){
    $stmtSelect=$conn->prepare("SELECT * FROM patient_table WHERE reg_no=:ref");
    $stmtSelect->bindParam(':ref',$ref);
    $stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetch();
}
function ViewAllPatient($conn){
    $stmtSelect=$conn->prepare("SELECT * FROM patient_table");
    $stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
}
function getDoctorName($conn){
    $stmtSelect=$conn->prepare("SELECT name FROM doctor_table ");
    $stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
}
function getRegistrationNumber($conn){
    $stmtSelect=$conn->prepare("SELECT reg_no FROM patient_table ");
    $stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
}
function FetchPatientName($conn,$value){
    $stmtSelect = $conn->prepare("SELECT name FROM patient_table WHERE reg_no=:value");
	$stmtSelect->bindParam(':value',$value);
	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
	 return $stmtSelect->fetchAll();
}
function getPatientDetails($conn,$ref){
    $stmtSelect = $conn->prepare("SELECT * FROM patient_medical_details WHERE reg_no=:ref");
	$stmtSelect->bindParam(':ref',$ref);
	$stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
	 return $stmtSelect->fetchAll();
}
function insertpatientDetails($conn,$data){
    $stmtinsert=$conn->prepare("INSERT INTO patient_medical_details (`reg_no`,`name_of_patient`,`name_of_doctor`,`date_of_check`,`work_done_by_doctor`,`medicine_prescribed`,`price_of_checkup`) VALUES (:reg_no,:name_of_patient,:name_of_doctor,:date_of_check,:work_done_by_doctor,:medicine_prescribed,:price_of_checkup)");
    $stmtinsert->bindParam(':reg_no', $data['reg_no']);
    $stmtinsert->bindParam(':name_of_patient', $data['name_of_patient']);
    $stmtinsert->bindParam(':name_of_doctor', $data['name_of_doctor']);
    $stmtinsert->bindParam(':date_of_check', $data['date_of_check']);
    $stmtinsert->bindParam(':work_done_by_doctor', $data['work_done_by_doctor']);
    $stmtinsert->bindParam(':medicine_prescribed', $data['medicine_prescribed']);
   
    $stmtinsert->bindParam(':price_of_checkup', $data['price_of_checkup']);

	if ($stmtinsert->execute()) {
		return true;
	}
	return false;

}
function  deletepatientAppointement($conn,$ref,$nameOfDoctor){
    $stmtdelete=$conn->prepare("DELETE FROM appointment_table WHERE patient_reg_no=:patient_reg_no && doctor_to_visit=:doctor_to_visit");
    $stmtdelete->bindParam(':patient_reg_no', $ref);
    $stmtdelete->bindParam(':doctor_to_visit', $nameOfDoctor);
    $stmtdelete->execute();
}

function selectFeeOfPatient($conn,$ref){
    $stmtSelect=$conn->prepare("SELECT price_of_checkup FROM patient_medical_details WHERE reg_no=:reg_no");
    $stmtSelect->bindParam(':reg_no',$ref);
    $stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
}
function selectFeePaidAlready($conn,$ref){
    $stmtSelect=$conn->prepare("SELECT fees_paid FROM fees_collected WHERE reg_no=:reg_no");
    $stmtSelect->bindParam(':reg_no',$ref);
    $stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
}
function FeePaidByPatient($conn,$data){
    $stmtinsert=$conn->prepare("INSERT INTO fees_collected (`reg_no`,`fees_paid`,`collected_by`) VALUES (:reg_no, :fees_paid, :collected_by)");
    $stmtinsert->bindParam(':reg_no', $data['reg_no']);
	$stmtinsert->bindParam(':fees_paid', $data['fees_paid']);
    $stmtinsert->bindParam(':collected_by', $data['collected_by']);
	if ($stmtinsert->execute()) {
		return true;
	}
	return false;
}

function selectAllDoctors($conn){
    $stmtSelect=$conn->prepare("SELECT * FROM doctor_table ");
    $stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
}
function selectAllReceptionist($conn){
    $stmtSelect=$conn->prepare("SELECT * FROM receptionist_table ");
    $stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
}
function selectFeeCollectedTable($conn){
    $stmtSelect=$conn->prepare("SELECT * FROM fees_collected ");
    $stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
}
function getlastIdOfPatient($conn){
    $stmtSelect=$conn->prepare("SELECT reg_no FROM patient_table ORDER BY reg_no DESC LIMIT 1 ");
    $stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetch();
}
function sendLeaveApplication($conn,$data){
    $stmtinsert=$conn->prepare("INSERT INTO leave_application_request (`doctor_name`,`application`,`date_for_leave`) VALUES (:doctor_name,:application,:date_for_leave)");
    $stmtinsert->bindParam(':doctor_name', $data['doctor_name']);
    $stmtinsert->bindParam(':application', $data['application']);
    $stmtinsert->bindParam(':date_for_leave', $data['date_for_leave']);
	if ($stmtinsert->execute()) {
		return true;
	}
	return false;

}
function ViewAllLeaveApplication($conn){
    $stmtSelect=$conn->prepare("SELECT * FROM leave_application_request");
    $stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
}
function getDetailsOfLeaveRequest($conn,$ref){
    $stmtSelect=$conn->prepare("SELECT * FROM leave_application_request WHERE doctor_name=:doctor_name");
    $stmtSelect->bindParam(':doctor_name',$ref);
    $stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetch();
}
function LeaveApplicationGranted($conn,$data){
    $stmtinsert=$conn->prepare("INSERT INTO accepted_leave_request (`doctor_name`,`application`,`date_for_leave`) VALUES (:doctor_name,:application,:date_for_leave)");
    $stmtinsert->bindParam(':doctor_name', $data['doctor_name']);
    $stmtinsert->bindParam(':application', $data['application']);
    $stmtinsert->bindParam(':date_for_leave', $data['date_for_leave']);
	if ($stmtinsert->execute()) {

		return true;
	}
	return false;

}
function LeaveApplicationRejected($conn,$data){
    $stmtinsert=$conn->prepare("INSERT INTO rejected_leave_request (`doctor_name`,`application`,`date_for_leave`) VALUES (:doctor_name,:application,:date_for_leave)");
    $stmtinsert->bindParam(':doctor_name', $data['doctor_name']);
    $stmtinsert->bindParam(':application', $data['application']);
    $stmtinsert->bindParam(':date_for_leave', $data['date_for_leave']);
	if ($stmtinsert->execute()) {
        
		return true;
	}
	return false;

}
function  delete_leave_application_request($conn,$ref){
    $stmtdelete=$conn->prepare("DELETE FROM leave_application_request WHERE doctor_name=:doctor_name");
    $stmtdelete->bindParam(':doctor_name', $ref);
    $stmtdelete->execute();
}
function ViewAcceptedLeaveRequest($conn,$todayDate){
    $stmtSelect=$conn->prepare("SELECT doctor_name FROM accepted_leave_request WHERE date_for_leave=:date_for_leave");
    $stmtSelect->bindParam(':date_for_leave',$todayDate);
    $stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetchAll();
}
function ViewAcceptedLeaveRequestForDoctorPanel($conn,$todayDate,$doctorname){
    $stmtSelect=$conn->prepare("SELECT doctor_name,date_for_leave FROM accepted_leave_request WHERE date_for_leave=:date_for_leave && doctor_name=:doctor_name");
    $stmtSelect->bindParam(':date_for_leave',$todayDate);
    $stmtSelect->bindParam(':doctor_name',$doctorname);
    $stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetch();
}
function ViewRejectedLeaveRequestForDoctorPanel($conn,$todayDate,$doctorname){
    $stmtSelect=$conn->prepare("SELECT * FROM rejected_leave_request WHERE date_for_leave=:date_for_leave && doctor_name=:doctor_name");
    $stmtSelect->bindParam(':date_for_leave',$todayDate);
    $stmtSelect->bindParam(':doctor_name',$doctorname);
    $stmtSelect->execute();
 	$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
 	return $stmtSelect->fetch();
}
?>
<?php
include("my_connect_str.php");
?>
<html>
<body>

<?php

	$emp_id = $_POST["empID"];
	$fname = $_POST["firstname"];
	$mname = $_POST["midname"];
	$lname = $_POST["lastname"];
	$emp_dob = $_POST["empDOB"];
	$emp_cntct_no = $_POST["empCntct"];
	$emp_doj = $_POST["empDOJ"];
	$emp_city = $_POST["empCity"];
	$emp_state = $_POST["empState"];
	$dept_id = $_POST["deptID"];


	$q_str0 = "INSERT INTO emp VALUES('$emp_id','$fname','$mname','$lname',TO_DATE('$emp_dob','yyyy-mm-dd'),'$emp_cntct_no',TO_DATE('$emp_doj','yyyy-mm-dd'),'$emp_city','$emp_state','$dept_id')";

	$query_str0=oci_parse($con_str,$q_str0);
	if(!oci_execute($query_str0,OCI_COMMIT_ON_SUCCESS)){
		print("error occured");
	} else {
		echo "<h2> Employee successfully entered into database </h2>";
	}

?>

</body>
</html>


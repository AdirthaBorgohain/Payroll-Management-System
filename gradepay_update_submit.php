<?php
include("my_connect_str.php");
?>
<html>
<body>

<?php

	$dept_id = $_POST["deptID"];
	$grade_name = $_POST["gradeName"];
	$grade_basic = $_POST["gradeBasic"];
	$grade_da = $_POST["gradeDA"];
	$grade_ta = $_POST["gradeTA"];
	$grade_bonus = $_POST["gradeBonus"];
	$grade_pf = $_POST["gradePF"];
	$grade_ma = $_POST["gradeMA"];
	$grade_hra = $_POST["gradeHRA"];
	$grade_pt = $_POST["gradePT"];

	$q_str = "UPDATE gradepay SET grade_basic = '$grade_basic', grade_da = '$grade_da', grade_ta = '$grade_ta', grade_bonus = '$grade_bonus', grade_pf = '$grade_pf', grade_ma = '$grade_ma', grade_hra = '$grade_hra', grade_pt = '$grade_pt' WHERE dept_id = '$dept_id' AND grade_name = '$grade_name'";

	$query_str=oci_parse($con_str,$q_str);
	if(!oci_execute($query_str,OCI_COMMIT_ON_SUCCESS)){
		print("error occured");
	} else {
		echo "<h2> Gradepay succesfully updated </h2>";
	}

?>

</body>
</html>


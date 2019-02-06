<?php
include("my_connect_str.php");
?>
<html>
<body>

<?php
    $emp_id = $_POST["empID"];
    $dept_id = $_POST["deptID"];
    $grade_name = $_POST["gradeName"];
    $emp_slry_month = $_POST["empMonth"];
    $emp_slry_yr = $_POST["empYear"];
    $rmbrsmnt_date = $_POST["empRmbr"];
    $transaction_id = $_POST["transID"];
    $emp_gross = "";

    $q_str0 = "SELECT grade_id FROM gradepay WHERE grade_name='$grade_name' AND dept_id='$dept_id'";


    $query_str0=oci_parse($con_str,$q_str0);
    if(!oci_execute($query_str0,OCI_COMMIT_ON_SUCCESS)){
	    print("error occured");
    }

    while($data0=oci_fetch_array($query_str0)){
        $grade_id = $data0[0];
        break;
    }

    $q_str1 = "INSERT INTO payroll VALUES('$transaction_id','$emp_id','$emp_slry_month','$emp_slry_yr','$emp_gross',TO_DATE('$rmbrsmnt_date','yyyy-mm-dd'),'$grade_id')";

    $query_str1=oci_parse($con_str,$q_str1);
    if(!oci_execute($query_str1,OCI_COMMIT_ON_SUCCESS)){
	    print("error occured");
    } else {
        echo "<h2> Payroll of employee successfully entered </h2>";
    }

?>

</body>
</html>


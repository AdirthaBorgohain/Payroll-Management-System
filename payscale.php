<?php
include("my_connect_str.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Employee Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/empDetails.css" />
</head>
<body>
    <?php
    $empID = $_POST["emp_id"];
    $gross = 0;

    echo "<br>";

    $q_str = "SELECT fname, mname, lname from emp WHERE emp_id='$empID'";

    $query_str=oci_parse($con_str,$q_str);
    if(!oci_execute($query_str)){
        print("Error occured during Query");
    }
    
    while($data0=oci_fetch_array($query_str)){
        echo "<br><div class=\"heading\">Pay Details of <span style=\"font-weight: 800\">";
        echo $data0[0];
        echo " " .$data0[1];
        echo " " .$data0[2];
        echo "</span></div>";
        break;
    }

    $q_str1 = "SELECT gradepay.grade_basic, gradepay.grade_da, gradepay.grade_ta, gradepay.grade_bonus, gradepay.grade_pf, gradepay.grade_ma, gradepay.grade_hra, gradepay.grade_pt, payroll.grade_id, gradepay.grade_name, payroll.emp_slry_month, payroll.emp_slry_yr, payroll.rmbrsmnt_date, payroll.transaction_id FROM payroll INNER JOIN gradepay ON payroll.grade_id=gradepay.grade_id AND payroll.emp_id='$empID'";

    echo "<br>";

    $query_str1=oci_parse($con_str,$q_str1);
    if(!oci_execute($query_str1)){
        print("Error occured during Query");
    }
    ?>
    <table class="tableview">
    <tr style="background-color: rgb(24, 132, 255)">
        <th>Grade ID</th>
        <th>Grade Name</th>
        <th>Employee Salary Month</th>
        <th>Employee Salary Year</th>
        <th>Reimbursment Date</th>
        <th>Transaction ID</th>
        <th>Gross Salary (INR)</th>
    </tr>
    <?php
        while($data=oci_fetch_array($query_str1)) {
            echo "<tr>";
            for ($i=8; $i < 14; $i++) {
                echo "<td>" .$data[$i]. "</td>";
            }
            $gradeID = $data[8];
            $gross = $data[0] + $data[1] + $data[2] + $data[3] - $data[4] + $data[5] + $data[6] - $data[7] ;
            echo "<td>".$gross."</td>";
            echo "</tr>";
        }
    ?>
</table>

<?php
     echo "<br><br><h2>Grade Pay Details</h2><br>";
    $q_str2 = "SELECT * FROM gradepay WHERE grade_id='$gradeID'";
    echo "<br>";

    $query_str2=oci_parse($con_str,$q_str2);
    if(!oci_execute($query_str2)){
        print("Error occured during Query");
    }

    ?>
    <table class="tableview">
    <tr style="background-color: rgb(62, 170, 0); font-size: 15px">
        <th>Grade ID</th>
        <th>Grade Name</th>
        <th>Basic Pay</th>
        <th>Dearness Allowance(DA)</th>
        <th>Travel Allowance(TA)</th>
        <th>Bonus Pay</th>
        <th>Provident Fund(PF)</th>
        <th>Medical Allowance(MA)</th>
        <th>House Rent Allowance(HRA)</th>
        <th>Professional Tax</th>
        <th>Department ID</th>
    </tr>
    <?php
        while($data1=oci_fetch_array($query_str2)) {
            echo "<tr>";
            for ($i=0; $i < 7; $i++) {
                echo "<td>" .$data1[$i]. "</td>";
            }
            for ($i=8; $i < 11; $i++) {
                echo "<td>" .$data1[$i]. "</td>";
            }
            echo "<td>".$data1[7]."</td>";
            echo "</tr>";
        }
    ?>

</body>
</html>


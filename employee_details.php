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
    $searchOpt=$_POST['SearchOption'];
    $userInput=$_POST['userInput'];
    $val=" ";

    echo "<br>";

	if ($searchOpt=='E')
		$val="emp.emp_id";
    else if ($searchOpt=='FN')
		$val="emp.fname";
	else if ($searchOpt=='D')
        $val="dept.dept_name";
        
    echo "<h2>Search Results for '".$userInput."'</h2><br><br>";
             
    $q_str = "SELECT emp.emp_id, emp.fname, emp.mname, emp.lname, emp.emp_dob, emp.emp_cntct_no, emp.emp_doj, emp.emp_city, emp.emp_state, dept.dept_name FROM emp INNER JOIN dept ON emp.dept_id=dept.dept_id AND ".$val."='$userInput'";

    echo "<br>";

    $query_str=oci_parse($con_str,$q_str);
    if(!oci_execute($query_str)){
        print("Error occured during Query");
    }
?>


<table class="tableview">
    <tr style="background-color: rgb(24, 132, 255)">
        <th>Employee ID</th>
        <th>Firstname</th>
        <th>Middlename</th>
        <th>Lastname</th>
        <th>Date of birth</th>
        <th>Contact No</th>
        <th>Date of joining</th>
        <th>City</th>
        <th>State</th>
        <th>Department</th>
        <th></th>
    </tr>
    <?php
        while($data=oci_fetch_array($query_str)) {
            echo "<tr>";
            for ($i=0; $i < 10; $i++) {
                echo "<td>" .$data[$i]. "</td>";
            }
            echo "<td><form action=\"payscale.php\" method=\"post\">";
            echo "<input class=\"button\" type=\"submit\" value=\"View Pay Details\">";
            echo "<input type=\"hidden\" name=\"emp_id\" value=\"$data[0]\">";
            echo "</form></td>";
            echo "</tr>";
        }
    ?>
</table>



</body>
</html>
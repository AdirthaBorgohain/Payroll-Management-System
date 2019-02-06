<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Enter Employee Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/employeeEntry.css" />
</head>
<body>
<h2>Update Gradepay</h2>
<p>Please fill up the form below.</p>

<div class="container">
  <form action="gradepay_update_submit.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="dept_name">Department</label>
      </div>
      <div class="col-75">
        <select id="dept_name" name="deptID">
          <option value="">Select Department...</option>
          <option value="D01">Finance</option>
          <option value="D02">Production</option>
          <option value="D03">R & D</option>
          <option value="D04">Marketing</option>
          <option value="D05">Purchasing</option>
          <option value="D06">HR</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="grade_name">Grade</label>
      </div>
      <div class="col-75">
        <select id="grade_name" name="gradeName">
          <option value="">Select Grade...</option>
          <option value="Grade 1">Grade 1</option>
          <option value="Grade 2">Grade 2</option>
          <option value="Grade 3">Grade 3</option>
          <option value="Grade 4">Grade 4</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="grade_basic">Basic Pay</label>
      </div>
      <div class="col-75">
        <input maxlength="10" type="number" id="grade_basic" name="gradeBasic" placeholder="Enter Amount..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="grade_da">Dearness Allowance (DA)</label>
      </div>
      <div class="col-75">
        <input maxlength="10" type="number" id="grade_da" name="gradeDA" placeholder="Enter Amount..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="grade_ta">Travel Allowance (TA)</label>
      </div>
      <div class="col-75">
        <input maxlength="10" type="number" id="grade_ta" name="gradeTA" placeholder="Enter Amount..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="grade_bonus">Bonus Pay</label>
      </div>
      <div class="col-75">
        <input maxlength="10" type="number" id="grade_bonus" name="gradeBonus" placeholder="Enter Amount..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="grade_pf">Provident Fund</label>
      </div>
      <div class="col-75">
        <input maxlength="10" type="number" id="grade_pf" name="gradePF" placeholder="Enter Amount..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="grade_ma">Medical Allowance</label>
      </div>
      <div class="col-75">
        <input maxlength="10" type="number" id="grade_ma" name="gradeMA" placeholder="Enter Amount..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="grade_hra">House Rent Allowance</label>
      </div>
      <div class="col-75">
        <input maxlength="10" type="number" id="grade_hra" name="gradeHRA" placeholder="Enter Amount..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="grade_pt">Professional Tax</label>
      </div>
      <div class="col-75">
        <input maxlength="10" type="number" id="grade_pt" name="gradePT" placeholder="Enter Amount..">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</body>
</html>
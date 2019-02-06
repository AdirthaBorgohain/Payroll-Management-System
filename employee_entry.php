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
<h2>Enter Details of New Employee</h2>
<p>Please fill up the form below.</p>

<div class="container">
  <form action="employee_entry_submit.php" method="post">
  <div class="row">
      <div class="col-25">
        <label for="emp_id">Employee ID</label>
      </div>
      <div class="col-75">
        <input maxlength="5" type="text" id="emp_id" name="empID" placeholder="Eg. EST01, EST02 etc">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input maxlength="10" type="text" id="fname" name="firstname" placeholder="First name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="mname">Middle Name</label>
      </div>
      <div class="col-75">
        <input maxlength="10" type="text" id="mname" name="midname" placeholder="Middle name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input maxlength="10" type="text" id="lname" name="lastname" placeholder="Last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="emp_dob">Date of Birth</label>
      </div>
      <div class="col-75">
        <input type="date" id="emp_dob" name="empDOB">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="emp_cntct_no">Contact No.</label>
      </div>
      <div class="col-75">
        <input maxlength="10" type="number" id="emp_cntct_no" name="empCntct" placeholder="Enter Contact no.">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="emp_doj">Date of Joining</label>
      </div>
      <div class="col-75">
        <input type="date" id="emp_doj" name="empDOJ">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="emp_city">City</label>
      </div>
      <div class="col-75">
        <input maxlength="10" type="text" id="emp_city" name="empCity" placeholder="Enter City..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="emp_state">State</label>
      </div>
      <div class="col-75">
        <input maxlength="10" type="text" id="emp_state" name="empState" placeholder="Enter State..">
      </div>
    </div>
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
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</body>
</html>
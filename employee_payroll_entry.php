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
<h2>Enter Payroll Details of Employee</h2>
<p>Please fill up the form below.</p>

<div class="container">
  <form action="employee_payroll_entry_submit.php" method="post">
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
        <label for="emp_slry_month">Employee Salary Month</label>
      </div>
      <div class="col-75">
        <select id="emp_slry_month" name="empMonth">
          <option value="">Select Month...</option>
          <option value="January">January</option>
          <option value="February">February</option>
          <option value="March">March</option>
          <option value="April">April</option>
          <option value="May">May</option>
          <option value="June">June</option>
          <option value="July">July</option>
          <option value="August">August</option>
          <option value="September">September</option>
          <option value="October">October</option>
          <option value="November">November</option>
          <option value="December">December</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="emp_slry_yr">Employee Salary Year</label>
      </div>
      <div class="col-75">
        <input maxlength="4" type="number" id="emp_slry_yr" name="empYear" placeholder="Enter Year..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="rmbrsmnt_date">Reimbursment Date</label>
      </div>
      <div class="col-75">
        <input type="date" id="rmbrsmnt_date" name="empRmbr">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="transaction_id">Transaction ID</label>
      </div>
      <div class="col-75">
        <input type="text" maxlength="10" id="transaction_id" name="transID" placeholder="Enter Transaction ID..">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</body>
</html>
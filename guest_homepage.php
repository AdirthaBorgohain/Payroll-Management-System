<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HomePage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/homepage.css" />
</head>
<body>
    <div class="card">
        <div class="container">
            <div class="title-card">
                <h1 class="title-txt">View Details</h1>
            </div>
            <form method="post" action="employee_details.php">
                    <label>
                        <span>
                            <p>
                                Search By
							    <select required name="SearchOption" >
								    <option value="">Select...</option>
                                    <option value="E">Employee ID</option>
								    <option value="FN">First Name</option>
								    <option value="D">Department</option>
							    </select>
							</p>
						</span>		
						<input type="text" style="margin-right:20px" name="userInput">
                        <input class="button" type="submit" value="Search">			
                    </label>
            </form>
            <a style="margin-left:80%; text-decoration: none;" href="employee_all.php">
                <button class="button" style="background-color: rgb(233, 131, 14); width:auto">View all Employees</button>
            </a>
            <br><br>
        </div>
    </div>
</body>
</html>
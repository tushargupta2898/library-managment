<!doctype html>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SEARCH TABLE</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<body style="margin-left:20px">
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
            <div class="table100 ver4 m-b-110">
					<table data-vertable="ver4">					
					<div class="panel panel-primary">
						<div class="panel-heading">
 						 <b><h1>EMPLOYEE SEARCH DETAILS</h1></b>
						</div>
                     </div>
							 <thead>
							 <tr class="row100 head">
							<th class="column100 column1" data-column="column1">STUDENT ID</th>
							<th class="column100 column2" data-column="column2">EMPLOYEE NAME</th>
							<th class="column100 column3" data-column="column3">EMAIL ID.</th>
							<th class="column100 column4" data-column="column4">PASSWORD</th>
							<th class="column100 column5" data-column="column5">SUBJECT</th>
							<th class="column100 column6" data-column="column6">BRANCH</th>
							<th class="column100 column7" data-column="column7">SEMESTER</th>
							<th class="column100 column8" data-column="column8">GENDER</th>
							<th class="column100 column9" data-column="column9">ADDRESS</th>
							<th class="column100 column10" data-column="column10">CONTACT</th>
							<th class="column100 column11" data-column="column11">IMAGE</th>
							<th class="column100 column12" data-column="column12">OPTIONS</th>
</tr>
</thead>
<?php
							require('connection.php');
							$qry="select * from signup_table
							inner join branch_table on signup_table.s_branch=branch_table.b_id
							inner join semester_table on signup_table.s_semester=semester_table.sem_id";
							$rs=mysql_query($qry);
							$n = 1;
							while($row=mysql_fetch_array($rs,MYSQL_ASSOC))
							{
								$x=$row['s_id'];
								echo "<tr>
								<td class='column100 column1' data-column='column1'><form method='post' action='delete2.php'><input 																																																																																												type='checkbox' name='id[]' value='".$x."'>".$n ."</td>
								<td class='column100 column2' data-column='column2'>" .$row['s_name'] ."</td>
								<td class='column100 column3' data-column='column3'>" .$row['s_email'] ."</td>
								<td class='column100 column4' data-column='column4'>" .$row['s_password'] ."</td>
								<td class='column100 column5' data-column='column5'>" .$row['s_subject'] ."</td>
								<td class='column100 column6' data-column='column6'>" .$row['b_title'] ."</td>
								<td class='column100 column7' data-column='column7'>" .$row['sem_title'] ."</td>
								<td class='column100 column8' data-column='column8'>" .$row['s_gender'] ."</td>
								<td class='column100 column9' data-column='column9'>" .$row['s_address'] ."</td>
								<td class='column100 column10' data-column='column10'>" .$row['s_contact'] ."</td>
								<td class='column100 column11' data-column='column11'><img src='uploads/".$row['s_image']."' height='100px'>								</td>
								<td class='column100 column12' data-column='column12'><a href=''>view</a>/<a href='edit1.php?uid=$x'>edit								</a>/<a href='delete2.php?uid=$x'>delete</a></td>
								</tr>";	
								$n++;
								}
								?>
                   </table>
    </div></div></div></div>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>
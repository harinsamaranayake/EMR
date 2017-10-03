<!DOCTYPE html>
<html>
<head>
	<title>Customer Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="form.css">
	<style>
		table {
		    font-family: arial, sans-serif;
		    border-collapse: collapse;
		    width: 80%;
		    margin-left: 50px;
		    margin-top: 20px;
		    border: 2px solid #0EB3B3;		    
		}

		th {
		    border: 1px solid #000000;
		    text-align: left;
		    padding: 8px;
		    background-color: #dddddd;
		}

		td {
		    border: 1px solid #000000;
		    text-align: left;
		    padding: 2px;
		}		

		tr:hover{
			background-color: #A7E9F9;
		}
	</style>
</head>
<body>
	<!-- from here -->
	<div class="window_container">
		<div class="header">
			<span><u>Customers</u></span>						
		</div>

		<?php

			$server='localhost';
			$username='root';
			$password='';
			$database='emr';

			$connect=mysqli_connect($server,$username,$password,$database);

			if($connect){
				echo 'Success';
			}else{
				die('Error.');
			}

			$query='select * from customer';

			$resultset=mysqli_query($connect,$query);

			while($row=mysql_fetch_array($resultset)){
				echo $row[0];
			}

		?>

		<form method="post" action="customer.php">
			<table>
				<tr>
					<th>NIC</th>
					<th class="form_table_row_description">Name</th>
					<th class="form_table_row_description">Gender</td>
					<th class="form_table_row_description">Address</th>
					<th class="form_table_row_description">Telephone</th>
					<th class="form_table_row_description">Mobile</th>
					<th class="form_table_row_description">Email</th>					
				</tr>

				<tr>
					<td class="form_table_row_description">NIC</td>
					<td class="form_table_row_description">Name</td>
					<td class="form_table_row_description">Gender</td>
					<td class="form_table_row_description">Address</td>
					<td class="form_table_row_description">Telephone</td>
					<td class="form_table_row_description">Mobile</td>
					<td class="form_table_row_description">Email</td>					
				</tr>													
			</table>
		</form>
	</div>
</body>
</html>
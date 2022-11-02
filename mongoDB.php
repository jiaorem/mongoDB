<?php
include "vendor/autoload.php";
$client = new MongoDB\Client("mongodb://localhost:27017");
$collection = $client->local->students;
$result = $collection->find();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>MongoDB Students</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
    word-wrap: break-word;
}
table.table tr th:first-child {
	width: 100px;
    word-wrap: break-word;
}
table.table tr th:last-child {
	width: 100px;
    word-wrap: break-word;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    

td {
    word-wrap: break-word;
}
</style>
<script>
$(document).ready(function(){
	// Activate tooltip
	$('[$class-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>

<div class="container-xl">
	<div class="table table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2><b>Students</b></h2>
					</div>
				</div>
			</div>
			
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th scope="col">ID</th>
                        <th scope="col">Student Number</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Birth Date</th>
                        <th scope="col">Address</th>
                        <th scope="col">Program</th>
                        <th scope="col">Contact Number</th>
                        <th scope="col">Emergency Contact</th>
					</tr>
				</thead>

               <?php 
                foreach ($result as $student) {
                ?>
				<tbody>
            <tr>
                <td scope="row"><?php echo $student['_id']?></td>
                <td scope="row"><?php echo $student['studentId']?></td>
                <td scope="row"><?php echo $student['firstName']?></td>
                <td scope="row"><?php echo $student['lastName']?></td>
                <td scope="row"><?php echo $student['birthdate']?></th>
                <td scope="row"><?php echo $student['address']?></td>
                <td scope="row"><?php echo $student['program']?></td>
                <td scope="row"><?php echo $student['contactNumber']?></td>
                <td scope="row"><?php echo $student['emergencyContact']?></td>
            </tr>
				</tbody>

				<?php }?>
			</table>
		</div>
	</div>        
</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD SYSTEM</title>

	<!-- bootstrap css -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- datatables css -->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

</head>
<body>
	<div class="container">
			<div class="row">
				<div class="col-md-12">
				<h1>My first bootstrfap</h1><br/>
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#addMember">
					Add</button>
				<button type="button" class="btn btn-danger">Cancel</button><br/>
				<?php require('retrieve.php');
				?>
				<table class = "table">
				<tr>
					<th>ID</th>
					<th>fname</th>
					<th>lname</th>
					<th>contact</th>
				</tr>
				<?php 
					foreach($output ['data'] as $row){
				?>
				<tr>
					<td><?php echo $row[0]; ?></td>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2]; ?></td>
					<td><?php echo $row[3]; ?></td>
				</tr>

					<?php  	}	?>



				</div>
			</div>
	</div>


	<div class="modal fade" role="dialog" id="addMember">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header"> 
					please input member data :5
				</div>
				<form method="POST" action="./phplib/create.php">
				<div class="modal-body">
					ID : <input type="text" name="id"><br>
					fname: <input type="text" name="fname"><br>
					lname : <input type="text" name="lname"><br>
					contact : <input type="text" name="contact"><br>

				</div>
				<div class="modal-footer">
					<input type="submit" value="SUBMIT">
					<input type="reset" value="Reset">
				</div>
			</form>
			</div>
		</div>
	</div>

	<?php
		//include('php_action/retrieve.php');
	?>

	<!-- jquery plugin -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- bootstrap js -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- datatables js -->
	<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

	

</body>
</html>

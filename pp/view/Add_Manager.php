<?php 
	require_once('header.php');
	

?>

<html>
<head>
	<title>Create New</title>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
		<a href="home.php">Back</a> | 
		<a href="../controller/logout.php"> logout </a>

		
		<form onsubmit="return Sellervalidate()">
			<fieldset>
				<legend>ADD Manager</legend>
				<table>
					<tr>
						<td>Name</td></tr>
						<tr>
						<td><input type="text" id="username" name="username" value=""></td>
						<td id="p"></td>
					</tr>
					<tr>
						<td>ID</td>
						</tr>
						<tr>
						<td><input type="Number" id="id" name="id" value=""></td>
						<td id="a"></td>
					</tr>
					
					<tr>
						<td>password</td></tr>
						<tr>
						<td><input type="password" id="password" name="password" value=""></td>
						<td id="r"></td>
					</tr>
					
					<tr>
						<td>Phone_Number</td></tr>
						<tr>
						<td><input type="text" id="Pnumber" name="Pnumber" value=""></td>
						<td id="t"></td>
					</tr>
					<tr>
						<td>Email</td></tr>
						<tr>
						<td><input type="email" id="email" name="email" value=""></td>
                        <td id="h"></td>
					</tr>
										<tr>
						<td>DOB</td></tr>
						<tr>
						<td><input type="date" id="dob" name="dob" value=""></td>
						<td id="doba"></td>
					</tr>
					<tr>
						<td>Address</td></tr>
						<tr>
						<td >
							<textarea style="height: 70px;width: 180px;"></textarea>
						</td>
					</tr>
					<td><br></td>
					
					<tr>
						<td>
							<input type="submit" name="" id="submit" value="Submit" onclick="return managerajax()"/>
							<a href="home.php"> GO HOME </a>
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
		

</body>
</html>
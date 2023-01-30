<?php 
	if(!isset($_COOKIE['status'])){
		header('location: login.html');
	}
?>

<html>
<head>
	<title>Create New</title>
<script type="text/javascript" src="script.js"></script>
</head>
<body>
		<a href="home.php">Back</a> | 
		<a href="../controller/logout.php"> logout </a>

		
		<form onsubmit="return buyervalidate()">
			<fieldset>
				<legend>ADD BUYER</legend>
				<table>
					<tr>
						<td>Name</td></tr>
						<tr>
						<td><input type="text"id="username" name="username" value=""></td>
						<td id=p></td>
					</tr>
					<tr>
						<td>Age</td>
						</tr>
						<tr>
						<td><input type="Number"id="age" name="age" value=""></td>
						<td id=a></td>
					</tr>
					<tr>
						<td>National Id</td>
						</tr>
						<tr>
						<td><input type="Number" id="id"name="id" value=""></td><td id=r></td>
					</tr>
					<tr>
						<td>Password</td></tr>
						<tr>
						<td><input type="password"id="password" name="password" value=""></td>
						<td id=t></td>
					</tr>
					
					<tr>
						<td>Phone_Number</td></tr>
						<tr>
						<td><input type="text" id="Pnumber" name="Pnumber" value=""></td>
						<td id=h></td>
					</tr>
					<tr>
						<td>Email</td></tr>
						<tr>
						<td><input type="email" id="email" name="email" value=""></td>
						<td id=m></td>
					</tr>
										<tr>
						<td>DOB</td></tr>
						<tr>
						<td><input type="date"id="dob" name="dob" value=""></td>
						<td id=l></td>
					</tr>
					
					
					<tr>
						<td>
							<input type="submit"id="Submit" name="Submit" value="Submit" onclick="return buyerajax()"/>>
							
						</td>
					</tr>
				</table>
			</fieldset>
		</form>

</body>
</html>
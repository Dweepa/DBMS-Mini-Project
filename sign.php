<!DOCTYPE HTML>
<html>
	<body>
	<form action="add_members.php" method="GET">
		<input type="text" name="ssn" pattern="[A-Z0-9]{12}" required><br>
		<input type="text" name="name" placeholder="Name" pattern="[a-zA-Z ]+" required><br>
		<input type="radio" name="gender" value="male">MALE
		<input type="radio" name="gender" value="female">FEMALE<br>


		<input type="email" placeholder="Email" name="email" required><br>
		<input type="text" placeholder="Contact Number" name="pno" pattern="[0-9]{7,11}" required><br>
		<input type="password" name="password"><br>
		<select name="type">
			<option value="student">student</option>
			<option value="teacher">teacher</option>
		</select>
		<select name="dept">
			<option  value="cse">CSE</option>
			<OPTION  value="ec">EC</OPTION>
			<option  value="me">ME</option>
		</select>
		<input type="submit">
	</form>



 <?php
$servername = "localhost";
$username = "root";
$password="dweepacomp";
echo "hello";
$conn=mysqli_connect($servername,$username,$password,'shop');


?>

</body>
</html>
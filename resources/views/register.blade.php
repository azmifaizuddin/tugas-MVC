<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Buat Account Baru!</h1>
	<h3>Sign Up Form</h3>
	<form  action="/welcome" method = "POST">
        @csrf
		<label for="first_name">First Name:</label> <br>
		<br>
		<input type="text" id="first_name" name="firstName"> <br>
		<br>

		<label for="last_name">Last Name:</label> <br>
		<br>
		<input type="text" id="last_name" name = "lastName"> <br>
		<br>

		<label>Gender:</label> <br>
		<br>
		<input type="radio" id="gender" value="0">Male <br>
		<input type="radio" id="gender" value="1">Female <br>
		<input type="radio" id="gender" value="2">Other <br>
		<br>

		<label>Nationality: </label><br>
		<br>
		<select>
			<option>Indonesian</option>
			<option>Malaysian</option>
			<option>Singapore</option>
			<option>Australian</option>
		</select> <br>
		<br>

		<label>Language Spoken:</label><br>
		<br>
		<input type="checkbox" name="language_spoken" value="0">Bahasa Indonesia <br>
		<input type="checkbox" name="language_spoken" value="1">English <br>
		<input type="checkbox" name="language_spoken" value="2">Other <br>
		<br>

		<label for="bio">Bio:</label><br>
		<br>
		<textarea cols="30" rows="7" id="Bio"></textarea><br>
		<input type="submit" value="Sign Up">
	</form>

</body>
</html>
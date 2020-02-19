<!DOCTYPE html>
<html>
<head>
	<title>Person Profile</title>
</head>
<body>
	<h1>Personal Profile</h1>
	<form>
		<table border="1">
			<tr>
				<td colspan="2">
					<center><h3>PERSON PROFILE</h3></center>
				</td>
				
			</tr>
			<tr>
				<td>Name </td>
				<td><input type="text" name="" value=""/></td>
			</tr>
			<tr>
				<td>Email </td>
				<td><input type="email" name="" value=""/></td>
			</tr>
			<tr>
				<td>Gender: </td>
				<td> 
					<input type="radio" name="gender" value="">Male 
					<input type="radio" name="gender" value="">Female
					<input type="radio" name="gender" value="">Other
				</td>
			</tr>
			<tr>
				<td>DOB:</td>
				<td>
					<input type="date" name="" value=""/>
				</td>
			</tr>
			<tr>
				<td>Blood Gtroup:</td>
				<td>
					<select>
						<option>A+</option>
						<option>B+</option>
						<option>A-</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Degree</td>
				<td>
					<input type="checkbox" name="">SSC
					<input type="checkbox" name="">HSC
					<input type="checkbox" name="">BSc.
					<input type="checkbox" name="">MSc.
				</td>
			</tr>
			<tr>
				<td>
					Photo
				</td>
				<td>
					<input type="file" name="fileupload" value="fileupload" id="fileupload">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<br>
				</td>
			</tr>

			<tr>
				<td colspan="2">
					<input type="submit" name="" value="Submit">
					<input type="reset" name="" value="Reset">
				</td>
			</tr>



	</table>
	</form>
	
</body>
</html>
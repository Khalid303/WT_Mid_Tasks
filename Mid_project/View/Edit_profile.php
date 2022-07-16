<?php

	session_start();

	function setName() {
		echo $_SESSION["name"];
	} 

	function setEmail() {
		echo $_SESSION["email"];
	}

	function checkGender($gender) {
		if($_SESSION["gender"] == $gender) {
			echo "checked = \"checked\"";
		}
		else {
		}
	}

	function checkMobile() {
		echo $_SESSION["mobileNumber"];
	}

	function checkAddress() {
		echo $_SESSION["address"];
	}

	function checkRole($role) {
		if($_SESSION["role"] == $role)  {
			echo "checked = \"checked\"";
		}
		else {
		}
	}

	
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<fieldset>
    <legend><b>EDIT PROFILE</b></legend>
	<form>
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text" value=<?php setName(); ?>></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text" value=<?php setEmail(); ?>>
					<abbr title="hint: sample@example.com"></abbr>
				</td>
				<td></td>
			</tr>				
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>   
					<input name="gender" type="radio" <?php checkGender("Male"); ?> value="Male">Male
					<input name="gender" type="radio" <?php checkGender("Female"); ?> value="Female">Female
					<input name="gender" type="radio" <?php checkGender("Other"); ?> value="Other">Other
				</td>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Mobile Number</td>
				<td>:</td>
				<td><input name="mobileNumber" type="string" value=<?php checkMobile(); ?> ></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Address</td>
				<td>:</td>
				<td><textarea name="address" id="" cols="30" rows="5"></textarea></td>
				<td></td>
			</tr>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Role</td>
				<td>:</td>
				<td>   
					<input name="role" type="radio" <?php checkRole("Seller"); ?> value="Seller">seller
					<input name="role" type="radio" <?php checkRole("Customer"); ?> value="Coustomer">Coustomer
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" value="Submit">
		<a href="profile.php">Go Back</a>		
	</form>
</fieldset>
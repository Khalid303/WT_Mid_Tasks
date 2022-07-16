<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <table align="center" border="1" width="1000px">
        <tr>
            <td>
                <img src="Logo.png" alt="company logo" height="50px" width="150px">
            </td>
            <td>
            <p style="text-align:right">Logged in as <a href="">
                    <?php echo $_SESSION["name"];?>
                </a> | <a href="Logout.php">Logout</a></p>
            </td>   
        </tr>
        <tr>
            <td width="30%">
                Account
                <hr>
                <ul>
                    <li><a href="Dashboard.php">Dashboard</a></li>
                    <li><a href="profile.php">View Profile</a></li>
                    <li><a href="edit_profile.php">Edit Porfile</a></li>
                    <li><a href="ChangeProfilePicture.php">Change Profile Picture</a></li>
                    <li><a href="ChangePassword.php">Change Password</a></li>
                </ul>
            </td>
            <td>
                <fieldset>
                    <legend>Profile</legend>
                    <table>
                        <tr>
                            <td>Name: <hr></td>
                            <td><?php echo $_SESSION["name"];?> <hr></td>
                            <td rowspan="4"> <img src="profile1.png" alt="user profile" height="150px" width="150px"></td>
                        </tr>
                        <tr>
                            <td>Email: <hr></td>
                            <td><?php echo $_SESSION["email"];?> <hr></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Gender: <hr></td>
                            <td><?php echo $_SESSION["gender"];?> <hr></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Mobile Number: <hr></td>
                            <td><?php echo $_SESSION["mobileNumber"];?> <hr></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Address: <hr></td>
                            <td><?php echo $_SESSION["address"];?> <hr></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Role: <hr></td>
                            <td><?php echo $_SESSION["role"];?> <hr></td>
                            <td></td>
                        </tr>
                    </table>
                </fieldset>
            </td>
        </tr>
    </table>
</body>
</html>
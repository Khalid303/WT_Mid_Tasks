<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <table align="center" border="1px" width="1000px">
        <tr>
            <td>
                <img src="Logo.png" alt="logo" height="50px" width="150px">
            </td>
            <td>
            <p style="text-align:center;">Logged in as <a href="">
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
                    <li><a href="Profile.php">View Profile</a></li>
                    <li><a href="Edit_profile.php">Edit Porfile</a></li>
                    <li><a href="ChangeProfilePicture.php">Change Profile Picture</a></li>
                    <li><a href="ChangePassword.php">Change Password</a></li>
                    
                </ul>
            </td>
            <td align="center">Welcome <?php echo $_SESSION["name"];?> </td>
        </tr>
    </table>
</body>
</html>
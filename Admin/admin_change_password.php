<?php include "loggedin_header.php" ?>
<tr>
        <td width="190" valign="top">
            <b>&nbsp;Account</b><hr />
            <ul>
                <li><a href="admin_view_users.php">View Users</a></li>
                <li><a href="admin_profile.php">Profile</a></li>
                <li><a href="#">Change Profile Picture</a></li>
                <li><a href="change_password.php">Change Password</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </td>
        <td valign="top">
            <fieldset>
    <legend><b>CHANGE PASSWORD</b></legend>
    <form>
        <table>
            <tr>
                <td><font size="3">Current Password</font></td>
                <td>:</td>
                <td><input type="password" /></td>
                <td></td>
            </tr>
            <tr>
                <td><font size="3" color="green">New Password</font></td>
                <td>:</td>
                <td><input type="password" /></td>
                <td></td>
            </tr>
            <tr>
                <td><font size="3" color="red">Retype New Password</font></td>
                <td>:</td>
                <td><input type="password" /></td>
                <td></td>
            </tr>
        </table>
        <hr />
        <input type="submit" value="Submit" />
    </form>
</fieldset>
            
        </td>
        </tr>


<?php include "loggedin_footer.php" ?><center>
	
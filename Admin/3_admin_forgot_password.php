<fieldset>
    <legend><b>Reset Password</b></legend>

	<form method="post" action="regCheck.php">
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
		
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text" value="">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>		
			
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="confirmPassword" type="password"></td>
				<td></td>
			</tr>		
			
		</table>
		<hr/>
		<input type="submit" value="Submit">
		<input type="reset">
	</form>
</fieldset>
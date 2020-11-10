
<html>
	<title>
		Login
	</title>
	<body>
		<form action="" method="post">
			<table>
			<tr>
				<td>
					Username:
				</td>
				<td>
					<input type="text" name="uname">
					<span>
						<?php
                          echo $err_msg1;
						?>
					</span>
				</td>
			</tr>
			<tr>
				<td>
					Password:
				</td>
				<td>
					<input type="Password" name="pass">
					<span>
						<?php
                          echo $err_msg2;
						?>
					</span>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="right">
                   <input type="submit" name="submit" value = "login">
				</td>
			</tr>
		    </table>
		</form>
	</body>
</html>


<?php
   $errFullname = "";
   $name = "";
   $errUname = "";
   $pass = "";
   $cpass = "";
   $errMail = "";
   $mail = "";
   $errContactNo = "";
   $city = "";
   $contactno = "";
  
   if (isset($_POST["OK"])) {
   	  if (empty($_POST["Fullname"])) {
        $errName = "Full Name required*";
   	  }
   	  else $name = htmlspecialchars($_POST["fullname"]);
   	  if (empty($_POST["username"])) {
   	  	$errUname = "Username required*";
   	  }
   	  else if (strlen($_POST["username"]) < 6) {
   	  	$errUname = "Username must be at least 6 characters";
   	  }
   	  if (strlen(strpos($_POST["username"], " ")) > 0) {
   	  	if (strlen($errUname) > 0) {
   	  	  $errUname .= " and space is not allowed in username";
   	  	}
   	  	else $errUname = "Space is not allowed in username";
   	  }
   	  if (empty($_POST["pass"])) {
   	  	$pass = "Password required*";
   	  }
   	  else {
   	  	$getPass = $_POST["pass"];
   	  	if (strpos($getPass, "#") == false && strpos($getPass, "?") == false && $getPass[0] !== "#" && $getPass[0] !== "?") {
   	  	  $pass = "Password must contain a special character [Hint: # / ?].<br>";
		   }
   	  	$num_present = false;
   	  	$upper_present = false;
   	  	$lower_present = false;
   	  	for ($i = 0; $i < strlen($getPass); $i++) {
          if ($getPass[$i] >= '0' && $getPass[$i] <= '9') {
          	$num_present = true;
          }
          if ($getPass[$i] >= 'A' && $getPass[$i] <= 'Z') {
          	$upper_present = true; 
          }
          if ($getPass[$i] >= 'a' && $getPass[$i] <= 'z') {
          	$lower_present = true;
          }
   	  	}
   	  	if ($upper_present == false || $lower_present == false) {
   	  	  $pass .= "Password must combine at least one upper letter and one lower letter.<br>";
   	  	}
   	  	if ($num_present == false) {
   	  	  $pass .= "Password must contain at least one numeric character."; 
   	  	}
   	  }
   	  if (empty($_POST["cpass"])) {
   	  	$cpass = "Confirm password required*";
   	  }
   	  if (empty($_POST["email"])) {
   	  	$errMail = "Mail address required*";
   	  }
   	  else if (strlen(strpos($_POST["email"] , "@")) > 0 && strlen(strpos($_POST["email"], ".")) > 0) {
   	  	if (strpos($_POST["email"] , "@") > strrpos($_POST["email"], ".")) {
   	  	  $errMail = "Invalid mail format [wrong placcement]";
   	  	}
   	  	else $mail = htmlspecialchars($_POST["email"]);
   	  }
   	  else $errMail = "Invalid mail format [Missing characters]";
   	  if (empty($_POST["city"])) {
   	  	$city = "City required*";
   	  }
   	  if (empty($_POST["contactno"])) {
   	  	$errContactNo = "contact number required*";
   	  }
   	  else {
         if (is_numeric($_POST["contactno"]) == false) {
         	$errContactNo = "contact number has to be numeric";
         }
         else $cntactno = htmlspecialchars($_POST["contactno"]);
   	  }
   
   	  
   }
?>
<html>
	<title>
		Register page
	</title>
	<hr>
	<form action="" method="post">
		<fieldset>
			
				<h1>
					Welcome To Registration
				</h1>
			
				<table>
					<tr>
						<td align="right">
							Full Name:
						</td>
						<td>
							<input type="text" name="name">
							<span> 
                              <?php
                                echo $errFullname;
                              ?>
							</span>
						</td>
					</tr>
					<tr>
						<td align="right">
							User name:
						</td>
						<td>
							<input type="text" name="username">
							<span>
								<?php
                                  echo $errUname;
								?>
							</span>
						</td>
					</tr>
					<tr>
						<td align="right">
							Password:
						</td>
						<td>
							<input type="Password" name="pass">
							<span>
								<?php
                                  echo $pass;
								?>
							</span>
						</td>
					</tr>
					<tr>
						<td align="right">
						     Confirm Password:
						</td>
						<td>
							<input type="Password" name="cpass">
							<span>
								<?php
                                  echo $cpass;
								?>
							</span>
						</td>
					</tr>
					<tr>
						<td align="right">
							Gender:
						</td>
						<td>
							<input type="radio" name="gender"> Male
							<input type="radio" name="gender"> Female
						</td>
					</tr>
					<tr>
						<td align="right">
							Email:
						</td>
						<td>
							<input type="text" name="email">
							<span>
								<?php
                                  echo $errMail;
								?>
							</span>
						</td>
					</tr>
					<tr>
						<td align="right">
							Contact No.:
						</td>
						<td>
							<input type="number" name="contactno">
							<span>
								<?php
                                  echo $errContactNo;
								?>
							</span>
						</td>
					</tr>
					<tr>
						<td align="right">
							City:
						</td>
						<td>
							<select>
							<option> Ahmedabad </option>
							<option> Lahore </option>
							</select>
						</td>
						<td>	
							<span>
								<?php
                                  echo $city;
								?>
							</span>
						</td>
					</tr>
				<tr>
				<td colspan="2" align="right">
                   <input type="submit" name="submit" value = "OK">
				</td>
			</tr>
				</table>
		</fieldset>
	</form>
</html>
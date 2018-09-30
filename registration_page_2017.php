<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>2017 Registration Page</title>

<link href="stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php include ('header.php'); ?>
	<?php include ('sidebar1.php'); ?>
		<td>
		  <div class="content" id="registration" style="align-content: center">
				<form name="reg_submit" method="POST" action="" style="align-items: center">
					<table width="550" border="0" cellpadding = "0" style="padding-left: 150px">
						<tbody>
							<tr>
								<td width="185">First Name:</td>
								<td colspan="3"><input name="firstName" id="firstName" type="text" width="150px"></td>
							</tr>
							<tr>
								<td>Last Name:</td>
								<td colspan="3"><input name="lastName" id="lastName" type="text" width="150px"></td>
							</tr>
							<tr>
								<td>Email:</td>
								<td colspan="3"><input name="email" id="email" type="email" width="150px"></td>
							</tr>
							<tr>
								<td>Phone:</td>
								<td colspan="3"><input type="tel" name="phoneNum" id="phoneNum" width="150px"></td>
							</tr>
							<tr>
								<td>Address:</td>
								<td colspan="3"><input type="text" name="oneAddress" id="oneAddress" width="150px"></td>
							</tr>
							<tr>
								<td>Address 2:</td>
								<td colspan="3"><input type="text" name="twoAddress" id="twoAddress" width="150px"></td>
							</tr>
							<tr>
								<td>City:</td>
								<td colspan="3"><input type="text" name="cityName" id="cityName" width="150px"></td>
							</tr>
							<tr>
								<td>State:</td>
								<td width="60"><input id="shortState" name="shortState" type="text" value="CO" size="2" maxlength="2"></td>
								<td width="40">Zip:</td>
								<td width="155"><input type="text" name="zipCode" id="zipCode" size="5" maxlength="5"></td>
							</tr>
							<tr>
								<td>Date of Birth:</td>
								<td colspan="3"><input type="date" name="bday" id="bday" style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'"></td>
							</tr>
							<tr>
								<td>Gender:</td>
								<td><select id="gender" name="gender">
                       							<option value="0" selected>Select:</option>
                        						<option value="1">Male</option>
                        						<option value="2">Female</option>
                        						</select>
								</td>
							</tr>
							<tr>
								<td>Game Type:</td>
                     				<td colspan="3"><select name="game_list" id="game_list">
                        				<option value="0" selected>Select One:</option>
                        				<option value="1">Fast Pitch</option>
                        				<option value="2">Slow Pitch</option>
                        				<option value="3">Both</option>
                      					</select>
								</td>
							</tr>
						</tbody>
					</table>
				</form>
				
				
			</div>
		</td>
	<?php include ('sidebar2.php'); ?>
</body>
</html>

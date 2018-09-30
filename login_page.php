<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="images/favicon.ico">
<title>Login</title>

<link href="stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php include('header.php'); ?>
    <?php include('sidebar1.php'); ?>
      <td>
        <div class="content">
          <form ACTION="login_script.php" name="login" method="POST" style="padding-top:25px; padding-left:15px; width:310px" >
          	<p>
            <table>
              <tr>
                <td>
                    Username:
                </td>
                <td>
                  <input id="username" name="username" type="text" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>">
                </td>
              </tr>
              <tr>
                <td>
                    Password:
                </td>
                <td>
                  <input name="password" type="password">
                </td>
              </tr>
              <tr>
              	<td colspan="2">
              	  <input type="submit" name="submit" id="submit" value="Submit" tabindex="3" style="float:right">
           	    </td>
           	  </tr>
            </table>
            </p>
          </form>
        </div>
      </td>
    <?php include('sidebar2.php'); ?>
    <?php include('footer.php'); ?>
</body>
</html>
<?php
mysql_free_result($login_test);
?>

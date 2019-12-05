<head>
 <!--<link rel="stylesheet" href="../css/style.css" type="text/css" />-->
<link href="../css/admin_login.css " rel="stylesheet" type="text/css"/>
<div id="main">
</head>
<?php
include('connection.php');
session_start();
include_once('header1.php');
?>
<form action="admin_login_interface.php" method="post">
<table id="table">
<tr style="border-bottom:1px solid #ccc;">
<td id="td" class="h3" colspan="2"><center>Login</center></td>
</tr>
<tr>
<td id="td">Username</td>
<td id="td"><input type="text" class="textbox" name="username"/></td>
</tr>
<tr>
<td id="td">Password</td>
<td id="td"><input type="password" class="textbox" name="pass"/></td>
</tr>
<tr>
<td id="td" colspan="2">
<center>
<input id="ubutton" width="30px" height="20px" type="submit" id="button" value="Login" name="login"/>
</center></td>
</tr>
</table>
</form>
</div>

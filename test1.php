<html>
<head>
	<script>
	function check()
	{
		window.alert(form1.h1.value);
		window.alert(form1.h2.value);
		window.alert(form1.h3.value);
		/*var x=this.h1.value;
		document.write(x);
		<?php echo "document.write(\"hello i am php\");";?>
		document.write(x);
		//window.location = "place_order.php";*/

	}
	</script>
</head>
<body>
<form name="form1" method="post" onSubmit="check()">
<input type="text" name="h1" value="555">
<input type="text" name="h2" value="666">
<input type="text" name="h3" value="777">
<input type="submit" name="b1" value="go">
</form>

<form name="form1" method="post">
<input type="text" name="h1" value="555">
<input type="text" name="h2" value="666">
<input type="text" name="h3" value="777">
<input type="button" name="b1" value="goo" onClick=window.alert("hello");>
</form>
<!--<form name="form1" method="post" onSubmit="window.alert(h1.value);">
<input type="text" name="h1" value="777">
<input type="button" name="b1" value="go" onClick="window.alert(b1.value);">

<input type="text" name="h1" value="999">
<input type="button" name="b1" value="go" onClick="window.alert(this.value);">
</form>-->
</body>
</html>
 onClick=<?php echo "window.alert(form1.fname.value);";?>

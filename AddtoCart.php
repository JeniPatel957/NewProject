<html>
<body>
<h1>Add To Cart Page</h1>
<form>
Item:<input type='text' name='txtitem'/><br/>
Count:<input type='number' name='txtcount'/><br/>
Price:<input type='number' name='txtprice'/><br/>
<input typ='submit' value='submit'/>
</form>
<body>
</html>
<?php
if($_POST['txtitem']=='')
{
	echo "Enter Item";
}
if($_POSST['txtcount']=='')
{
	echo "Enter Count";
}
if($_POSST['txtprice']=='')
{
	echo "Enter Price";
}
?>

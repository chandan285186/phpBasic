
<?php
$a = $_POST['number1'];
if($a>0)
{
echo'positive number';
}
else if($a==0)
{
echo'zero';
}
else
{
echo'negative number';
}

?>


<html lang="en">
<boby>
<form action="" method="post">
<input type="text" name="number1" value=""/><br /><br />
<input type="submit" name="submit" value="submit"/>
</form>
</boby>


</html>
<!--<?php
 echo "chandan";
?>
-->

<!--<?php
  $sum = $_POST['number1'] + $_POST['number2'];
  $sub =$_POST['number1'] - $_POST['number2'];
  $mul =$_POST['number1'] * $_POST['number2'];
  $div =$_POST['number1'] / $_POST['number2'];
  
  echo 'Sum is: '.$sum.'<br>'.'Sub is: '.$sub.'<br>'.'Multi:'.$mul.'<br>'.'divis:'.$div.'';
?>
-->


<?php
$chandan = $_POST['number1']%2;
if($chandan==0)
{
echo'number 1 is even';
}
else
{
echo'number 1 is odd';
}


?>




<html lang="en">
<boby>
<form action="" method="post">
<input type="text" name="number1" value=""/>
<input type="text" name="number2" value=""/><br />

<input type="submit" name="submit" value="submit"/>
</form>
</boby>


</html>
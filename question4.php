



<!--<?php
 $var = $_POST['number1'];
 
 if($var>=10000){
 	if($var>20000){
		echo "Gucci Bag, Gucci Belt";
	}else{
		echo "Gucci Bag";
	}
 }elseif($var>=5000){
 	echo "Levis Bag";
 }else{
 	echo "Something";
 }

 ?>-->
 
 
 <?php
  $chandan = $_POST['number1'];
  if($chandan>=10000)
   if($chandan>20000)
   {
   echo'gucci bag ,gucci belt';
   }
   else
   {
   echo 'gucci bag';
   }
   elseif($chandan>=5000)
   {
   echo'Levis Bage';
   }
   else{
   echo'Something';
   
   }
  
 ?>

<html lang="en">
<boby>
<form action="" method="post">
<input type="text" name="number1" value=""/>
<input type="submit" name="submit" value="submit"/>
</form>
</boby>


</html>
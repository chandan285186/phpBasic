
<?php
include_once "dbconnection.php";
$mgs = "";

if(isset($_POST['submit'])){
$student_id = $_POST['student_id'];
$name = $_POST['name'];
$f_name = $_POST['f_name'];	
$m_name =$_POST['m_name'];
$dob = $_POST['dob'];
$institute = $_POST['institute'];
$subject = $_POST['subject'];
$mobile_no = $_POST['mobile_no'];
$email = $_POST['email'];
$address = $_POST['address'];

 $sql = "INSERT INTO `basic_info` (`student_id`,`name`,f_name,`m_name`,`dob`,`institute`,`subject`,`mobile_no`,`email`,`address`)
VALUES('".$student_id."','".$name."','".$f_name."','".$m_name."','".$dob."','".$institute."','".$subject."','".$mobile_no."','".$email."','".$address."')";

$query =$conn->query($sql);
if($query)
{
$msg = "Data insert Successfully";
}
else{

 $mgs =  "Data not inserted";
    }
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<style>
    div {
        width: 500px;
        margin: 0 auto;
        border: 1px solid #ddd;
        padding: 20px;
    }
    input{
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
    }
    input[type="submit"]{
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }
</style>
<body>
<div>
	<h3>Student Inormation</h3>
	<form action="" method="post">
		<label for="">Student id</label>
		<input type="text" name="student_id" value="">
		<label for="">Name</label>
		<input type="text" name="name" value="">
		<label for="">Father name</label>
		<input type="text" name="f_name" value="">
		<label for="">Mother Name</label>
		<input type="text" name="m_name" value="">
		<label for="">Date Of Birth</label>
		<input type="date" name="dob" value="">
        <label for="">Institute</label>
        <input type="tex" name="institute" value="">
        <label for="">Subject</label>
        <input type="text" name="subject" value="">
        <label for="">mobile_No</label>
        <input type="text" name="mobile_no" value="">
		<label for="">Email</label>
		<input type="text" name="email" value="">
		<label for="">Addres</label>
		<input type="text" name="address" value="">
		<input type="submit" name="submit" value="Submit">
	</form>	
</div>
<style>
    
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th,td{
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even){
            background-color: #f2f2f2;
        }
        th{
            background-color: #4CAF50;
            color: white;
        }
         
<?php

$sql ="SELECT * FROM basic_info";
$query = $conn->query($sql);
?>

</style>

  
  <table>
  <tbody>
 <tr>
<th>Sl</th>
<th>Student Id</th>
<th>Name</th>
<th>Father Name</th>
<th>Mother Name</th>
<th>Date Of Birth</th>
<th>Institute</th>
<th>Subject</th>
<th>mobile_No</th>
<th>Email</th>
<th>addres</th>
</tr>
	<?php
   while($row = $query->fetch_object()){ 
  ?>
  <tr>
    <td></td>
      <td><?php echo $row->student_id;?></td>
      <td><?php echo $row->name;?></td>
      <td><?php echo $row->f_name;?></td>
      <td><?php echo $row->m_name;?></td>
      <td><?php echo $row->dob;?></td>
      <td><?php echo $row->institute;?></td>
      <td><?php echo $row->subject;?></td>
      <td><?php echo $row->mobile_no;?></td>
      <td><?php echo $row->email;?></td>
	  <td><?php echo $row->address;?></td> 
	 

   </tr>
   
  <?php }?>
</tbody>



</table>
    
</body>
</html>
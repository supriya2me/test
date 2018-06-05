<?php
$db=new mysqli("localhost", "root", " " , "rizu");
if(!$db)
{
print "Error";
}
 $name=$_POST['name'];
$age=$_POST['age'];
$mobile=$_POST['mobile'];
$sql="insert into `student`(`id`,`name`,`age`,`mobile`)values('','$name','$age','$mobile')";
$db->query($sql);
header("location:show.php");
?>
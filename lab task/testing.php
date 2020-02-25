<?php
$name=$_POST['uname'];
$uemail=$_POST['uemail'];
$gender=$_POST['ugender'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$blood=$_POST['blood'];
$picture=$_POST['file'];
$email=$uemail;
$elength=strlen($email);
$split=$name;
$length=strlen($name);
if($length>=2 && !empty(trim($name)) && is_numeric($name)==false)
{
	echo $name."<br>";
}
else
{
	echo("not correct name<br>");
}
if(!empty(trim($email))&& $email[$elength-4]=='.' && strpos($email,'@')!=false)
{
	echo $email."<br>";
}
else
{
	echo("not correct email<br>");
}
if(isset($_POST['ugender']))
{
	echo $gender."<br>";
}else
{
	echo("please chose ur gender<br>");
}
if(!empty(trim($day)) && !empty(trim($month)) && !empty(trim($year))&& $day>=0 || $day<=31 && $month>=1|| $month<=12 && $year>=1900 || $year<=2016)
{
	echo $day."/".$month."/".$year."<br>";
}
else
{
	echo("please chose ur birth date!<br>");
}
if(isset($_POST['degree']))
{
	echo $_POST['degree']."<br>";
}
else
{
	echo("chose a degree<br>");
}
if($blood=='A+'|| $blood=='B+' || $blood=='A-')
{
	echo $blood."<br>";
}
else
{
	echo("not correct blood<br>");
}
if(!empty(trim($picture)))
{
	echo("correct file<br>");
}
else
{
	echo("file not found!<br>");
}
?>
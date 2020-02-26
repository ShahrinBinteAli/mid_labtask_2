<?php
	session_start();
	
	if( isset($_REQUEST['signup'])){
		$id = $_REQUEST['idname'];
		$password =  $_REQUEST['password'];
		$conpassword =  $_REQUEST['con_pass'];
		$name =  $_REQUEST['uname'];
		$utype =  $_REQUEST['usertype'];
		if(empty(trim($id)) && empty(trim($password)) && empty(trim($conpassword)) && empty(trim($name)) && empty(trim($utype))){
			echo "Null submission found!";
		}else{

			$file = fopen('usr.txt', 'a');
			$user = fwrite($file,"user info");
			$data = explode('|', $user);

			if( trim($data[0])==$id && trim($data[1])== $password && trim($data[2])== $conpassword && trim($data[3])== $name && trim($data[4])== $utype){
				$_SESSION['idname'] = $id;
				$_SESSION['password'] = $password;
				$_SESSION['con_pass'] = $conpassword;
                $_SESSION['uname'] = $name;
                $_SESSION['usertype'] = $utype;


				header("location: login.php");
			}else{
				echo "invalid uname/password";
			}
		}

	}else{
		//echo "invalid request! please login first!";
		header("location: reg.html");
	}
?>


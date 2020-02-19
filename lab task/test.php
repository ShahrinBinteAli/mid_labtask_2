<?php
if( isset($_REQUEST['submit'])){
		$name = $_REQUEST['name'];
		$email =  $_REQUEST['email'];
		//$dd = $_REQUEST['dd'];
		//$mm = $_REQUEST['mm'];
		//$yy = $_REQUEST['yy'];

		if(empty(trim($name)) ){
			echo "null submission!<br>";
		}if(strlen($name)<2) {
			echo "invalid name<br>";
		}
		if(is_numeric($name[0]) == true) {
			echo "invalid<br>";
		}
 
		if(empty(trim($email)) ){
			echo "null submission!<br>";
		}
		if (!preg_match("/^[^@]{1,64}@[^@]{1,255}$/", $email)) {
        // Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
               return false;
                  }
       
		else{
			echo $name;
			echo "<br>";
			echo $email;
		
			

		}
	
	}
	 
	  if (isset($_REQUEST['submit'])){
	  	$radioButton ;
	      if($radioButton == "male"){
	   echo "checked";}
	 if ($radioButton == "female"){ echo "checked";}
	 if ($radioButton == "other") {echo "checked";}
	 }
          
	/*$radioButton = $_REQUEST['gender'];
		$dd = $_REQUEST['dd'];
		$mm = $_REQUEST['mm'];
		$yy = $_REQUEST['yy'];

		}
		
		if(!filter_var($email, FILTER_VALIDATE_EMAIL) || $radioButton == null || (!((((int)$dd >=1) && ((int)$dd <=31)) && (((int)$mm >= 1) && ((int)$mm <= 12)) && (((int)$yy >= 1900) && ((int)$yy <= 2016))))){
			echo "Unvalid Submission";
		}
		else{
			
		}

	}*/

?>
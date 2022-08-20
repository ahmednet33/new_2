
<?php






if(isset($_POST["fname"]) && trim($_POST["lname"]))	{ 
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  
 


	
  
   echo '<br>';
    echo '<br>';
	 echo 'تم اضافة البيانات بنجاح';
	   echo '<br>';
    echo '<br>';
  echo $fname;
   echo '<br>';
  echo $lname;
	
	
}
  
  

?>
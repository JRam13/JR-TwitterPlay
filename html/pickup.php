<?php

$where_form_is="http://".$_SERVER['SERVER_NAME'].strrev(strstr(strrev($_SERVER['PHP_SELF']),"/"));

session_start();
if( ($_SESSION['security_code']==$_POST['security_code']) && (!empty($_POST['security_code'])) ) { 

$query = "INSERT into `".$db_table."` (field_1,field_2,field_3,field_4,field_5,field_6,field_7,field_8,field_9,field_10,field_11,field_12) VALUES ('" . $_POST['name'] . "','" . $_POST['email'] . "','" . $_POST['email2'] . "','" . $_POST['address'] . "','" . $_POST['city'] . "','" . $_POST['state'] . "','" . $_POST['zip'] . "','" . $_POST['phone'] . "','" . $_POST['type'] . "','" . $_POST['make'] . "','" . $_POST['model'] . "','" . $_POST['year'] . $_POST['message'] . "')";

mail("test@adelmansco.com","Adelmansco.com - Pick-up Form","Form data:

Full Name: " . $_POST['name'] . " 
Email: " . $_POST['email'] . " 
Confirm Email: " . $_POST['email2'] . " 
Street Address: " . $_POST['address'] . " 
City: " . $_POST['city'] . " 
State : " . $_POST['state'] . " 
Zip Code: " . $_POST['zip'] . " 
Phone Number: " . $_POST['phone'] . " 
Vehicle Type: " . $_POST['type'] . " 
Vehicle Make: " . $_POST['make'] . " 
Vehicle Model: " . $_POST['model'] . " 
Vehicle Year: " . $_POST['year'] . " 
Special Instructions: " . $_POST['message'] . " 


 powered by phpFormGenerator.
");

include("thankyou.html");
}
else {
echo "Invalid Captcha String.";
}

?>
<?php
$name = $_POST['usrnam_name'];
$email = $_POST['mail_name'];
$number = $_POST['contct_name'];
$pswrd = $_POST['pass_name'];
$cpswrd = $_POST['cpass_name'];

// echo($name);
// echo($number);
// echo($pswrd);
// echo($cpswrd);

$envVarMARIADB_HOST = getenv('MARIADB_HOST');
$envVarMARIADB_PASSWORD = getenv('MARIADB_PASSWORD');
$envVarMARIADB_USER = getenv('MARIADB_USER');
$envVarMARIADB_DB = getenv('MARIADB_DB');

$db=mysqli_connect( $envVarMARIADB_HOST , $envVarMARIADB_USER , $envVarMARIADB_PASSWORD , $envVarMARIADB_DB ) or die("Could not connect to Database");

$querry = "INSERT into user__details(name, email, password, cont_num) VALUES('$name', '$email', '$pswrd', $number)";
mysqli_query($db, $querry) or die("Could not execute querry");
// echo("<font color= 'green' size= '5'>Data inserted Successfully</font>");

header('location: login_page.html');
?>

<?php
$name = $_POST['eml'];
$pswrd = $_POST['pass'];

$envVarMARIADB_HOST = getenv('MARIADB_HOST');
$envVarMARIADB_PASSWORD = getenv('MARIADB_PASSWORD');
$envVarMARIADB_USER = getenv('MARIADB_USER');
$envVarMARIADB_DB = getenv('MARIADB_DB');

$db=mysqli_connect( $envVarMARIADB_HOST ,$envVarMARIADB_USER ,$envVarMARIADB_PASSWORD ,$envVarMARIADB_DB) or die("Could not connect to Database");

$querry = "SELECT * FROM user__details WHERE email='$name' AND password='$pswrd'";
$result= mysqli_query($db, $querry) or die("Could not execute querry");
if(mysqli_num_rows($result)==1){
    header('location: landing_page.php');
}
else {
    echo("<font size='5' color= 'red'>Invalid user id or password</font>");
}

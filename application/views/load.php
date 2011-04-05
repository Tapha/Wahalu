<?php session_start();?>
 
<?php
 
require_once('classes/database.php'); 
 
//Get Data

$company_id = $_GET['company_id'];

$admin_id = $_GET['admin_id'];

if (isset($admin_id) && ($company_id))

{

//Instantiate Database Class

$db = new Database();

//Get User Information and save to session.Plus start session
	
	$add_data = $db->get_additional_company_information($company_id, $admin_id);
	
	//Get Additional user information
	
	$company_name = $add_data[0];
	
	$first_name = $add_data[1];
	
	$last_name = $add_data[2];
	
	$username = $add_data[3];
	
//Store values in session

$_SESSION['company_id'] = $company_id;

$_SESSION['admin_id'] = $admin_id;	

$_SESSION['company_name'] = $company_name;
	
$_SESSION['first_name'] = $first_name;
	
$_SESSION['last_name'] = $last_name;
	
$_SESSION['username'] = $username;	

?>
<!doctype html>

<html>

<head>

<title> Wahalu - Loading </title>

<link rel="stylesheet" type="text/css" href="/wahalu/css/style.css"/>

<link rel="shortcut icon" href="/wahalu/assets/images/icon/favicon.ico">

<script type="text/javascript" src="/wahalu/jquery/jquery.js">
</script>

<script type="text/javascript" src="/wahalu/jquery/script.js">

</script>

<script type="text/javascript">
$(document).ready(function(){
var counter = 0;
var interval = setInterval(function() {
    counter++;
    // Display 'counter' wherever you want to display it.

	if (counter == 3) {
		
	window.location = "/wahalu/dashboard/company_dashboard/index.php?company_id=<?php echo $company_id; echo "&admin_id="; echo $admin_id; ?>";
	
	}

}, 1000);
});
</script>

<link type="text/css" href="/wahalu/jquery/css/custom-theme/jquery-ui-1.8.custom.css" rel="Stylesheet" />	

<script type="text/javascript" src="/wahalu/jquery/js/jquery-1.4.2.min.js"></script>

<script type="text/javascript" src="/wahalu/jquery/js/jquery-ui-1.8.2.custom.min.js"></script>

	<meta name="title" content="Wahalu" />
	
	<meta name="description" content="Bring Social Media To You" />
	
	<meta name="keywords" content="bring social media to you, social media, wahalu, social media consultant, social media consulting, seo consulting, seo consultant" />
	
	<meta name="Copyright" content="Dummy Limited" />
	
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />	
	
	
</head>	
<body id="loading_container">
<div id='loading'><h1>Loading your data....</h1></div><img id ='loading_image' src='/wahalu/assets/images/loading/ajax-loader (4).gif'>
</body>	
</html>
<?php

}

else

	{echo "Sorry mate, nice try though!";}
	
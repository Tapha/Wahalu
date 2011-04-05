<?php session_start(); ?>

<?php 

//Get Data

$company_id = strip_tags($_GET['company_id']);

$admin_id = strip_tags($_GET['admin_id']);

if (isset($_SESSION['username']))

{

//Load Other Data

$company_name = $_SESSION['company_name'];
	
$first_name = $_SESSION['first_name'];
	
$last_name = $_SESSION['last_name'];
	
$username = $_SESSION['username'];	

?>


<!doctype html>

<html>

<head>

<title> Wahalu - State Your Goals </title>

<link rel="stylesheet" type="text/css" href="/wahalu/css/style.css"/>

<link rel="shortcut icon" href="/wahalu/assets/images/icon/favicon.ico">

<script type="text/javascript" src="/wahalu/jquery/jquery.js"></script>

<script type="text/javascript" src="/wahalu/jquery/jquery.NobleCount.js"></script>

<script type="text/javascript">

$(document).ready(function(){

//Dashboard

$('#goal_url').hide();


$('#attach_url').click(function(){

//Show Goal 

$('#goal_url').slideDown('slow');
});

$('#goal_description').NobleCount('#count1', {max_chars: 134});

});

</script>

	<meta name="title" content="Wahalu" />
	
	<meta name="description" content="Bring Social Media To You" />
	
	<meta name="keywords" content="bring social media to you, social media, wahalu, social media consultant, social media consulting, seo consulting, seo consultant" />
	
	<meta name="Copyright" content="Dummy Limited" />
	
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />	
	
	
</head>	
<body id="dashboard">
<div id='logout'><a href='/wahalu/logout.php/'>Logout</a></div>
<a href='/wahalu/dashboard/company_dashboard/'><img id='icon_no_1' src='/wahalu/assets/images/icon/w/wahalu_icon_w.png'></a>
<div id='dashboard_nav'>
<h4>
<div id="state_goals"><a href='/wahalu/dashboard/company_dashboard/start_dash.php'>State Goals</a></div>
<div id="view_insights"><a href='/wahalu/dashboard/company_dashboard/view_dash.php'>View Insights</a></div>
<div id="open_tab"><a href='/wahalu/dashboard/company_dashboard/open_dash.php'>Open Tab</a></div>
<div id="work_room"><a href='/wahalu/dashboard/company_dashboard/work_dash.php'>Work Room</a></div>
<div id="My_Account"><a href='/wahalu/dashboard/company_dashboard/my_dash.php'>My Account</a></div>
</h4>
</div>
<div id='company_name'><h1><?php echo $company_name; ?> </h1></div>
<a id ='printer' href='/wahalu/dashboard/company_dashboard/print.php'><!-->Add some url stuff here to make it printable--><img src='/wahalu/assets/images/dashboard-icons/Printer-64.png'></a>
<a id ='pdf' href='/wahalu/dashboard/company_dashboard/pdf.php'><!-->Add some url stuff here to make it pdf--><img src='/wahalu/assets/images/dashboard-icons/File-pdf-64.png'></a>
<div id='main_body_dashboard'></div><div id='inner_db'>
<div id='goal_header'><h1>What is your social media goal?</h1></div>
<form id='state_goal_form'>
<div id='goal_description_title'>Describe your goal in 134 chars</div>
<div id='count1'><h1>134</h1></div>
<input id='goal_description' type='text' name='goal_description'>
<input id='goal_url' type='text' name='goal_url'>
<div id='attach_url'><a href='#'>Attach Url: <img src='/wahalu/assets/images/dashboard-icons/Web_32.png'></a></div>
<input id='goal_submit' type='submit' value='State Goal'>
</form>
<div id='your_goals'></div>
</div>
<div id='most_active'>Most Active Goals</div>
<div id='newest'>Newest Goals</div>
</div>
</div>
</div>

</body>	
</html>

<?php } else {echo "Na na na na na na, your not logged in.";}?>
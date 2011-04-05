$(document).ready(function(){
//Code 

//Hide login icons

$('#login_icon_1').hide();
$('#login_icon_2').hide();
$('#login_icon_3').hide();
$('#login_icon_4').hide();
$('#login_icon_5').hide();

//Hide customers icons

$('#customers_image_1').hide();
$('#customers_image_2').hide();
$('#customers_image_3').hide();
$('#customers_image_4').hide();
$('#customers_image_5').hide();
$('#customers_image_6').hide();
$('#customers_image_7').hide();
//Countdown show customerss

var counter = 0;
var interval = setInterval(function() {
    counter++;
    // Display 'counter' wherever you want to display it.

	if (counter == 1) {
	
		
	//Display 2
	
	$('#customers_image_7').fadeOut(500);
	
	//Display 1
	$('#customers_image_1').fadeIn(1000);
	}
	
	if (counter == 4) {
	
	//Display 2
	
	$('#customers_image_1').fadeOut(500);
	
	//Fade in login icon 2
	
	$('#customers_image_2').fadeIn(1000);
	
	}
	
	if (counter == 8) {
	
	//Display 3
	
	//Display 2
	
	$('#customers_image_2').fadeOut(500);
	
	//Fade in login icon 2
	
	$('#customers_image_3').fadeIn(1000);
	
	}
	
	if (counter == 12) {
	
	//Display 4
	
	//Display 2
	
	$('#customers_image_3').fadeOut(500);
	
	//Fade in login icon 2
	
	$('#customers_image_4').fadeIn(1000);
	
	}
	
	if (counter == 16) {
	
	//Display 4
	
	//Display 2
	
	$('#customers_image_4').fadeOut(500);
	
	//Fade in login icon 2
	
	$('#customers_image_5').fadeIn(1000);
	
	}
	
	if (counter == 20) {
	
	//Display 4
	
	//Display 2
	
	$('#customers_image_5').fadeOut(500);
	
	//Fade in login icon 2
	
	$('#customers_image_6').fadeIn(1000);
	
	}
	
    if (counter == 24) {
	
	//Display 2
	
	$('#customers_image_6').fadeOut(500);
	
	//Fade in login icon 2
	
	$('#customers_image_7').fadeIn(1000);
		
    }
	
	if (counter == 27) {
	
			
       counter = 0;
	}
}, 1000);

//Click On Sign Up

var login_interval;
var counter2 = 0;
//Mouseover start countdown

$("#icon_no_1").mouseover(function()
{

$(this).fadeTo("slow", 0.23);

//Countdown

counter2 = 0;

login_interval = setInterval(function() {
    counter2++;
    // Display 'counter' wherever you want to display it.

	if (counter2 == 1) {
	
	//Display 1
	$('#login_icon_1').fadeIn();
	//Fade in
	
	}
	
	if (counter2 == 2) {
	
	//Display 2
	
	$('#login_icon_1').fadeOut(750);
	
	//Fade in login icon 2
	
	$('#login_icon_2').fadeIn();
	
	}
	
	if (counter2 == 3) {
	
	//Display 3
	
	//Display 2
	
	$('#login_icon_2').fadeOut(500);
	
	//Fade in login icon 2
	
	$('#login_icon_3').fadeIn();
	
	}
	
	if (counter2 == 4) {
	
	//Display 4
	
	//Display 2
	
	$('#login_icon_3').fadeOut(500);
	
	//Fade in login icon 2
	
	$('#login_icon_4').fadeIn();
	
	}
	
    if (counter2 == 5) {
	
	//Display 2
	
	$('#login_icon_4').fadeOut(500);
	
	//Fade in login icon 2
	
	$('#login_icon_5').fadeIn();
	
	//Display 2
	
	$('#login_icon_5').fadeOut(1000);
		
    }
	
	if (counter2 == 6) {
	
	window.location = "/wahalu/login.php";

	}
}, 1000);

}

);

$("#icon_no_1").mouseleave(function()
{

clearInterval(login_interval);

counter2 = 0;

$(this).fadeTo("slow", 1);

$('#login_icon_1').hide();
$('#login_icon_2').hide();
$('#login_icon_3').hide();
$('#login_icon_4').hide();
$('#login_icon_5').hide();

}

);

});
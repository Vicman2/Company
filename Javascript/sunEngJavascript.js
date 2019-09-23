$(function(){


	var $liIcon = $('#listIcon li');
	$liIcon.hide().each(function(index){
		$(this).delay(index * 700).slideDown(700);
	} );
	$('#machineHead').hide().slideDown(800);
	$('.mach').hide().slideDown(2000);

	$('#greetingMessage').hide().fadeIn(2000); // Greeting Message in the page
	$('#welcome').hide().slideDown(2500);
	$('#welcomeDiv').on('mouseover', function(){
		$(this).attr('id','welcomeDiv2');
	});
	$('#welcomeDiv').on('mouseout', function(){
		$(this).attr('id', 'welcomeDiv');
	} );

	var $liServ = $('#listOfServices li');
	$liServ.hide().each(function(index){
		$(this).delay(index * 700).slideDown(700);
	});

});

var today = new Date();
var hourNow = today.getHours();
var greetings;

if(hourNow > 15){
	greetings = "Good Evening";
}else if(hourNow > 11){
	greetings = "Good Afternoon";
}else if(hourNow >= 0){
	greetings = "Good Morning";
}else{
	greetings = "";
}

var el = document.getElementById("greetingMessage");
if(el){
el.innerHTML = greetings;
}

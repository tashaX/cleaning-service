//header display
document.addEventListener('DOMContentLoaded', function() {
	setTimeout(changeImage, 3000);
	
	function changeImage() {
		var header = document.getElementById('parallax');

		header.style.backgroundImage = "url(images/michael-frattaroli-221247.jpg)";
		setTimeout(showTitle, 1000);
		
	}
	
	function showTitle() {
		var paragraph = document.getElementById('title');
		var callButton = document.getElementById('call');
		paragraph.style.display = "block";
		callButton.style.display = "block";
	}
});


$(document).ready(
	//jquery toggle menu
	function() {
		$('.nav-toggle').click(function() {
			$('ul.nav-hide').slideToggle();
	});
	
	// Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, #buttonTop").on('click', function(event) {
    
    if (this.hash !== "") {
      event.preventDefault();
			
      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
			//don't display hash in url        
			//window.location.hash = hash;
      });
    } 
  });

});


/*button top*/
window.onscroll = function() {TopButton()};

function TopButton() {
 
		var topBtn = document.getElementById("buttonTop");
		var header = document.getElementById("parallax");	
		
		if (document.body.scrollTop > (header.clientHeight / 2) || document.documentElement.scrollTop > (header.clientHeight / 2)) {	
			topBtn.style.display = "block";				
    } 
		else { 	
			topBtn.style.display = "none";	   
    }
		
		/*jquery slide animation*/
		$(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
}

/*mote text*/
function showText(n) {
	$('#' + n).show();
	$('#b' + n).hide();
	
}

function hideText(n) {
	$('#' + n).hide();
	$('#b' + n).show().focus();;
}

/*modal*/
function openModal() {
  document.getElementById('modalMenu').style.display = "block";
}

function closeModal() {
  document.getElementById('modalMenu').style.display = "none";
}
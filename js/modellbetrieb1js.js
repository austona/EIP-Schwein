//##########################################
	// Modal for Bauplan_1
	//##########################################

window.onload = function () {		
var bauplan1Modal = document.getElementById('bauplan1Modal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var bauplan1 = document.getElementById('bauplan1');
var imgBauplan1 = document.getElementById("imgBauplan1");
var captionBauplan1 = document.getElementById("captionBauplan1");
bauplan1.onclick = function(){
    bauplan1Modal.style.display = "block";
    imgBauplan1.src = this.src;
    captionBauplan1.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  bauplan1Modal.style.display = "none";
}
}

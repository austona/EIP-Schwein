		//##########################################
	// Modal for Ablaufschema
	//##########################################
	
		// Get the modal
window.onload = function () {
var ablaufschemaModal = document.getElementById('ablaufschemaModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var ablaufschema = document.getElementById('ablaufschema');
var imgAblaufschema = document.getElementById("imgAblaufschema");
var captionAblaufschema = document.getElementById("captionAblaufschema");
ablaufschema.onclick = function(){
    imgAblaufschema.src = this.src;
	ablaufschemaModal.style.display = "block";
    captionAblaufschema.innerHTML = this.alt;
}

// // Get the <span> element that closes the modal
// var spanAblaufschema = document.getElementsByClassName("close")[0];

// // When the user clicks on <span> (x), close the modal
// spanAblaufschema.onclick = function() { 
  // ablaufschemaModal.style.display = "none";
// }


	//##########################################
	// Modal for karte
	//##########################################

// window.onload = function () {
var karteModal = document.getElementById('karteModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var karte = document.getElementById('karte');
var imgKarte = document.getElementById("imgKarte");
var captionKarte = document.getElementById("captionKarte");
karte.onclick = function(){
    karteModal.style.display = "block";
    imgKarte.src = this.src;
    captionKarte.innerHTML = this.alt;
}
// // 
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
	ablaufschemaModal.style.display = "none";
  karteModal.style.display = "none";
}
 }
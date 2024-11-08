window.onload = function(){
	prepareListener();
}
function prepareListener(){
	var orderdrop;
	var directiondrop;
	orderdrop = document.getElementById("pickOrder");
	directiondrop = document.getElementById("pickDirection");
	directiondrop.addEventListener("change", getDoctors);
}
function getDoctors(){
	this.form.submit();
}

window.onload = function(){
	prepareListener();
}
function prepareListener(){
	var droppy;
	droppy = document.getElementById("choosedoctor");
	droppy.addEventListener("change", getDoctor);
}
function getDoctor(){
	this.form.submit();
}

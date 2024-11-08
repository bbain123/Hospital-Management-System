window.onload = function(){
	prepareListener();
}
function prepareListener(){
	var droppy;
	droppy = document.getElementById("pickahospital");
	droppy.addEventListener("change", getHospitals);
}
function getHospitals(){
	this.form.submit();
}

window.onload = function(){
	prepareListener();
}
function prepareListener(){
	var droppy;
	droppy = document.getElementById("pickSpec");
	droppy.addEventListener("change",getSpeciality);
}
function getSpeciality(){
	this.form.submit();
}

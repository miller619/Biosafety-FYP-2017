
/*toggle sidebar*/
function toggleSidebar(event){
	event.preventDefault(event);
	var getID = document.getElementById("wrapper");
	getID.classList.toggle("active");
	console.log("clicked");	
}
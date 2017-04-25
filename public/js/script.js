
/*toggle sidebar*/
function toggleSidebar(event){
	event.preventDefault(event);
	var getID = document.getElementById("wrapper");
	getID.classList.toggle("active");
	console.log("clicked");	
}

//load exemp0t dealing home on selecting from sidebar
function loadEDhome(){
	
	$('#edHome').load('/edcontent');
}


function approveLogin(){
	console.log('click');

}


	



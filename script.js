function searchText(a) {
	if(a.value === ""){
		a.value="Search for parking - Where do you need to park?";
	}
}

function clearSearch(a) {
	if(a.value == "Search for parking - Where do you need to park?"){
		a.value="";
	}
}
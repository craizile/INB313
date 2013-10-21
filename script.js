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

$('#form-id').change(function() {
    if ($('#div1').prop('checked')) {
        $('#formdiv1').show();
    }
    else {
        $('#formdiv1').hide();
    }
    if ($('#div2').prop('checked')) {
        $('#formdiv2').show();
    }
    else {
        $('#formdiv2').hide();
    }
});
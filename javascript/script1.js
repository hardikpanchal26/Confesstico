
function login_v()
{
	var un = document.getElementById("uname").value;
	var pass = document.getElementById("password").value;

	if(un =="" || pass=="") {
	window.alert("Invalid Login Credentials!!!");
	return false;	
	}
}

function register_v() {
	
	var f_name = document.getElementById("first_name").value;
	var sur_name = document.getElementById("surname").value;
	var email = document.getElementById("email").value;
	var mob = document.getElementById("mobile").value;
	var pss = document.getElementById("rpassword").value;
	var cpss = document.getElementById("rconfirm_password").value;
	var loc = document.getElementById("location").value;

	if (f_name=="" || sur_name=="") {
		window.alert("Please Enter valid Name!!!");
	return false;
	}
	else if (email=="") {
		window.alert("Please Enter valid E-mail!!!");
	return false;
	}	
	else if (mob=="") {
		window.alert("Please Enter valid Mobile Number!!!");
	return false;
	}
	else if (pss=="") {
		window.alert("Please Enter valid Password!!!");
	return false;
	}	
	else if (loc=="") {
		window.alert("Please Enter valid Location!!!");
	return false;
	}	

	if(pss != cpss) {
		window.alert("Passwords do not match!!!");
	return false;
	}

}

function joingrp_v() {  

	var join = document.getElementById("gname").value;

	if(join==""){
		document.getElementById("gname_msg").innerHTML="Please enter valid details.";
		return false;
	}
}


function newgroup_v() {

	var gn = document.getElementById("grp").value;
	var cl = document.getElementById("cl").value;
	var il = document.getElementById("il").value;

   	if(gn =="") {
   		document.getElementById("grp_msg").innerHTML="Please enter valid group.";
   		return false;
   	}
  	if(cl=="" &&  il=="") {
  		window.alert("Please add contacts.");
  		return false;
  	}
}

function contact_v() {  

	var cont = document.getElementById("ct").value;

	if(cont==""){
		document.getElementById("ct_msg").innerHTML="Please enter valid details.";
		return false;
	}
}

function confession_v() {

	var groups = document.confessform.groups.value;
	var tags   = document.confessform.ctg.value;
	var msg    = document.confessform.text.value;
	if(groups=="") {
		window.alert("Groups cannot be empty!!!");
		return false;
	}

	if(tags=="") {
		window.alert("Categories cannot be empty!!!");
		return false;
	}

	if(msg=="") {
		window.alert("Cannot post empty Confession !!!");
		return false;
	}
}

function showUpdatePsswrd() {
	var i = document.getElementById("oldusrPsswrd");
    var j = document.getElementById("newusrPsswrd1");
    var k = document.getElementById("newusrPsswrd2");
    if (j.type === "password") {
        j.type = "text";
		j.width = "43%";
    } else {
        j.type = "password";
    }
    if (k.type === "password") {
        k.type = "text";
        k.width = "43%";
    } else {
        k.type = "password";
    }
     if (i.type === "password") {
        i.type = "text";
        i.width = "43%";
    } else {
        i.type = "password";
    }
   
}


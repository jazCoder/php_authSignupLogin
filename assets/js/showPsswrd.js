function showPsswrd() {
    var x = document.getElementById("usrPsswrd1");
    var y = document.getElementById("usrPsswrd2");
    var i = document.getElementById("logpsswrd");
    if (x.type === "password") {
        x.type = "text";
        x.width = "43%";
    } else {
        x.type = "password";
    }
    if (y.type === "password") {
        y.type = "text";
        y.width = "43%";
    } else {
        y.type = "password";
    }
    if (i.type === "password") {
        i.type = "text";
        i.width = "43%";
    } else {
        i.type = "password";
    }
    
}




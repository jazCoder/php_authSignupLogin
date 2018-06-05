function showAuthkey() {
    var x = document.getElementById("authkey");
    var y = document.getElementById("logpsswrd");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
    if (y.type === "password") {
        y.type = "text";
    } else {
        y.type = "password";
    }
}


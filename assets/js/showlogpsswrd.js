function showlogpsswrd() {
    var y = document.getElementById("logpsswrd");
   
    if (y.type === "password") {
        y.type = "text";
    } else {
        y.type = "password";
    }
}


function validateForm() {
    var a = document.forms["myForm"]["fname"].value;
    var b = document.forms["myForm"]["lname"].value;
    var c = document.forms["myForm"]["address"].value;
    var d = document.forms["myForm"]["email"].value;
    var e = document.forms["myForm"]["contact"].value;
    var f = document.forms["myForm"]["postal"].value;
    if (a == "" || b == "" || c == "" || d == "" || e == "" || f == "") {
        alert("Incomplete Details");
        return false;
    }
}

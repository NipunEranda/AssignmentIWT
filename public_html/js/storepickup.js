function validate()
{
    var Cname = document.getElementById('Cname').value;
    var Address1 = document.getElementById('Address1').value;
    var Address2 = document.getElementById('Address2').value;
    var city = document.getElementById('city').value;
    var state = document.getElementById('state').value;
    var postalCode = document.getElementById('postalCode').value;
    var email = document.getElementById('email').value;
    var itemCode = document.getElementById('itemCode').value;

    if (Cname == "" || Address1 == "" || Address2 == "" || city == "" || state == "" || postalCode == "" || email == "" || itemCode == "") {
        alert("Incomplete Details");
    }
};
function validateForm()
{
    var firstName = document.getElementById('firstName').value;
    var lastName = document.getElementById('lastName').value;
    var email = document.getElementById('email').value;
    var telNo = document.getElementById('telNo').value;
    var CompanyName = document.getElementById('CompanyName').value;
    var CompanyId = document.getElementById('CompanyId').value;
    var Address = document.getElementById('Address').value;
    var postalCode = document.getElementById('postalCode').value;
    var password = document.getElementById('password').value;
    var cPassword = document.getElementById('cPassword').value;

    if (firstName == "" || lastName == "" || email == "" || telNo == "" || CompanyName == "" || CompanyId == "" || Address == "" || postalCode == "" || password == "" || cPassword == "") {
        alert("Incomplete Details");
        return false;
    }
    else
    {
        alert("Successfully Registered");
        return true;
    }
}
;


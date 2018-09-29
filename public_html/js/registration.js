function validateForm()
{
    var firstName = document.getElementById('firstName').value;
    var lastName = document.getElementById('lastName').value;
    var email = document.getElementById('email').value;
    var telNo = document.getElementById('telNo').value;
    var Address = document.getElementById('Address').value;
    var postalCode = document.getElementById('postalCode').value;
    var password = document.getElementById('password').value;
    var Cpassword = document.getElementById('cPassword').value;

    if (firstName == "") {
        alert("First Name required.");
        return false;
    }else if(lastName == ""){
        alert("Last Name required.");
        return false;
    }else if(email ==""){
        alert("Email required.");
        return false;
    }else if(telNo == ""){
        alert("Mobile number required.");
        return false;
    }else if(Address == ""){
        alert("Address required.");
        return false;
    }else if(password == ""){
        alert("password required.");
        return false;
    }else if(Cpassword == ""){
        alert("confirm password required.");
        return false;
    }else{
        if(password == Cpassword){
            alert("Successfully Registered.");
        }else{
            alert("Passwords does not match.");
        }
    }
    
}
;


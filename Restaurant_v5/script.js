function dateFunction()
{
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1;
    var yyyy = today.getFullYear();

    if (dd < 10) {
    dd = '0' + dd;
    }

    if (mm < 10) {
    mm = '0' + mm;
    } 
        
    today = yyyy + '-' + mm + '-' + dd;
    document.getElementById("datefield").setAttribute("min", today);
}

function registerFun() {
    var name = document.forms.RegForm.Name.value;
    var email = document.forms.RegForm.EMail.value;
    var phone = document.forms.RegForm.Telephone.value;
    var password = document.forms.RegForm.Password.value;
    var address = document.forms.RegForm.Address.value;
    var regEmail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;
    var regPhone=/^\d{10}$/;
    var regName = /\d+$/g;
    
    if (name == "" || regName.test(name)) {
    window.alert("Please enter your name properly.");
    name.focus();
    return false;
    }
    if (address == "") {
    window.alert("Please enter your address.");
    address.focus();
    return false;
    }
    if (email == "" || !regEmail.test(email)) {
    window.alert("Please enter a valid e-mail address.");
    email.focus();
    return false;
    }
    if (password == "") {
    alert("Please enter your password");
    password.focus();
    return false;
    }
    if(password.length <6){
    alert("Password should be atleast 6 character long");
    password.focus();
    return false;
    }
    if (phone == "" || !regPhone.test(phone)) {
    alert("Please enter valid phone number.");
    phone.focus();
    return false;
    }return true;
}
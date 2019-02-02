function loginvalidation(email , password){
    var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var pass=  /^\w{8,150}$/;
    if(email.value.match(mail) && password.value.match(pass)){
        return true;
    }
    else{
        if(!email.value.match(mail))
            alert("The E-mail address should be like \"example@mail.com\".");
        if(!password.value.match(pass))
            alert("The password should be at lest 8 digits and at most 150 digits.");
        return false;
    }
}
function signupvalidation(fname , lname , mobile , email , psw , pswrepeat){
    var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var name = /^[A-Za-z ]+$/;
    var pass = /^\w{8,150}$/;
    var tel  = /^([0-9]{11})$/;
    var pass1 = psw.value;
    var pass2 = pswrepeat.value;
    if(fname.value.match(name) && lname.value.match(name) && psw.value.match(pass) && mobile.value.match(tel)&& email.value.match(mail) && pass1 == pass2){
        return true;
    }
    else{
        if(!fname.value.match(name))
            alert("The First name should be a real name writen in english.");
        if(!lname.value.match(name))
            alert("The last name should be a real name writen in english.");
        if(!mobile.value.match(tel))
            alert("The phone number should be 11 numbers only and no litter allowed.");
        if(!email.value.match(mail))
            alert("The E-mail address should be like \"example@mail.com\".");
        if(!psw.value.match(pass))
            alert("The password should be at lest 8 digits and at most 150 digits.");
        if(pass1 != pass2)
            alert("The passwords should be matched.");
       return false;
    }
}
function messagevalidation(Name , Email , Subject , Message){
    var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var name = /^[A-Za-z ]+$/;
    if(Name.value.match(name) && Subject.value.match(name) && Message.value.match(name) && Email.value.match(mail)){
        return true;
    }
    else{
        if(!Name.value.match(name))
            alert("The First name should be a real name writen in english.");
        if(!Email.value.match(mail))
            alert("The E-mail address should be like \"example@mail.com\".");
        if(!Subject.value.match(name))
            alert("The Subject should be a real Subject writen in english.");
        if(!Message.value.match(name))
            alert("The Message should be a real Message writen in english.");
       return false;
    }
}
function adminvalidation(admin,password){
    if(password.value == "123456" && admin.value == "alaa"){
        return true;
    }
    else{
        alert("Invalid Entry.");
        return false;
    }
}

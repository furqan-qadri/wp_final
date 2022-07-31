
function formValidation()
{
var uid = document.registration.userid;
var passid = document.registration.passid;
var uname = document.registration.username;
var uadd = document.registration.address;
var ucountry = document.registration.country;
var uzip = document.registration.zip;
var uemail = document.registration.email;
var umsex = document.registration.msex;
var ufsex = document.registration.fsex; 

if(userid_validation(uid,5,12))
{
if(passid_validation(passid,7,12))
{
if(allLetter(uname))
{
if(alphanumeric(uadd))
{ 
if(countryselect(ucountry))
{
if(allnumeric(uzip))
{
if(ValidateEmail(uemail))
{
if(validsex(umsex,ufsex))
{
}
} 
}
} 
}
}
}
}
return false;
}


//validation for id
function userid_validation(uid,mx,my){
    var uid_len= uid.value.length;  //defining length variable

    if (uid_len ==0 || uid_len >= my || uid_len <mx){
    alert("User ID should not be empty/Lendth be between "+mx+" to " + my);
    
    uid.focus();
    return false;
}
return true;
}


//validating password

function passid_validation(passid,mx,my){
    var passid_len=passid.value.length;
    if (passid_len ==0 || passid_len >= my || passid_len <mx){
        alert("User ID should not be empty/Lendth be between "+mx+" to " + my);
        
        passid.focus();
        return false;
    }
    return true;
}


//validating username (accept only letters)

function allLetter(uname){
    var letters = /^[A-Za-z]+$/;

    if (uname.value.match(letters)){
        return true;
    }
    else{
        alert("Username must have letters only");
        uname.focus();
        return false;
    }
}

//validating country (Country is selected from the given list)

function countryselect(ucountry){
    if (ucountry.value=="Default"){
        alert("Select your country from the list");
        ucountry.focus;
        return false;
    }
    else{return true};


}


//validating zip (should contain only numbers)

function allnumeric(uzip){
    var numbers=  /^[0-9]+$/;

    if (uzip.value.match(numbers)){
        return true;
    }
    else{
        alert("The ZIP code can also contain numbers")
        uzip.focus();
        return false;
    }
}


//validating email
function ValidateEmail(uemail){
    var mailformat=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (uemail.value.match(mailformat))
    {
        return true;
    }

    else{
        alert("The ZIP code can also contain numbers")
        uzip.focus();
        return false;
    }
}


//validating gender (whether an option is selected)

function validsex(umsex,ufsex){

    x=0;

    if (umsex.checked){
        x++;
    }
    if (ufsex.chekced){
        x++;
    }

    if (x==0)
    {
        alert ('Select Male or Female');
        umsex.focus;
        return false;
    }
    else{
        alert("Form successfully submitted");
        window.location.reload;
        return true;
    }
}







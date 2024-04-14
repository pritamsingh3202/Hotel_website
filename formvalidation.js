function seterror(id,error){

}
function validateForm(){
    var returnval=true;
    let fname=document.forms['myForm']['name'].value;
    if(fname.length<2){
        alert("invalid name(name length is too small)");
        returnval=false;
        return returnval; 
    }
    let fmobile=document.forms['myForm']['mobile'].value;
    if(fmobile.length!=10){
        alert("invalid mobile number");
        returnval=false;
        return returnval; 
    }
    if(isNaN(fmobile)){
        alert("invalid mobile number");
        returnval=false;
        return returnval; 
    }
    let fage=document.forms['myForm']['age'].value;
    if(fage.length!=2){
        alert("invalid age");
        returnval=false;
        return returnval;
    }
    if(isNaN(fage)){
        alert("invalid age");
        returnval=false;
        return returnval;
    }
    let froom=document.forms['myForm']['room'].value;
    if(isNaN(froom)){
        alert("invalid room number");
        returnval=false;
        return returnval;
    }
    if((froom<1)||(froom>150)){
        alert("room number between 1 to 150");
        returnval=false;
        return returnval;
    }
}
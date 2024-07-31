function validation()
{
    let p=document.getElementById("pMessage");
}
if(document.myForm.phone.value.length!=10)
{
    document.getElementById("pmessage").innerHTML="Phone must be 10 digit";
    return false;
}
else{
    p.style.display="none";
}
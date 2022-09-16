function fun3()
{
var s1="mounesh";
var s2="5191411055";
var s3,s4;
s3=document.f3.user.value;
s4=document.f3.password.value;
if(s4.length<6)
window.alert("password should contain at least 6 characters.");
if((s1==s3)&&(s2==s4))
window.alert("user name and password correct");
else if(!(s1==s3)&&(s2==s4))
window.alert("user name wrong");
else
if((s1==s3)&&!(s2==s4))
window.alert("password wrong");
else
if(!(s1==s3)&&!(s2==s4))
window.alert("both user name and password wrong"); 
}

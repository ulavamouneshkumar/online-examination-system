function fun1()
{
var s1="virat";
var s2="mounam2007";
var s3,s4;
s3=document.f2.user.value;
s4=document.f2.password.value;
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

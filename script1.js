function log(){
    var uname=document.forms["login"]["uname"].value;
    var pwd=document.forms["login"]["pwd"].value;

    if(uname==null || uname==""){
    document.getElementById("Error").innerHTML="Enter your email id";
    return false;

    }
    if(pwd==null || pwd==""){
    document.getElementById("Error").innerHTML="Enter your password";
    return false;

    }

    if(uname != '' && pwd != ''){
    alert("Log in Successfully")

    }
}
function reg(){
    var name=document.forms["register"]["name"].value;
    var email=document.forms["register"]["email"].value;
    var number=document.forms["register"]["number"].value;
    var pwd1=document.forms["register"]["pwd1"].value;
    var pwd2=document.forms["register"]["pwd2"].value;
    
    if(name==null || name==""){
    document.getElementById("Error").innerHTML="Enter your name";
    return false;

    }
    if(email==null || email==""){
    document.getElementById("Error").innerHTML="Enter your Email id ";
    return false;
    }
    if(number==null || number==""){
        document.getElementById("Error").innerHTML="Enter your phone number";
        return false;
    
    }
    if(pwd1==null || pwd1==""){
        document.getElementById("Error").innerHTML="Enter the password";
        return false;
    }
    if(pwd2==null || pwd2==""){
        document.getElementById("Error").innerHTML="Enter the password";
        return false;
    }
    if (pwd1!=pwd2){
        document.getElementById("Error").innerHTML="Password dont match"
        return false
    }
    if(name != '' && email!='' && number!='' &&pwd1 != ''&& pwd2!=''){
    alert("Register Successfully")

    }
}
function validate()
{
  pt1= /^[789][0-9]{9}$/;
  pt2= /^[1-9][0-9]{6}$/;
  pt3= /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9]+).([a-z]{2,10})(.[a-z]{2,10})?$/
  pt4= /^[a-z0-9A-Z*#]{5,15}$/;
  un=/^Qui[0-9]{3}[a-z]{2}$/;
  var username=document.getElementById("uname").value;
  var mstatus;
  var syms="";
  var firstname=document.getElementById("fname").value;
  var middlename=document.getElementById("mname").value;
  var lastname=document.getElementById("lname").value;
  var dob=document.getElementById("dob");
  var phone=document.getElementById("phone").value;
  var add=document.getElementById("address").value;
  var adhar=document.getElementById("adharno").value;
  var email=document.getElementById("email").value;
  var sym1=document.getElementById("hpa1");
  var sym2=document.getElementById("hpa2");
  var sym3=document.getElementById("hpa3");
  var m=document.getElementById("married");
  var u=document.getElementById("unmarried");
  var gender=document.getElementById("gender");
  var selgend=gender.options[gender.selectedIndex].value;
  var valueDate = document.getElementById('dob').value;
  if(un.test(username)==false)
  {
    document.getElementById("fn14").innerHTML="Please enter a valid username.";
	document.getElementById("fn15").innerHTML="";
    return false;
  }
  else if(firstname == "")
  {
    document.getElementById("fn1").innerHTML="Please enter you first name.";
    return false;
  }
  else if(middlename == "")
  {
    document.getElementById("fn2").innerHTML="Please enter you middle name.";
    return false;
  }
  else if(lastname == "")
  {
    document.getElementById("fn3").innerHTML="Please enter you last name.";
    return false;
  }
  else if(valueDate== null || valueDate== '')
  {
    document.getElementById("fn4").innerHTML="Please select your birth date.";
    return false;
  }
  else if(pt1.test(phone)==false)
  {
    document.getElementById("fn5").innerHTML="Please enter a valid phone number.";
    return false;
  }
  else if(sym1.checked==false && sym2.checked==false && sym3.checked==false)//checkbox
  {
    document.getElementById("fn6").innerHTML="Please select atleast one of the value.";
    return false;
  }
  else if(selgend=="")//dropdown
  {
    document.getElementById("fn7").innerHTML="Please select your gender";
    return false;
  }
  else if(add=="")
  {
    document.getElementById("fn8").innerHTML="Please enter your address here.";
    return false;
  }
  else if(pt2.test(adhar)==false)
  {
    document.getElementById("fn9").innerHTML="Please enter correct adhar card number.";
    return false;
  }
  else if(m.checked==false && u.checked==false)//radio button
  {
    document.getElementById("fn10").innerHTML="This field is mandatory.";
    return false;
  }
  else if(pt3.test(email)==false)
  {
    document.getElementById("fn11").innerHTML="Please enter correct email id";
    return false;
  }
  else if(pt4.test(document.getElementById("pass").value)==false)
  {
    document.getElementById("fn12").innerHTML="Please enter correct password";
    return false;
  }
  else if(document.getElementById("repass").value!=document.getElementById("pass").value)
  {
    document.getElementById("fn13").innerHTML=" Please re-confirm the password by entering the same password.";
    return false;
  }
  else
  {
    if(m.checked==true)
    {
      mstatus=m.value;
    }
    else
    {
      mstatus=u.value;
    }
    if(sym1.checked==true)
    {
      syms=syms+"Cold ";
    }
    if(sym2.checked==true)
    {
      syms=syms+"Fever "
    }
    if(sym3.checked==true)
    {
      syms=syms+"Nothing more to specify";
    }
    alert("DETAILS YOU ENTERED ARE AS FOLLOWS:-"+"\n"+"FULL NAME: "+firstname+" "+middlename+" "+lastname+"\n"+"DATE OF BIRTH: "+dob.value+"\n"+"PHONE: "+phone+"\n"+"SYMPTOMS: "+syms+"\n"+"GENDER: "+selgend+"\n"+"ADDRESS: "+add+"\n"+"ADHAR CARD NUMBER: "+adhar+"\n"+"MARITAL STATUS: "+mstatus+"\n"+"EMAIL ID: "+email+"\n\n"+"YOU HAVE SUCCESSFULLY SIGNED UP.");
    return true;
  }

}

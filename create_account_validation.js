function validateForm()
 {
  var email = document.form_1.email.value;
  var username = document.form_1.username.value;
   var pwd = document.form_1.password.value;
   var pwd2 = document.form_1.password2.value;

  if (username == "") {
    alert("Username must be filled out!");
    return false;
  }

  else if (email == "") {
    alert("email must be filled out!");
    return false;
  }

  else if (pwd == "" || pwd2=="")
  {
  	alert("Password must be filled out!");
  	return false;
  }

  else if(pwd!=pwd2)
  {
  	alert("Password must be same!")
    return false;
  }

}











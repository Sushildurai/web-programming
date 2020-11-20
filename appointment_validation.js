function validateForm()
 {
  var name = document.form.name.value;
  var email = document.form.email.value;
   var mob = document.form.phone.value;
   var dept = document.form.dept.value;
   var city = document.form.City.values;

   if (name == "") {
    alert("name must be filled out!");
    return false;
  }

  else if (email == "") {
    alert("email must be filled out!");
    return false;
  }

  else if (mob == "")
  {
  	alert("Phone number must be filled out!");
  	return false;
  }

  else if(dept="")
  {
  	alert("Department must be selected!")
    return false;
  }

  else if(city="")
  {
  	alert("City must be filled out!")
    return false;
  }
}
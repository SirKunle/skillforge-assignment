function validate() {
    let name = document.getElementById("name");
    let email = document.getElementById("email");
    let password = document.getElementById("password");
    let phonenumber = document.getElementById('phonenumber');
    let gender = document.getElementById('gender');
    let language = document.getElementById('language');
    let zipcode = document.getElementById('zipcode');
    let about = document.getElementById('about');
    
    if (name == "") {
      alert("Name must be filled out");
      return false;
    }  
    if (email == "") {
      alert("Email must be filled out");
      return false;
    }
    if (password == "") {
      alert("Password must be filled out");
      return false;
    }
    if (password == "") {
        alert("password must be filled out");
        return false;
     }
    if (phonenumber == "") {
    alert("Phone Number must be filled out");
    return false;
    }
    if (gender == "") {
        alert("Gender must be filled out");
        return false;
    }
    if (language == "") {
        alert("Language must be filled out");
        return false;
    }
    if (zipcode == "") {
        alert("Zipcode must be filled out");
        return false;
    }
    if (about == "") {
        alert("about must be filled out");
        return false;
    }
    
    // Add any additional validation checks here
    
    return true;
  }
  
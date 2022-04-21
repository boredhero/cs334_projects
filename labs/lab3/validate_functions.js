function validateFirstName(field)
{
  //Validates for names like Mary Jane and Mary-Jane as well!
  if (/^[a-zA-Z -]+$/.test(field) == false) {
    return "Invalid First Name was entered. Letters and spaces and - only please.\n"
  }
  else {
    return ""
  }
}

function validateMiddleInitial(field){
  //Optional field, but if you *do* put something here, it has to be one letter.
  if (field == "" || /[a-zA-Z ]/.test(field) == true){
    return ""
  }
  else {
    return "Middle Initial must be blank or one letter.\n"
  }
}

function validateLastName(field)
{
  //Valides for names with dashes as well! 
  if (/^[a-zA-Z -]+$/.test(field) == false) {
    return "Invalid Last Name was entered. Letters and spaces and - only please.\n"
  }
  else {
    return ""
  }
  //return (field == "") ? "No Last Name was entered.\n" : ""
}

function validateUsername(field)
{
  if (field == "") return "No Username was entered.\n"
  else if (field.length < 5)
    return "Usernames must be at least 5 characters.\n"
  else if (/[^a-zA-Z0-9_-]/.test(field))
    return "Only a-z, A-Z, 0-9, - and _ allowed in Usernames.\n"
  return ""
}

function validatePassword(field)
{
  if (field == "") return "No Password was entered.\n"
  else if (field.length < 6)
    return "Passwords must be at least 6 characters.\n"
  else if (!/[a-z]/.test(field) || ! /[A-Z]/.test(field) ||
           !/[0-9]/.test(field))
    return "Passwords require one each of a-z, A-Z and 0-9.\n"
  return ""
}

function validateAge(field)
{
  if (field == "" || isNaN(field)) return "No Age was entered.\n"
  else if (field < 18 || field > 110)
    return "Age must be between 18 and 110.\n"
  return ""
}

function validateEmail(field)
{
  if (field == "") return "No Email was entered.\n"
    else if (!((field.indexOf(".") > 0) &&
               (field.indexOf("@") > 0)) ||
              /[^a-zA-Z0-9.@_-]/.test(field))
      return "The Email address is invalid.\n"
  return ""
}

function validatePhoneNumber(field) {
  //This was a hellscape why did i pick phone number it was a horrible idea lol
  //Regex case for just about as many phone number formats as i can think of..., intl area codes, area codes wrapped in (), dashes, spaces, no spaces...
  if (/^(\+\d{1,2}\s?)?1?\-?\.?\s?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/.test(field) == false){
    return "The formatting of your Phone Number is invalid.\n"
  }
  else {
    return ""
  }
}

function validateBirthYear(field) {
  //That should be better
  //Takes 4 digit numbers
  if (/^[1-9]\d{3}$/.test(field) == false){
    return "The formatting of your Birth Year is invalid.\n"
  }
  else {
    return ""
  }
}

function validateZIP(field) {
  //Zip code should also be very reasonable this should work with both 5 digit and 5+4 digit zip codes (ZIP+4 format)
  if (/^\d{5}(?:[- ]?\d{4})?$/.test(field) == false){
    return "The format of your ZIP code or ZIP+4 code is invalid.\n"
  }
  else {
    return ""
  }
}

function closeMailWindow() {
  document.getElementById('email-display').style.display = 'none';
}

function openEmail() {
  document.getElementById('email-display').style.display = 'flex';

}

function validateEmailName() {
  let validname = /[^a-z]/gmi;
  let farsiname =/[^ آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ]+/gmi;
  var name;
  name = document.getElementById('email-input-name').value;
  name = name.replaceAll(' ', '');
  //true if client uses both farsi and english
  let mixedlanguage=name.match(validname)&&name.match(farsiname);
  if(!mixedlanguage){
    if (name.match(farsiname)) {
      if (name.match(validname)) {
        document.getElementById('email-input-name').style.backgroundColor = 'rgba(255, 0, 0, 0.2)';
        return false;
      } else {
        document.getElementById('email-input-name').style.backgroundColor = 'rgba(0, 255, 0, 0.2)';
        return true;
      }
    }else{
      if (name.match(farsiname)) {
        document.getElementById('email-input-name').style.backgroundColor = 'rgba(255, 0, 0, 0.2)';
        return false;
      } else {
        document.getElementById('email-input-name').style.backgroundColor = 'rgba(0, 255, 0, 0.2)';
        return true;
        
      }
    }
    
  }else{
    document.getElementById('email-input-name').style.backgroundColor = 'rgba(255, 0, 0, 0.2)';
    return false;

  }
}
//validates clients email and returns true if valid
function validateEmail(){
  let validemail=/^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*$/;
  let clientemail= document.getElementById('client-email').value;
  var validationResult= emailIsValid(clientemail,validemail);
  if(validationResult){
    return true;
  }else{
    return false;
  }
 
}
//validates clients email
function emailIsValid(clientemail,emailregex){
  if(clientemail.match(emailregex)){
    document.getElementById('client-email').style.backgroundColor = 'rgba(0, 255, 0, 0.2)';
    return true;
    
  }else{
    document.getElementById('client-email').style.backgroundColor = 'rgba(200, 200, 0, 0.2)';
    false
  }
}
function validateForm(){
  
  if(validateEmail()&&validateEmailName()){
    return true;
  }else{
    return false;
  }
  
}










  function checkPassAuth()
{
    var pass = document.getElementById('inputPassword');
    var message = document.getElementById('passAuthResult');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    if(pass.value.length >= 6){
        pass.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = ""
    }else{
        pass.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Пароль має містити не менше 6 символів!"
    } 
  }

  function email_validate_auth(inputEmail)
{
    var authMail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var authMailStyle = document.getElementById('inputEmail');
    var mailMessage = document.getElementById('mailAuthResult');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    if(authMail.test(inputEmail) == false)
    {
    authMailStyle.style.backgroundColor = badColor;
    mailMessage.style.color = badColor;    
    mailMessage.innerHTML = "Email адреса введена неправильно!";
    }
    else
    {
   authMailStyle.style.backgroundColor = goodColor;
    mailMessage.style.color = goodColor;    
    mailMessage.innerHTML = "";
    }
}

     function checkPass()
{
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    var message = document.getElementById('confirmMessage');
    var messagePass = document.getElementById('confirmMessagePass');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    if(pass1.value.length >= 6){
        pass1.style.backgroundColor = goodColor;
        messagePass.style.color = goodColor;
        messagePass.innerHTML = ""
    }else{
        pass1.style.backgroundColor = badColor;
        messagePass.style.color = badColor;
        messagePass.innerHTML = "Пароль має містити не менше 6 символів!"
    }   

    if(pass1.value == pass2.value){
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Паролі збігаються"
    }else{
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Паролі не збігаються!"
    }
} 
 function validatephone(phoneValid)
{
    var curphonevar = /^\+380\d{3}\d{2}\d{2}\d{2}$/;

    var authPhone = document.getElementById('phoneValid');
    var messageP = document.getElementById('statusPhone');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    if(curphonevar.test(phoneValid) == false)
    {
    authPhone.style.backgroundColor = badColor;
    messageP.style.color = badColor;    
    messageP.innerHTML = "Телефон введено невірно!";
    }
    else
    {
    authPhone.style.backgroundColor = goodColor;
    messageP.style.color = goodColor;    
    messageP.innerHTML = "";
    }
}


function Validate(txt) {
    txt.value = txt.value.replace(/(?=.*[0-9])[0-9]{0,}/g, '');
}


 function email_validate(emailValid)
{
    var regMail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    var regMailStyle = document.getElementById('emailValid');
    var messageM = document.getElementById('status');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    if(regMail.test(emailValid) == false)
    {
    regMailStyle.style.backgroundColor = badColor;
    messageM.style.color = badColor;    
    messageM.innerHTML = "Email адреса введена неправильно!";
    }
    else
    {
    regMailStyle.style.backgroundColor = goodColor;
    messageM.style.color = goodColor;    
    messageM.innerHTML = "";
    }
}


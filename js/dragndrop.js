
/*
Bootstrap modals have a defualt behavior for the enter button. Since 
a login was put inside a modal the enter key needs to be made to 
trigger the login button. 
*/
var enterOnPwFieldSubmits = document.getElementById("pwd1");
enterOnPwFieldSubmits.addEventListener("keyup", function(evt) {
  if (evt.keyCode === 13) {
   evt.preventDefault();
   document.getElementById("btnLogin").click();
  }
});

// End tying the enter key to the login button


function validateAll(){

    if (myFunction){
        document.forms.submit();
    }
}

function myFunction() {
        
        var usernameValue = document.getElementById("username").value;
        var emailValue = document.getElementById("email").value;
        var passwordValue = document.getElementById("password").value;
        var repeatPasswordValue = document.getElementById("passwordRepeat").value

            if(usernameValue == ""){
                setErrorFor(username), 'Username cannot be blank';
            return false;
            } else {
                setSuccessFor(username);

            }

            if(emailValue == ""){
                setErrorFor(email), 'Email cannot be blank';
            return false;
            } else {
                setSuccessFor(email);

            }

            if(passwordValue == ""){
                setErrorFor(password), 'Password cannot be blank';
            return false;
            } else {
                setSuccessFor(password);

            }

            if(repeatPasswordValue == ""){
                setErrorFor(passwordRepeat), 'Repeat Password cannot be blank';
            return false;
            } else {
                setSuccessFor(passwordRepeat);

            }

        return true;
}

function setErrorFor(input, message){
        var formControl = input.parentElement;
        var small = formControl.querySelector('small');
        formControl.className = 'form-control error';
        small.innerText = message;
}
function setSuccessFor(input){
        var formControl = input.parentElement;
        formControl.className= 'form-control success';
}
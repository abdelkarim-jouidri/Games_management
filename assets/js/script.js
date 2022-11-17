
function validateInput (){
    const formEmail = document.getElementById('email');



    if(formEmail.value=="") {
        document.querySelector('#email').classList.add('border-danger')
        // formEmail.value = "error";
        document.querySelector('.form-group').insertAdjacentHTML('beforeend','<p class"text-danger">field cannot be blank !</p>')
    }
}


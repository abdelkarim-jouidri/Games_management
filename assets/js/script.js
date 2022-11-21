const elementError = document.createElement('div')
// elementError.classList.add('border-danger')
document.querySelector('#password-group').insertAdjacentElement('beforeend',elementError);

function validateInput (){
    const formEmail = document.getElementById('email');
    const formPassword = document.getElementById('password');
    let valid = true;
    elementError.textContent = '';
    
    if(formEmail.value=="") {
        document.querySelector('#email').classList.add('border-danger')
        // formEmail.value = "error";
        
        document.querySelector('#email-group').insertAdjacentElement('beforeend',elementError);

        elementError.textContent = 'Field cannot be blank';

        valid = false;
    }
    if(formPassword.value=="") {
        formPassword.classList.add('border-danger')
        elementError.textContent = 'Field cannot be blank';

        valid = false;
    }

    return valid
}


function fillModal(id){
    document.getElementById('category-btn').click();
    document.getElementById('category-name').value = document.getElementById(`category-title-${id}`)
}

console.log('click')


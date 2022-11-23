

function validateInput(form){
    document.getElementById('username-error').innerHTML=""
    document.getElementById('email-error').innerHTML=""
    document.getElementById('password-error').innerHTML=""


    let usernameErrorMsg = emailErrorMsg = passwordErrorMsg =""
    usernameErrorMsg += validateUsername(form.username.value)
    emailErrorMsg += validateEmail(form.email.value)
    passwordErrorMsg += validatePassword(form.password.value)

    if(usernameErrorMsg!=""){
        const liElement = `<li class="text-danger">${usernameErrorMsg}</li>`
        console.log(liElement)
        document.getElementById('username-error').insertAdjacentHTML('beforeend',liElement)
    }
    if(emailErrorMsg!=""){
        const liElement = `<li class="text-danger">${emailErrorMsg}</li>`
        console.log(liElement)
        document.getElementById('email-error').insertAdjacentHTML('beforeend',liElement)
    }
    if(passwordErrorMsg!=""){
        const liElement = `<li class="text-danger">${passwordErrorMsg}</li>`
        console.log(liElement)
        document.getElementById('password-error').insertAdjacentHTML('beforeend',liElement)
    }
    
    if(usernameErrorMsg=="" && emailErrorMsg=="" && passwordErrorMsg=="") return true
    else return false;
}

function fillCategoryModal(id){
    document.getElementById('categoryModalLabel').innerText = 'Edit category'
    document.getElementById('category-save-btn').style.display = 'none'
    document.getElementById('category-delete-btn').style.display = 'inline'
    document.getElementById('category-update-btn').style.display = 'inline'
    document.getElementById('category-id').value = id;
    document.getElementById('category-description').value = document.getElementById(`category-description-${id}`).textContent
    document.getElementById('category-name').value = document.getElementById(`category-name-${id}`).textContent

}


function handleCategoryModal(){
    document.getElementById('categoryModalForm').reset()
    document.getElementById('category-save-btn').style.display = 'inline-block'
    document.getElementById('category-update-btn').style.display = 'none'
    document.getElementById('category-delete-btn').style.display = 'none'


}


function fillProductModal(id){
    // document.getElementById('productModalLabel').innerText = 'Edit product'
    document.getElementById('product-save-btn').style.display = 'none'
    document.getElementById('product-delete-btn').style.display = 'inline'
    document.getElementById('product-update-btn').style.display = 'inline'
    document.getElementById('product-id').value = id;
    document.getElementById('product-description').value = document.getElementById(`product-description-${id}`).textContent
    document.getElementById('product-name').value = document.getElementById(`product-name-${id}`).textContent
    document.getElementById('product-quantity').value = document.getElementById(`product-quantity-${id}`).textContent
    document.getElementById('product-category').value = document.getElementById(`product-category-${id}`).dataset.category

}

function handleProductModal(){
    document.getElementById('productsModalForm').reset()
    document.getElementById('product-save-btn').style.display = 'inline-block'
    document.getElementById('product-update-btn').style.display = 'none'
    document.getElementById('product-delete-btn').style.display = 'none'
}

function validateUsername(input){
    if(input=="") return "username input cannot be left blank"
    if(input.length<3) return "user name should be at least 3 characters long";
    if(/[^a-zA-Z0-9_-]/.test(input)) return "only a-z , A-Z , 0-9 , - and _ are allowed"
    else return "";
}

function validateEmail(input){
    if(input=="") return "email input cannot be left blank"
    if(!/[^@\s]+@[^@\s]+\.[^@\s]+/.test(input)) return "incorrect email format"
    return "";
}

function validatePassword(input){
    if(input=="") return "password input cannot be left blank";
    if(input.length<8) return "password must be at least 8 characters long";
   
    else {
        if(/^[^A-Z]+$/.test(input) || /^[^0-9]+$/.test(input)) 
             return "password must contain at least an upper case letter and a numeric character";
        }
    return "";
}

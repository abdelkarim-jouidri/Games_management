// const elementError = document.createElement('div')
// // elementError.classList.add('border-danger')
// document.querySelector('#password-group').insertAdjacentElement('beforeend',elementError);

// function validateInput (){
//     const formEmail = document.getElementById('email');
//     const formPassword = document.getElementById('password');
//     let valid = true;
//     elementError.textContent = '';
    
//     if(formEmail.value=="") {
//         document.querySelector('#email').classList.add('border-danger')
//         // formEmail.value = "error";
        
//         document.querySelector('#email-group').insertAdjacentElement('beforeend',elementError);

//         elementError.textContent = 'Field cannot be blank';

//         valid = false;
//     }
//     if(formPassword.value=="") {
//         formPassword.classList.add('border-danger')
//         elementError.textContent = 'Field cannot be blank';

//         valid = false;
//     }

//     return valid
// }


function fillModal(id){
    // alert('dkhal')
    // document.getElementById('category-btn').click();
    // document.getElementById('category-name').value = document.getElementById(`category-title-${id}`)
    console.log(document.getElementById(`category-description-${id}`).dataset.description)
    document.getElementById('category-description').value = document.getElementById(`category-description-${id}`).dataset.description
    // document.getElementById('category-photo').filename = 'ok'
    console.log(document.getElementById('category-photo').files)

    
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
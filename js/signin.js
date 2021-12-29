const form = document.querySelector('#form'),
    error = document.querySelector('#error'),
    btnLogin = document.querySelector('#register')

btnLogin.onclick = () =>{
    let xhr = new XMLHttpRequest()
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response
                alert(data)
                if(data === "success"){
                    error.innerHTML = "success"
                }else{
                    error.innerHTML = `<div class="alert alert-danger">${data}</div>`
                }
            }
        }
    }
    xhr.open("POST", "./config/login.config.php", true)
    let formData = new FormData(form)
    xhr.send(formData)
}

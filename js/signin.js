const form = document.querySelector('#form'),
    error = document.querySelector('#error'),
    btnLogin = document.querySelector('#register')

btnLogin.onclick = () =>{
    let xhr = new XMLHttpRequest()
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response
                // alert(data)
                if(data === "success"){
                    error.innerHTML = `<p class="alert alert-success">
                        Login...
                    </p>`
                    location.href = "./users.php"
                }else{
                    error.innerHTML = `<p class="alert alert-danger">${data}</p>`
                }
            }
        }
    }
    xhr.open("POST", "./config/login.config.php", true)
    let formData = new FormData(form)
    xhr.send(formData)
}

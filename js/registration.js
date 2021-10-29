const form = document.querySelector('form.form-data'),
    submitBtn = form.querySelector(".btn-php");

form.onsubmit = (e) => {
    e.preventDefault()
}

submitBtn.onclick = () => {
    // Ajax
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "config/registration.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log(data);
            }
        }
    }
}
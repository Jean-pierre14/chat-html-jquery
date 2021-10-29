const form = document.querySelector('form.form-data'),
    submitBtn = form.querySelector(".btn-php");

form.onsubmit = (e) => {
    e.preventDefault();
}


// submitBtn.addEventListener('click', function () { // To check if the eventListener it works correctely
//     alert("Cool")
// })

submitBtn.onclick = () => {
    alert("Cool to")
    // Ajax
    let xhr = new XMLHttpRequest();
    // xhr.open("POST", "config/registration.php", true);
    xhr.open("POST", "test.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log(data);
            }
        }
    }
    xhr.send();
}
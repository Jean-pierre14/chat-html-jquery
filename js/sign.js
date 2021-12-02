// console.log("Cool")
// This is for a test if the javascript code are working


const form = document.querySelector("form"),
continueBtn = document.querySelector(".btn-submit button");

form.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{
    // console.log("Hello"); // The test
    // let's start Ajax
    let xhr = new XMLHttpRequest(); // Creating XML object
    xhr.open("POST", "backend/signup.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data);
            }
        }
    }
    // time to send data to the backend part
    const FormDatas = new FormData(form)
    xhr.send(FormDatas);
}
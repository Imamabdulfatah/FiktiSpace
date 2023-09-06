const scriptURL =
    "https://script.google.com/macros/s/AKfycbyJd78rBIO0fm8GUSQlYiaJSqUEev28mUm6vRsdGiyiimIjNKp8LWasfyxlKoOTyahM/exec";

const form = document.forms["contact-fikti-space"];
const btnKirim = document.querySelector(".btn-kirim");
const btnLoading = document.querySelector(".btn-loading");
const myAlert = document.querySelector(".alert-saya");

form.addEventListener("submit", (e) => {
    e.preventDefault();
    btnLoading.classList.toggle("d-none");
    btnKirim.classList.toggle("d-none");
    fetch(scriptURL, { method: "POST", body: new FormData(form) })
        .then((response) => {
            btnLoading.classList.toggle("d-none");
            btnKirim.classList.toggle("d-none");
            myAlert.classList.toggle("d-none");
            form.reset();
            console.log("Success!", response);
        })
        .catch((error) => console.error("Error!", error.message));
});

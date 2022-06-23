const btn = document.querySelector('button')
const inputs = document.querySelector('form')
btn.addEventListener('click', () => {

    const name = (inputs.elements["name"].value).trim()
    const email = (inputs.elements["email"].value).trim()
    const msg = (inputs.elements["message"].value.trim())
    const phone = (inputs.elements["phone"].value).trim()
    if (!name.length > 0 || !email.length > 0 || !msg.length > 0 || !phone.length > 0) {
        alert("All fields are mandatory")
        return
    }
    Email.send({
        Host: "smtp.mailtrap.io",
        Username: "e46b669b74b7ff",
        Password: "9acc3101b97e96",
        To: "shashanksrinivas97@gmail.com",
        From: inputs.elements["email"].value,
        Subject: "Contact Us Query By the Customer",
        Body: msg + "<br>" + name + "<br>" + phone
    }).then(msg => alert("Thank's for the feedback.... Will respond to you shortly"))
})
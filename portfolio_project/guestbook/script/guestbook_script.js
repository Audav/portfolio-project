document.getElementById("guestform").onsubmit = validate;

function validate() {
    let isValid = true;
    let isChecked = false;
    let check = document.getElementById("check").checked;

    //clear all error msgs
    let errors = document.getElementsByClassName("err")
    for (let i = 0; i < errors.length; i++) {
        errors[i].style.display = "none";
    }

    //Check first name
    let first = document.getElementById("fname").value;
    if (first === "") {
        let errFirst = document.getElementById("err-fname");
        errFirst.style.display = "inline";
        isValid = false;
    }

    //Check last name
    let last = document.getElementById("lname").value;
    if (last === "") {
        let errLast = document.getElementById("err-lname");
        errLast.style.display = "inline";
        isValid = false
    }


    //check linkedin
    let linkedin = document.getElementById("linkedin").value;
    if (linkedin !== "") { //if this optional field isn't empty
        if (!linkedin.includes("https") || !linkedin.includes(".com")) {
            let errLinkedin = document.getElementById("err-linkedin");
            errLinkedin.style.display = "inline";
            isValid = false;
        }
    }

    //check email
    let email = document.getElementById("email").value;
    if (email !== "") { //if this optional field isn't empty
        if (!email.includes("@") || !email.includes(".")) {
            let errEmail = document.getElementById("err-email");
            errEmail.style.display = "inline";
            isValid = false;
        }
    }
    if (check === true) { //or if the mailing list box is checked
        if (!email.includes("@") && !email.includes(".")) {
            let errEmail = document.getElementById("err-email");
            errEmail.style.display = "inline";
            isValid = false;
        }
    }

    //check how we met
    let choosehow = document.getElementById("choosehow").value;
    if (choosehow === "none") {
        let errChoosehow = document.getElementById("err-choosehow");
        errChoosehow.style.display = "inline";
        isValid = false;
    }
    let ifother = document.getElementById("ifother").value;
    if (choosehow === "other") { //if "Other" is selected
        if (ifother === "") { //and the 'Other' field is empty
            let errIfother = document.getElementById("err-ifother");
            errIfother.style.display = "inline";
            isValid = false;
        }
    }

    //check checkbox
    if (check === true) {
        isChecked = true;
    }

    //check format
    let format = document.getElementsByName("format");
    let formatSelect = false;
    for (let i=0; i<format.length; i++) {
        if (format[i].checked) {
            formatSelect = true;
            break;
        }
    }
    if (check === true) { //if the mailing list box is checked
        if (!formatSelect) { //and if none of the formats are selected
            let errFormat = document.getElementById("err-format");
            errFormat.style.display = "inline";
            isValid = false;
        }
    }

    return isValid;
}
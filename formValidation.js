function formValidation() {
    let firstName = document.getElementById("firstName").value.trim();
    let lastName = document.getElementById("lastName").value.trim();
    let number = document.getElementById("number").value.trim();

    let numRegex = /\d/;

    let form = document.getElementById('addEntry');

    if (firstName === "") {
        alert("First name must not be empty.");
        document.getElementById('firstName').focus();
        return false;
    }

    if (numRegex.test(firstName) === true) {
        alert("First name must not contain numbers.");
        document.getElementById('firstName').focus();
        return false;
    }

    if (lastName === "") {
        alert("Last name must not be empty");
        document.getElementById('lastName').focus();
        return false;
    }

    if (numRegex.test(lastName) === true) {
        alert("Last name must not contain numbers.");
        document.getElementById('lastName').focus();
        return false;
    }

    if (number.length !== 10) {
        alert("Please enter a valid 10-digit number.");
        document.getElementById('number').focus();
        return false;
    }

    form.setAttribute("action", "./php/insert.php");
    return true;
}

// by pes18fan, 2022
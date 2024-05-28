

// New account creation - confirmatio of password compliance

// Check if password is at least 8 char long
document.addEventListener('DOMContentLoaded', function() {
    let passwordInput = document.getElementById("password");
    let minPasswordLength = 8;
    let greenMark = document.getElementById("1st-green-mark");
    let redMark = document.getElementById("1st-red-mark")

    passwordInput.addEventListener('input', function() {
        if (passwordInput.value.length >= minPasswordLength) {
            greenMark.style.display = "inline";
            redMark.style.display = "none";
        } else {
            redMark.style.display = "inline";
            greenMark.style.display = "none";
        }
    });
});

// Check is password is a combination of upper and lower cases
document.addEventListener('DOMContentLoaded', function() {
    let passwordInput = document.getElementById("password");
    let greenMark = document.getElementById("2nd-green-mark");
    let redMark = document.getElementById("2nd-red-mark")
    let arr = [];

passwordInput.addEventListener('input', function() {
    for (let i = 0; i < passwordInput.length; i++) {
        if
    }
})

})


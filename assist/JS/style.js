function validateForm() {
    // Get form field values
    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let phone = document.getElementById("phone").value.trim();
    let message = document.getElementById("message").value.trim();

    // Check if any field is empty
    if (name === "" || email === "" || phone === "" || message === "") {
        alert("All fields must be filled out!");
        return false;  // Prevent form submission
    } else {
        alert("Your form has successfully been submitted!!");
        return true;  // Allow form submission
    }
}

function validateSignIn() {
    // Get form field values
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value.trim();

    // Check if any field is empty
    if (email === "") {
        alert("Please enter your email address.");
        return false; // Prevent form submission
    } else if (password === "") {
        alert("Please enter your password.");
        return false; // Prevent form submission
    } else {
        alert("Sign In successful!");
        return true; // Allow form submission
    }
}

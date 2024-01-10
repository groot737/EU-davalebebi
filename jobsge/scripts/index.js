function login() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // For demonstration purposes, let's check if the username and password match
    if (username === "demo" && password === "demo123") {
        // Login successful, close the modal
        $('#loginModal').modal('hide');
    } else {
        // Display error message
        document.getElementById("loginError").innerText = "არასწორი მეილი ან პაროლი";
    }
}
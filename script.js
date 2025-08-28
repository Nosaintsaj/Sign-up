document.addEventListener("DOMContentLoaded", function () {
    const signUpButton = document.getElementById("signUpButton");
    const signInButton = document.getElementById("signInButton");
    const signUpContainer = document.getElementById("signUpContainer");
    const signInContainer = document.getElementById("signInContainer");

    signUpButton.addEventListener("click", function () {
        signUpContainer.style.display = "block";
        signInContainer.style.display = "none";
    });

    signInButton.addEventListener("click", function (event) {
        event.preventDefault();
        signUpContainer.style.display = "none";
        signInContainer.style.display = "block";
    });
});

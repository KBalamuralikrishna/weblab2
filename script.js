$(document).ready(function () {
    $("#registrationForm").on("submit", function (event) {
        // Basic Validation Example
        let name = $("#name").val().trim();
        if (name === "") {
            alert("Name cannot be empty!");
            event.preventDefault(); // Prevent form submission
        }
    });
});

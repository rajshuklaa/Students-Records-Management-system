function showSuccess(event) {
    event.preventDefault(); // stops form from submitting normally

    document.getElementById("regForm").style.display = "none";
    document.getElementById("successBox").style.display = "block";

    return false;
}
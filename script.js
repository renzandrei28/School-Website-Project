function showAlert(message) {
    alert(message);
}

function submitFeedback() {
    const feedback = document.getElementById('feedback').value;

    if (feedback) {

        const xhr = new XMLHttpRequest();
        xhr.open("POST", "submit.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onload = function() {
            if (xhr.status === 200) {
                showAlert("Thank you!");
                document.getElementById('feedback').value = '';
            }
        };

        xhr.send("type=feedback&message=" + encodeURIComponent(feedback));
    } else {
        showAlert("Please enter your feedback!");
    }
}

function submitSuggestion() {
    const suggestion = document.getElementById('suggestion').value;

    if (suggestion) {
   
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "submit.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onload = function() {
            if (xhr.status === 200) {
                showAlert("Thank you!");
                document.getElementById('suggestion').value = ''; 
            }
        };

        xhr.send("type=suggestion&message=" + encodeURIComponent(suggestion));
    } else {
        showAlert("Please enter your suggestion!");
    }
}

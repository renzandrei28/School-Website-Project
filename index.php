<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>School Feedback System</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>School Feedback System</h1>
    
    <div class="feedback-box">
        <h2>Feedback</h2>
        <textarea id="feedback" rows="4" style="width: 100%;" placeholder="Enter your feedback here..."></textarea>
        <button onclick="submitFeedback()">Submit Feedback</button>
    </div>

    <div class="suggestion-box">
        <h2>Suggestions</h2>
        <textarea id="suggestion" rows="4" style="width: 100%;" placeholder="Enter your suggestions here..."></textarea>
        <button onclick="submitSuggestion()">Submit Suggestion</button>
    </div>

    <div class="nav-buttons">
        <button onclick="location.href='feedback_history.php'">View Feedback</button>
        <button onclick="location.href='feedback_history.php?'">View Suggestions</button>
    </div>
</div>

 </div>
 
<script src="script.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Feedback History</title>
 <style>
 body {
 font-family: Arial, sans-serif;
 background-color: #f4f4f4;
 margin: 0;
 padding: 0;
 }
 .container {
 width: 80%;
 margin: 0 auto;
 padding: 20px;
 background-color: #fff;
 box-shadow: 0 0 10px rgba(0,0,0,0.1);
 }
 h1 {
 text-align: center;
 color: #333;
 }
 ul {
 list-style-type: none;
 padding: 0;
 }
 </style>
</head>
<body>
 <div class="container">
 <h1>Feedback and Suggestions History</h1>
 <ul>

 <?php 
  $filename = "feedback_history.txt";
  if (file_exists($filename)) {
  $entries = file($filename);
  foreach ($entries as $entry) {
  echo "<li>" . htmlspecialchars($entry) . "</li>";
  }
  } else {
  echo "<li>No feedback or suggestions available.</li>";
  }
 ?>
 
 </ul>
 <button onclick="location.href='index.php'">Back to Home</button>
 </div>
</body>
</html>
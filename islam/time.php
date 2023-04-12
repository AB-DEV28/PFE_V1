<?php
session_start();
$timeout = 5000;
//  http://localhost:81/fromgit/PFE_V1/islam/time.php

// Assume $row is an associative array containing the result from the MySQL query
$time_str = $row['time_column']; // replace 'time_column' with the name of your time column
$time_int = strtotime($time_str); // convert the time string to a Unix timestamp
$time_diff = $time_int - strtotime('00:00:00'); // calculate the difference between the timestamp and midnight
$time_in_seconds = date('H', $time_diff) * 3600 + date('i', $time_diff) * 60 + date('s', $time_diff); // convert the time to seconds


?>


<!DOCTYPE html>
<html>
<head>
  <title>My Page</title>
</head>
<body>
  <h1>Welcome to My Page</h1>
  <p>This is the content of your page.</p>

  <script data-timeout="<?php echo $timeout; ?>">
    // Set the session timeout in seconds
    const timeout = parseInt(document.currentScript.dataset.timeout);; // Change this value to set the desired session timeout in seconds

    // Set the session start time
    
      setTimeout(() => {
        window.location.href = 'http://localhost:81/fromgit/PFE_V1/index.php';
      }, timeout);
    
  </script>
</body>
</html>




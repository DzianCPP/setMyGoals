<?php

require "connect.php";

$category = $_REQUEST['category'];
$text = $_REQUEST['goalTextArea'];
$date = $_REQUEST['goalDate'];
$complete = $_REQUEST['completedGoalCheckbox'];

if ($complete == '' || $complete == null) {
    $complete = 0;
}

$sql = "INSERT INTO goals (goal_category, goal_text, goal_date, goal_complete) VALUES ($category, $text, $date, $complete)";

if ($conn->query($sql) === true) {
    echo ("Stored");
} else {
    echo ("Failed");
}

$conn->close();

echo ("<script>location.href='index.php'</script>");

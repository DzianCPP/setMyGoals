<?php

require_once "connect.php";

$category = $_REQUEST['category'];
$text = $_REQUEST['goalTextArea'];
$date = $_REQUEST['goalDate'];
$complete = $_REQUEST['completedGoalCheckbox'];

if ($complete == '' || $complete == null) {
    $complete = 0;
}

$sql = "INSERT INTO goals (goal_category, goal_text, goal_date, goal_complete)";
$sql .= "('" . $category . "',";
$sql .= "'" . $text . "',";
$sql .= "'" . $date . "',";
$sql .= "'" . $complete . "')";

if (mysqli_query($link, $sql)) {
    print("Stored");
} else {
    print("Failed");
}

echo ("<script>location.href='index.php'</script>");

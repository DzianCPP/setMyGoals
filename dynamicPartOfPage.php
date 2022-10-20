<?php
include "connect.php";
print("<h2>Incomplete Goals</h2>");

$sql = "SELECT * FROM goals";
$result = $conn->query($sql) or die(mysqli_error($link));

while ($row = mysqli_fetch_array($result)) {
    if ($row['goal_complete'] == 0) {
        if ($row['goal_category'] == 0) {
            $category = "Personal";
        } elseif ($row['goal_category'] == 1) {
            $category = "Career";
        } else {
            $category = "Hobby";
        }
        echo ("<div class='goal'>");
        echo ("<a href='complete.php?id=" . $row['goal_id'] . "'><button class='btnComplete'>Complete</button></a><strong>");
        echo ($category . "</strong<p>" . $row['goal_text'] . "</p>Goal Date: " . $row['goal_date']);
        echo ("</div>");
    }
}


print("<h2>Complete Goals");

$result = $conn->query($sql) or die(mysqli_errno($link));
while ($row = mysqli_fetch_array($result)) {
    if ($row['goal_complete'] != 0) {
        if ($row['goal_category'] == 0) {
            $category = "Personal";
        } elseif ($row['goal_category'] == 1) {
            $category = "Career";
        } else {
            $category = "Hobby";
        }
        echo ("<div class='goal'>");
        echo ("<a href='delete.php?id=" . $row['goal_id'] . "'><button class='btnDelte'>Delete</button></a><strong>");
        echo ($category . "</strong<p>" . $row['goal_text'] . "</p>Goal Date: " . $row['goal_date']);
        echo ("</div>");
    }
}

$conn->close();

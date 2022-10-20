<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Goal Tracker</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="container">
        <h1>New Goal</h1>
        <form action="insert_goal.php" method="post">
            <label for="category">Category</label>
            <select name="category" id="selectCategory">
                <option value="0">Personal</option>
                <option value="1">Career</option>
                <option value="2">Hobby</option>
            </select><br>
            <label for="goalTextArea">Goal</label>
            <textarea name="goalTextArea" id="goalTextArea"></textarea><br>
            <label for="goalDate">Date</label>
            <input type="date" id="goalDate" name="goalDate" /><br>
            <label for="completeGoalCheckbox">Goal Completed</label><br>
            <input type="checkbox" name="completedGoalCheckbox" id="completedGoalCheckbox" /><br>
            <input type="submit" id="submitGoal" value="Submit Goal" />
        </form>

        <?php require "dynamicPartOfPage.php"; ?>
    </div>
</body>

</html>
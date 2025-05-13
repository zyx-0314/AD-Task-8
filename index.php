<?php
$students = ["Oyo", "Van", "Aldous", "Jose"];
$scores = [97, 58, 73, 91];
$passMark = 60;
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/example.css">
    <title>Student List</title>
</head>
<body>
    <img src="assets/img/nyebe_white.png" alt="Logo" width="100">
    <h1>Student Grades</h1>
    <ul>
    <?php
    for ($i = 0; $i < count($students); $i++) {
        if ($scores[$i] >= $passMark) {
            $result = "Passed";
        } else {
            $result = "Failed";
        }
        echo "<li>$students[$i] scored $scores[$i] - $result</li>";
    }
    ?>
    </ul>
    <a href="page/index.php">View Summary</a>
</body>
</html>

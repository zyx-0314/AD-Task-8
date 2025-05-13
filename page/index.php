<?php
$scores = [85, 58, 73, 91];
$passMark = 60;
$passed = 0;
$failed = 0;

for ($i = 0; $i < count($scores); $i++) {
    if ($scores[$i] >= $passMark) {
        $passed++;
    } else {
        $failed++;
    }
}
$total = count($scores);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/example.css">
    <title>Summary</title>
</head>
<body>
    <h1>Summary Report</h1>
    <p>Total Students: <?= $total ?></p>
    <p>Passed: <?= $passed ?></p>
    <p>Failed: <?= $failed ?></p>
    <a href="../index.php">Back</a>
</body>
</html>

<?php
session_start();
if (!isset($_SESSION['student_name'])) {
    header("Location: login.php");
    exit();
}

 include_once("includes/config.php");

$about = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM about_page WHERE id=1"));
$features_result = mysqli_query($conn,"SELECT * FROM about_features WHERE about_id=1");
$features = [];
while($row = mysqli_fetch_assoc($features_result)) { $features[] = $row['feature_text']; }
?>



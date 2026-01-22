<?php
session_start();
if (!isset($_SESSION['student_name'])) {
    header("Location: login.php");
    exit();
}

include_once("includes/config.php");
$catQuery = $conn->query("SELECT * FROM course_categories ORDER BY id ASC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E-learning</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


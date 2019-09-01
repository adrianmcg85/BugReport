<?php require "../connection.php" ?>
<?php
$project = $_POST['project'];
$device = $_POST['device'];
$browser = $_POST['browser'];
$description = $_POST['description'];

$sql = "INSERT INTO bug_report(project, device, browser, description) VALUES('".$project."', '".$device."', '".$browser."', '".$description."');";
$conn->exec($sql);
?>
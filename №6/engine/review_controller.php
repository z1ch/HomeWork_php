<?php

define ("SQL_SERVER", "localhost");
define ("SQL_USER", "root");
define ("SQL_PASS", "");
define ("SQL_BASE", "stphp");

$format = "Y n j";

$connect = mysqli_connect(SQL_SERVER, SQL_USER, SQL_PASS, SQL_BASE);

$reviewMail = $_POST["review-mail"];
$reviewText = $_POST["review-text"];

if ($_POST["review-mail"] && $_POST["review-text"]) {

    $date = date($format);

    $reviewMail = $_POST["review-mail"];
    $reviewText = $_POST["review-text"];

	$INSERT_query = sprintf("INSERT INTO review (mail, text, data) VALUES (\"%s\", \"%s\", \"%s\");", $reviewMail, $reviewText, $date);

	mysqli_query($connect, $INSERT_query);

}

header("Location: /index.php");
mysqli_close($connect);

?>
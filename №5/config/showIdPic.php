<?php

include 'connectSQL.php';

$link = file_get_contents('../templates/showIdContent.php');
$id = $_GET['id'];
$query = "SELECT * FROM stphp.galary WHERE id='$id'";
$result = mysqli_query($connect, $query);
$queryUp = "UPDATE stphp.galary SET opened=opened+1 WHERE id=";

if (mysqli_num_rows($result) != 0) {
    $resultSQL = mysqli_query ($connect, $queryUp.$id);
    $row = mysqli_fetch_assoc($result);
    $adress = $row["adress"].$row["name"];
    $contentImg = '<img src="'.$adress.'" style="width: 100%;">';
    $contentImg .= "<br>Просмотров: ".($row["open"]+1);
    $title = 'picture id='.$id;
}

mysqli_close($connect);

$pattern = array('/{title}/', '/{content}/');
$replace = array( $title, $contentImg);
echo  preg_replace($pattern, $replace, $link);
?>
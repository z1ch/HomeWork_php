<?php

include 'connectSQL.php';

$query = "SELECT * FROM stphp.galary ORDER BY open DESC";
$queryUp = "UPDATE galary SET seen=seen+1 WHERE id=";
$result = mysqli_query ($connect, $query);

$employess = [];

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){ 
        $resultSQL = mysqli_query ($connect, $queryUp.$row["id"]);
        $adress = $row["adress"].$row["name"];
        $seen = $row["seen"];
        $opened = $row["open"];
        
        echo '<div class="imgGen>';
        echo '<div class="pic">';
        echo '<a href="showIdPic.php?id='.$row["id"].'&db='.stphp.galary.'" target="_blank" class="picture">';
        echo '<img src="'.$adress.'" class="picture" style="width: 400px; height: 300px;">';
        echo '</a>';
        echo '</div>';
        echo '</div>';
        echo '<div class="status">';
        echo '<span class="status_seen">Просмотров '.$seen.'</span>';
        echo '<span class="status_opened">Открытий '.$opened.'</span>';    
        echo '</div>';
        echo '</div>';
    };
}

mysqli_close($connect);

?>
<?php


$link = mysqli_connect("localhost", "root", "", "stphp");

$query = "SELECT * FROM stphp.galary;";

$result = mysqli_query ($link, $query);

$employess = [];

while($row = mysqli_fetch_assoc($result)){ 
   $epms[] = $row;
};

print_r ($employess);

mysqli_close($link);

?>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/css/Style.css">
    <title>#4</title>
</head>
<body>

<a href="../public/img/1.jpg" class="link"><img src="../public/img/1.jpg" alt=""></a>
<a href="../public/img/2.jpg" class="link"><img src="../public/img/2.jpg" alt=""></a>
<a href="../public/img/3.jpg" class="link"><img src="../public/img/3.jpg" alt=""></a>
<a href="../public/img/4.jpg" class="link"><img src="../public/img/4.jpg" alt=""></a>
<a href="../public/img/5.jpg" class="link"><img src="../public/img/5.jpg" alt=""></a>
<a href="../public/img/6.jpg" class="link"><img src="../public/img/6.jpg" alt=""></a>
<a href="../public/img/7.jpg" class="link"><img src="../public/img/7.jpg" alt=""></a>
<a href="../public/img/8.jpg" class="link"><img src="../public/img/8.jpg" alt=""></a>



</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../public/css/Style.css">
    <title>#5</title>
</head>
<body>

    <div class="main">
        <div class="galary">
            <?php include 'showImg.php' ?>
        </div>
    </div>
    <div class="active">
        <form action="showIdPic.php" enctype="multipart/form-data" method="GET">
            <h3>Выбрать id фото</h3>
            <input type="number" name="id" value="1">
            <input type="submit" value="Открыть">   
        </form>        
    </div>



</body>
</html>
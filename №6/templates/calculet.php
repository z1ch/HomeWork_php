<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculater</title>
</head>
<body>
    <form action="../engine/calcul_controller.php" method="post" class="calcul">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Первое и второе число</span>
            </div>
            <input name="number[]" value="first" type="number" aria-label="First name" class="form-control" placeholder="<?=$number[0]?>">
            <input name="number[]" value="last" type="number" aria-label="Last name" class="form-control" placeholder="<?=$number[1]?>">
        </div>
        <div class="btn-group">
            <button name="operation[]" value="sum" class="btn btn-primary m-3">Сложить</button>
            <button name="operation[]" value="difference" class="btn btn-primary m-3">Вычесть</button>
            <button name="operation[]" value="multiply" class="btn btn-primary m-3">Умножить</button>
            <button name="operation[]" value="split" class="btn btn-primary m-3">Разделить</button>
        </div>
        <p>Ваш результат: <?=$end?></p>
    </form>
</body>
</html>
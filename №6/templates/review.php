<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Review</title>
</head>
<body>
    <form action="../engine/review_controller.php" method="post" class="review">
        <h4>Оставьте отзыв</h4>
        <div class="form-group">
            <label for="exampleFormControlInput1">Ваш Email address</label>
            <input name="review-mail" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Ваш отзыв</label>
            <textarea name="review-text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button class="btn btn-primary m-3">Оставить отзыв</button>
    </form>
</body>
</html>
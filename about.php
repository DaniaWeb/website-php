<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website-php</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
    <?php require "block/header.php" ?>
    
    <div class="container mt-5">
        <h3>Контактная форма</h3>
        <form action="check.php" method="post">
            <input type="email" name="email" placeholder="Введите ваш email" class="form-comtrol"><br><br>
            <textarea name="message" class="form-control" placeholder="Введите ваше сообщение"></textarea><br>
            <button tupe="submit" name="send" class="btn btn-success">Отправить</button>
        </form>
    </div>
    
    <?php require "block/footer.php" ?>
</body>
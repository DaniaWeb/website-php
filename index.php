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
   <h3 class="mb-5">Карточки товаров</h3>
    <div class="d-flex flex-wrap">
            <div class="container mt-5">    
                <div class="row">
                    <?php for($i=0; $i<8; $i++): ?>
                    <div class="col-3 card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal">Картинки</h4>
                        </div>
                        <div class="card-body">
                            <img src="img/<?php echo rand(1,8) ?>.jpg" class="img-thumbnail">
                            
                            <ul class="list-unstyled mt-3 mb-4">
                            <li>10 users included</li>
                            <li>2 GB of storage</li>
                            <li>Email support</li>
                            <li>Help center access</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
                
            </div>
        
    </div>
    
<?php require "block/footer.php" ?>

</body>
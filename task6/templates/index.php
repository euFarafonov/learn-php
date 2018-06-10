<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?=TITLE?></title>
    <style>
        .msg {
            width: 400px;
            font-weight: 700;
            font-size: 16px;
            color: #000;
            border-radius: 3px;
            margin-bottom: 20px;
            padding: 0 10px;
            box-sizing: border-box;
        }
        
        .error {
            background-color: #FD6347;
        }
        
        .success {
            background-color: #00FF7F;
        }
    </style>
</head>

<body>
<?php if (isset($_SESSION['msg'])) : ?>
    <div class="msg success"><?=$_SESSION['msg']['success']?></div>
    <div class="msg error"><?=$_SESSION['msg']['error']?></div>
    <?php unset($_SESSION['msg']); ?>
<?php endif; ?>




<h1>List of bands</h1>
<?php if (isset($bands)) : ?>
<?php foreach($bands as $band) : ?>
    <h2></h2>
<?php endforeach; ?>
<?php endif; ?>


<h2>Band 1</h2>
<?php var_dump($bands); ?>


<h2>Band 2</h2>

</body>
</html>
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

<h2>Work with SESSION</h2>
<div>Value from SESSION:  <?=$sesName?></div>

<h2>Work with COOKIE</h2>
<div>Value from COOKIE (use duplicate cookie in local):  <?=$cooName?></div>

<h2>Work with MYSQL</h2>
<div>Value before set value in DB:  <?=$selectMysqlBefore[0]['userdata']?></div>
<div>Save value "<?=$val?>" in field "<?=$key?>" - affected rows:  <?=$saveMysql?></div>
<div>Select value "<?=$val?>" from field "<?=$key?>":  <?=$selectMysql[0]['userdata']?></div>
<div>Delete value "<?=$val?>" from field "<?=$key?>" - affected rows:  <?=$deleteMysql?></div>
<div>Value after delete value from DB:  <?=$selectMysqlAfter[0]['userdata']?></div>

</body>
</html>
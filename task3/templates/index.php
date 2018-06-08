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

<h1>Work with file "<?=FILE?>"</h1>
<?php
foreach ($text as $item)
{
	echo $item.'<br>';
}
?>

<h2>Print line <?=$line1?> from file</h2>
<?=$line?>

<h2>Print symbol <?=$position?> from line <?=$line2?> from file</h2>
<?=$symbol?>

<h2>Replace <?=$line3?> line in base file</h2>
<?php
foreach ($newFile as $item)
{
	echo $item.'<br>';
}
?>



</body>
</html>
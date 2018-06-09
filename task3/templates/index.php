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
<h2>===== Print base file "<?=FILE?>" =====</h2>
<?php
if ($text)
{
    foreach ($text as $item)
    {
    	echo $item.'<br>';
    }
}
?>

<h2>===== Print line "<?=$numLine1?>" from base file "<?=FILE?>" =====</h2>
<?=$line?>

<h2>===== Print symbol "<?=$posSymbol1?>" in line "<?=$numLine2?>" from base file "<?=FILE?>" =====</h2>
<?echo '"'.$symbol.'"'?>

<h2>===== Replace "<?=$numLine3?>" line in base file "<?=FILE?>" =====</h2>
<h3>New line: "<?=$newStr?>"</h3>
<h3>Print new file:</h3>
<?php
if ($fileNewLine)
{
    foreach ($fileNewLine as $item)
    {
    	echo $item.'<br>';
    }
}
?>

<h2>===== Replace "<?=$numSymbol?>" symbol in <?=$numLine4?> line from base file "<?=FILE?>" =====</h2>
<h3>New symbol: "<?=$newSymbol?>"</h3>
<h3>Print new file:</h3>
<?php
if ($fileNewSymbol)
{
    foreach ($fileNewSymbol as $item)
    {
    	echo $item.'<br>';
    }
}
?>

</body>
</html>
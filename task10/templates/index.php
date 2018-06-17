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


<h2>Work with database MySQL</h2>
<h3>INSERT in database</h3>
<p>Query: <?=$resultInsertMy['stmt']->queryString; ?></p>
<p>Affected <?=$resultInsertMy['result']?> line in database</p>

<h3>SELECT from database</h3>
<p>Query: <?=$resultSelectMy['stmt']->queryString; ?></p>
<p>Result: <?=$resultSelectMy[0]['userdata']?></p>
<!--
<h3>UPDATE data in database</h3>
<p>Update in database to the following text: "<?=$dataUpdateMy?>"</p>
<p>Affected <?=$resultUpdateMy?> line in database</p>

<h3>DELETE data from database</h3>
<p>Affected <?=$resultDeleteMy?> line in database</p>


<h2>Work with database PgSQL</h2>
<h3>INSERT in database</h3>
<p>Insert in database text: "<?=$dataInsertPg?>"</p>
<p>Affected <?=$resultInsertPg?> line in database</p>

<h3>SELECT from database</h3>
<p>Result: <?=$resultSelectPg[0]['userdata']?></p>

<h3>UPDATE data in database</h3>
<p>Update in database to the following text: "<?=$dataUpdatePg?>"</p>
<p>Affected <?=$resultUpdatePg?> line in database</p>

<h3>DELETE data from database</h3>
<p>Affected <?=$resultDeletePg?> line in database</p>
-->
</body>
</html>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?=TITLE?></title>
</head>

<body>

<form method="post" action="" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="btn" value="submit">
    <style>
        .table {
            width: 400px;
            border-collapse: collapse;
            margin-bottom: 20px;
            text-align: center;
        }
        
        th, td {
            border: 1px solid #aaa;
            box-sizing: border-box;
            
        }
        
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
</form>

<h1>Files from dir "<?=UPLOAD?>"</h1>
<table class="table">
    <tr>
    	<th>#</th>
    	<th>File Name</th>
    	<th>File Size</th>
    	<th>Command</th>
    </tr>
    <?php if ($files) :  ?>
    <?php $i = 1; ?>
    <?php foreach ($files as $file) : ?>
    <tr>
    	<td><?=$i++;?></td>
    	<td><?=$file['name']?></td>
    	<td><?=$file['size']?></td>
    	<td><a href="?delete&filename=<?=$file['name']?>">Delete</a></td>
    </tr>
    <?php endforeach; ?>
    <?php endif; ?>
</table>

<?php if (isset($_SESSION['msg'])) : ?>
    <div class="msg success"><?=$_SESSION['msg']['success']?></div>
    <div class="msg error"><?=$_SESSION['msg']['error']?></div>
    <?php unset($_SESSION['msg']); ?>
<?php endif; ?>
</body>
</html>

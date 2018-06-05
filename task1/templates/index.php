<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>

<form method="post" action="" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="btn" value="submit">
</form>

<h1>Uploaded files</h1>
<table>
    <tr>
	<td>№</td>
	<td>File Name</td>
	<td>File Size</td>
	<td>Command</td>
    </tr>
    <?php if (isset($files)) :  ?>
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

<?php if (isset($_SESSION['msg']))
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
?>


</body>
</html>

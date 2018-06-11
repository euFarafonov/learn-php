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
        
        table {
            width: 400px;
            border-collapse: collapse;
            text-align: center;
        }
        
        th, td {
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>
<?php if (isset($_SESSION['msg'])) : ?>
    <div class="msg success"><?=$_SESSION['msg']['success']?></div>
    <div class="msg error"><?=$_SESSION['msg']['error']?></div>
    <?php unset($_SESSION['msg']); ?>
<?php endif; ?>

<h2>Initial data from MySQL</h2>
<table>
    <caption>Bands</caption>
    <tr>
        <th>#</th>
        <th>Band name</th>
        <th>Band genre</th>
    </tr>
    <?php $bandNum = 1;?>
    <?php foreach($bands as $band) : ?>
    <tr>
        <td><?=$bandNum++?></td>
        <td><?=$band['band_name']?></td>
        <td><?=$band['genre_name']?></td>
    </tr>
    <?php endforeach; ?>
</table>

<table>
    <caption>Musicians</caption>
    <tr>
        <th>#</th>
        <th>Musician name</th>
        <th>Musician instrument</th>
    </tr>
    <?php $musicianNum = 1;?>
    <?php foreach($musicians as $musician) : ?>
    <tr>
        <td><?=$musicianNum++?></td>
        <td><?=$musician['musician_name']?></td>
        <td><?=$musician['instrument_name']?></td>
    </tr>
    <?php endforeach; ?>
</table>

<table>
    <caption>Instrument</caption>
    <tr>
        <th>#</th>
        <th>Instrument name</th>
        <th>Instrument category</th>
    </tr>
    <?php $instrumentNum = 1;?>
    <?php foreach($instruments as $instrument) : ?>
    <tr>
        <td><?=$instrumentNum++?></td>
        <td><?=$instrument['instrument_name']?></td>
        <td><?=$instrument['category_name']?></td>
    </tr>
    <?php endforeach; ?>
</table>

<h2>Resutl data</h2>
<?php $bandNumber = 1;?>
<?php foreach($result as $item) : ?>
<h3>Band #<?=$bandNumber++?> - <?=$item->getName()?> (genre - <?=$item->getGenre()?>)</h3>
<table>
    <tr>
        <th>Musician name</th>
        <th>Musician instrument</th>
        <th>Musician type</th>
    </tr>
    <?php foreach($item->getMusician() as $musicant) : ?>
    <tr>
        <td><?=$musicant->getName()?></td>
        <td><?=$musicant->getInstrument()->getName()?> (<?=$musicant->getInstrument()->getCategory()?>)</td>
        <td><?=$musicant->getMusicianType()?></td>
    </tr>
    <?php endforeach; ?>
</table>
<?php endforeach; ?>

<?php //var_dump($bands); ?>
<?php //var_dump($musicians); ?>
<?php //var_dump($instruments); ?>

</body>
</html>
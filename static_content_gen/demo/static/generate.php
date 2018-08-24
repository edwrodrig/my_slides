<?php



$raw_data = file_get_contents(__DIR__ . '/data/db.json');
$db_data = json_decode($raw_data, true);

system('rm -rf output');
mkdir(__DIR__ . '/output/chara', 0777, true);

system('cp -rf data/image output');
//generar index
ob_start();
?>
<!DOCTYPE>
<html>
<head>
        <meta charset="utf-8">
        <title><?=$db_data['title']?></title>
</head>
<body>
        <h1><?=$db_data['title']?></h1>

        <ul>
	<?php foreach ( $db_data['charas'] as $chara ) : ?>
        <li><a href="chara/<?=$chara['id']?>.html"><img width="50" src="image/p_<?=$chara['id']?>.jpg"><?=$chara['name']?></a>
	<?php endforeach; ?>
        </ul>
</body>
</html>
<?php

file_put_contents(__DIR__ . '/output/index.html', ob_get_clean());

//generar paginas de cada personaje
foreach ( $db_data['charas'] as $chara ) :

ob_start();
?>
<!DOCTYPE>
<html>
<head>
        <meta charset="utf-8">
        <title><?=$db_data['title']?></title>
</head>
<body>
        <h1><?=$db_data['title']?></h1>
	<a href="../index.html">Volver</a>
        <h1><img width="50" src="../image/p_<?=$chara['id']?>.jpg"><?=$chara['name']?></h1>
	<p><img width="50%" src="../image/<?=$chara['id']?>.jpg"><?=$chara['desc']?></p>
</body>
</html>
<?php
file_put_contents(__DIR__ . '/output/chara/' . $chara['id'] . '.html', ob_get_clean());

endforeach;







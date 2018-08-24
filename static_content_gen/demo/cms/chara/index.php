<?php



$raw_data = file_get_contents(__DIR__ . '/../data/db.json');
$db_data = json_decode($raw_data, true);

foreach ( $db_data['charas'] as $chara ) :
	if ( $chara['id'] != $_GET['chara'] ) continue;
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

endforeach;







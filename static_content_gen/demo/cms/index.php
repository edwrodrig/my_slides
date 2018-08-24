<?php



$raw_data = file_get_contents(__DIR__ . '/data/db.json');
$db_data = json_decode($raw_data, true);

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
        <li><a href="chara/index.php?chara=<?=$chara['id']?>"><img width="50" src="image/p_<?=$chara['id']?>.jpg"><?=$chara['name']?></a>
	<?php endforeach; ?>
        </ul>
</body>
</html>







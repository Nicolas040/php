<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>
<body>
<ul>
    <?php foreach($articles as $article): ?>
        <li><?=$article['titre']?></li>
    <?php endforeach;?>
</ul>
</body>
</html>
<!DOCTYPE html>
<html>
<head> MVC </head>
<body>
    <section>
        <h1>Items</h1>
            <ul>
            <?php foreach ($items as $item) : ?>
                <li><?= $item['title'] ?></li>
                <a href='/item/<?=$item['id']?>'>Détails</a>
            <?php endforeach ?>
            </ul>
        </section>
</body>
</html>

